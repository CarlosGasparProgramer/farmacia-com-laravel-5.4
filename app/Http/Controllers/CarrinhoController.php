<?php

namespace farmacia\Http\Controllers;

use farmacia\Models\Carrinho;
use Illuminate\Http\Request;
use farmacia\Models\Forma;
use farmacia\Models\Medicamentos;
use farmacia\Models\Stock;
use Session;

class CarrinhoController extends Controller {

    private $forma;
    private $medicamento;
    private $stock;

    public function __construct(Forma $forma, Medicamentos $medicamentos, Stock $stock) {
        $this->forma = $forma;
        $this->medicamento = $medicamentos;
        $this->stock = $stock;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $formas = $this->forma->all();
        $medicamentos = $this->medicamento->all();
        return view('carrinho.pesquisar', compact('formas', 'medicamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \farmacia\Models\Carrinho  $carrinho
     * @return \Illuminate\Http\Response
     */
    public function show(Carrinho $carrinho) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \farmacia\Models\Carrinho  $carrinho
     * @return \Illuminate\Http\Response
     */
    public function edit(Carrinho $carrinho) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \farmacia\Models\Carrinho  $carrinho
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Carrinho $carrinho) {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \farmacia\Models\Carrinho  $carrinho
     * @return \Illuminate\Http\Response
     */
    public function destroy(Carrinho $carrinho) {
        
    }

    public function searchMedicamento(Request $request) {

        $formas = $this->forma->all();
        $medicamentos = $this->medicamento->all();
        $dataForm = $request->except('_token');
        $resultados = $this->stock->searchMedicamento($dataForm, 4);

        $titulo = "Gesfarm - Resultado da Pesquisa";
        return view('carrinho.pesquisar', compact('titulo', 'resultados', 'medicamentos', 'dataForm', 'formas'));
    }

}
