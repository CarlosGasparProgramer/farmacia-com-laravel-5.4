<?php

namespace farmacia\Http\Controllers;

use farmacia\Models\Medicamentos;
use farmacia\Models\Forma;
use farmacia\Http\Requests\MedicamentoStoreFormRequest;
use farmacia\Http\Requests\MedicamentoUpdateFormRequest;
use Illuminate\Http\Request;

class MedicamentosController extends Controller {

    private $forma;
    private $medicamentos;
    private $totalPage = 10;

    public function __construct(Forma $forma, Medicamentos $medicamentos) {
        $this->forma = $forma;
        $this->medicamentos = $medicamentos;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $medicamentos = $this->medicamentos->listar_todos($this->totalPage);
        $titulo = "Gesfarm - Medicamento Cadastrados";
        return view('medicamento.medicamentos', compact('titulo', 'medicamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $formas = $this->forma->all();
        $titulo = "Gesfarm - Cadastro de Medicamento";
        return view('medicamento.novo', compact('titulo', 'formas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MedicamentoStoreFormRequest $request) {
        
        $medicamento = $this->medicamentos->cadastrar($request->except('_token'));

        session()->flash('success-medicamento', [
            'success' => $medicamento['success'],
            'messages' => $medicamento['message'],
            'type' => $medicamento['type'],
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \farmacia\Models\Medicamentos  $medicamentos
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $medicamento = $this->medicamentos->find($id);
        
        $formas = $this->forma->all();
        $titulo = "Gesfarm - Medicamento";
        return view('medicamento.medicamento', compact('titulo', 'formas', 'medicamento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \farmacia\Models\Medicamentos  $medicamentos
     * @return \Illuminate\Http\Response
     */
    
    
    public function edit($id) {
        
        $med = $this->medicamentos->find($id);        
        $formas = $this->forma->all();
        $header = "Editar Medicamento";
        $titulo = "Gesfarm - Editar de Medicamento: {$med->nome}";
        return view('medicamento.novo', compact('titulo', 'formas', 'med', 'header'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \farmacia\Models\Medicamentos  $medicamentos
     * @return \Illuminate\Http\Response
     */
    public function update(MedicamentoUpdateFormRequest $request, $id) {    
        
        $data = $request->except('_token');
                
        $medicamento = $this->medicamentos->editar($data, $id);

        session()->flash('success-medicamento', [
            'success' => $medicamento['success'],
            'messages' => $medicamento['message'],
            'type' => $medicamento['type'],
        ]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \farmacia\Models\Medicamentos  $medicamentos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $medicamento = $this->medicamentos->eliminar($id);
        dd($medicamento);
        session()->flash('success-medicamento', [
            'success' => $medicamento['success'],
            'messages' => $medicamento['message'],
            'type' => $medicamento['type'],
        ]);
        
        if($medicamento['success'] == "true"){
            return redirect()->route('medicamento.index');
        }  else {
            return redirect()->back();
        }
        
    }
    
    public function search(Request $request) {
        $dataForm = $request->all();
        
        $medicamentos = $this->medicamentos->search($dataForm, $this->totalPage);
        
        $titulo = "Gesfarm - Resultado da Pesquisa";
        return view('medicamento.medicamentos', compact('titulo', 'medicamentos', 'dataForm'));
    }

}
