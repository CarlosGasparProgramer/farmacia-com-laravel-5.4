<?php

namespace farmacia\Http\Controllers;

use farmacia\Models\Forma;
use farmacia\Http\Requests\FormaStoreFormRequest;
use farmacia\Http\Requests\FormaUpdateFormRequest;
use Illuminate\Http\Request;

class FormaController extends Controller {

    private $forma;
    
    public function __construct(Forma $forma) {
        $this->forma = $forma;
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $formas = $this->forma->all();
       return view('forma.formas', compact('formas')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $header = "Cadastrar Forma de Medicamento";
        $titulo = "Gesfarm - Cadastrar Forma de medicamento";
        return view('forma.nova', compact('titulo', 'header'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \farmacia\Models\Forma  $forma
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormaStoreFormRequest $request, Forma $forma) {
        
        $forma = $forma->cadastrar($request->except('_token'));
        
        session()->flash('success-forma', [
            'success'  => $forma['success'],
            'messages' => $forma['message'],
            'type'     => $forma['type'],
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \farmacia\Models\Forma  $forma
     * @return \Illuminate\Http\Response
     */
    public function show(Forma $forma) {
        $info_forma = $forma;
        $header = "Forma de Medicamento: {$forma->nome}";
        $titulo = "Gesfarm - Cadastrar Forma de medicamento";
        return view('forma.forma', compact('titulo', 'header', 'info_forma'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \farmacia\Models\Forma  $forma
     * @return \Illuminate\Http\Response
     */
    public function edit(Forma $forma) {
        $forma = $this->forma->find($forma->id);
        $header = "Edidar Forma de Medicamento";
        $titulo = "Gesfarm - Editar Forma de medicamento: {$forma->nome}";
        return view('forma.nova', compact('titulo', 'header', 'forma'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \farmacia\Models\Forma  $forma
     * @return \Illuminate\Http\Response
     */
    public function update(FormaUpdateFormRequest $request, Forma $forma) {
        
        
         $forma = $forma->editar($request->except('_token'));
        
        session()->flash('success-forma', [
            'success'  => $forma['success'],
            'messages' => $forma['message'],
            'type'     => $forma['type'],
        ]);
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \farmacia\Models\Forma  $forma
     * @return \Illuminate\Http\Response
     */
    public function destroy(Forma $forma) {
        
         $busca = $this->forma->find($forma->id);
       
         $forma = $forma->eliminar($busca);
        
        session()->flash('success-forma', [
            'success'  => $forma['success'],
            'messages' => $forma['message'],
            'type'     => $forma['type'],
        ]);
        
        if($forma['success'] == "true"){
           return redirect()->route('forma.index'); 
        }  else {
            return redirect()->back();
        }
        
    }
    
    public function search(Request $request) {
        $formas = Forma::where('nome', $request->nome)->get();

       return view('forma.formas', compact('formas'));
    }

}
