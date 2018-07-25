<?php

namespace farmacia\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class entrada extends Model {

    protected $fillable = ['data_entrada', 'preco_venda', 'preco_compra', 'data_expiracao', 'tamanho', 'quant', 'medicamento_id'];

    public function listar_entradas($totalPage) {
        $entradas = DB::table('entradas')
                ->join('medicamentos', 'medicamentos.id', '=', 'entradas.medicamento_id')
                ->join('formas', 'formas.id', '=', 'medicamentos.forma_id')
                ->select('entradas.*', 'medicamentos.*', 'formas.nome as nome_forma', 'entradas.id as id_entrada')
                ->paginate($totalPage);
        return $entradas;
    }

    public function medicamento() {
        return $this->belongsTo('farmacia\Models\Medicamentos');
    }

    public function cadastrar($dataForm) {

        $entrada = $this->create($dataForm);
        if ($entrada) {

            return [
                'success' => 'true',
                'message' => 'A entrada de medicamento foi registada com sucesso',
                'type' => 'success',
            ];
        } else {
            return [
                'success' => 'false',
                'message' => 'Oops! houve um erro no registo da entrada do medicamento',
                'type' => 'danger',
            ];
        }
    }

    public function editar($dataForm, $id) {
        $entrad = $this->find($id);
        $entrada = $entrad->update($dataForm);

        if ($entrada) {

            return [
                'success' => 'true',
                'message' => 'A entrada de medicamento foi editada com sucesso',
                'type' => 'success',
            ];
        } else {
            return [
                'success' => 'false',
                'message' => 'Oops! houve um erro ao editar a entrada do medicamento',
                'type' => 'danger',
            ];
        }
    }

    public function eliminar($dataForm) {

        $entrada = $dataForm->delete();

        if ($entrada) {

            return [
                'success' => 'true',
                'message' => 'A entrada de medicamento foi eliminada com sucesso',
                'type' => 'success',
            ];
        } else {
            return [
                'success' => 'false',
                'message' => 'Oops! houve um erro ao eliminar a entrada do medicamento',
                'type' => 'danger',
            ];
        }
    }

    public function search($dataForm, $totalPage) {
        if(isset($dataForm['nome']) || isset($dataForm['data_entrada'])) {
            $entradas = DB::table('entradas')
                    ->join('medicamentos', 'medicamentos.id', '=', 'entradas.medicamento_id')
                    ->join('formas', 'formas.id', '=', 'medicamentos.forma_id')                    
                    ->select('entradas.*', 'medicamentos.*', 'formas.nome as nome_forma', 'entradas.id as id_entrada')
                    ->where('medicamentos.nome', '=', $dataForm['nome'])
                    ->orWhere('entradas.data_entrada', '=', $dataForm['data_entrada'])
                    ->paginate($totalPage);
            
        } 
        return $entradas;
    }

}
