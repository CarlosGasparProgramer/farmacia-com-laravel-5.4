<?php

namespace farmacia\Http\Controllers;

use farmacia\Models\entrada;
use farmacia\Models\Medicamentos;
use Illuminate\Http\Request;

class EntradaController extends Controller
{
    private $medicamentos;
    private $entrada;
    private $totalPage = 10;


    public function __construct(entrada $entrada, Medicamentos $medicamentos) {
        $this->entrada = $entrada;
        $this->medicamentos = $medicamentos;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entradas = $this->entrada->listar_entradas($this->totalPage);
        return view('entrada.entradas', compact('entradas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medicamentos = $this->medicamentos->listar();
        $header = "Registar Entrada de Medicamento";
        return view('entrada.nova', compact('header', 'medicamentos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataForm = $request->except('_token');
        
        $entrada = $this->entrada->cadastrar($dataForm);

        session()->flash('success-entrada', [
            'success' => $entrada['success'],
            'messages' => $entrada['message'],
            'type' => $entrada['type'],
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \farmacia\Models\entrada  $entrada
     * @return \Illuminate\Http\Response
     */
    public function show(entrada $entrada)
    {
        $entradas = $entrada;
        $medicamentos = $this->medicamentos->listar();
        $header = "Registar Entrada de Medicamento";
        return view('entrada.entrada', compact('header', 'medicamentos', 'entradas')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \farmacia\Models\entrada  $entrada
     * @return \Illuminate\Http\Response
     */
    public function edit(entrada $entrada)
    {
        $entradas = $entrada;
        $medicamentos = $this->medicamentos->listar();
        $header = "Registar Entrada de Medicamento";
        return view('entrada.nova', compact('header', 'medicamentos', 'entradas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \farmacia\Models\entrada  $entrada
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, entrada $entrada)
    {
        $dataForm = $request->except('_token');
        
        $entrada = $this->entrada->editar($dataForm, $entrada->id);

        session()->flash('success-entrada', [
            'success' => $entrada['success'],
            'messages' => $entrada['message'],
            'type' => $entrada['type'],
        ]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \farmacia\Models\entrada  $entrada
     * @return \Illuminate\Http\Response
     */
    public function destroy(entrada $entrada)
    {
        $entrada = $this->entrada->eliminar($entrada);

        session()->flash('success-entrada', [
            'success' => $entrada['success'],
            'messages' => $entrada['message'],
            'type' => $entrada['type'],
        ]);
        
        if($entrada['success'] == "true"){
            return redirect()->route('entrada.index');
        }  else {
            return redirect()->back();
        }
        
    }
    
    public function search(Request $request) {
        $dataForm = $request->except('_token');
        
        $entradas = $this->entrada->search($dataForm, 100);
        
         return view('entrada.entradas', compact('entradas', 'dataForm'));
    }
}
