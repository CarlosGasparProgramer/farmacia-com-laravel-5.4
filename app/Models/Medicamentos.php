<?php

namespace farmacia\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Medicamentos extends Model {

    protected $fillable = ['nome', 'forma_id', 'descricao', 'publico', 'conservacao'];

    public function entradas() {
        return $this->hasMany('farmacia\Models\entrada');
    }

    public function formas() {
        return $this->hasMany('farmacia\Models\Forma');
    }

    public function buscar($id, $nome) {
        $retorno = $this->where(function ($query) {
            if (isset($id))
                $query->where('id', $id);
            if (isset($nome))
                $query->where('nome', $nome);
        });

        return $retorno;
    }

    public function listar_todos($totalPage) {
        $medicamentos = DB::table('medicamentos')
                ->join('formas', 'formas.id', '=', 'medicamentos.forma_id')
                ->select('medicamentos.*', 'formas.nome as nome_forma')
                ->paginate($totalPage);
        return $medicamentos;
    }

    public function listar() {
        $medicamentos = DB::table('medicamentos')
                ->join('formas', 'formas.id', '=', 'medicamentos.forma_id')
                ->select('medicamentos.*', 'formas.nome as nome_forma', 'formas.medida')
                ->get();
        return $medicamentos;
    }

    public function cadastrar($dados) {

        $medicamento = $this->create($dados);
        if ($medicamento) {

            return [
                'success' => 'true',
                'message' => 'O Medicamento foi registado com sucesso.',
                'type' => 'success',
            ];
        } else {
            return [
                'success' => 'false',
                'message' => 'Oops! houve um erro no registo do medicamento',
                'type' => 'danger',
            ];
        }
    }

    public function editar($dados, $id) {
        $med = $this->find($id);
        $medicamento = $med->update($dados);
        if ($medicamento) {

            return [
                'success' => 'true',
                'message' => 'O Medicamento foi editado com sucesso.',
                'type' => 'success',
            ];
        } else {
            return [
                'success' => 'false',
                'message' => 'Oops! houve um erro ao editar medicamento',
                'type' => 'danger',
            ];
        }
    }

    public function eliminar($id) {

        $med = $this->find($id);
        $medicamento = $med->delete();
        if ($medicamento) {

            return [
                'success' => 'true',
                'message' => 'O Medicamento foi eliminado com sucesso.',
                'type' => 'success',
            ];
        } else {
            return [
                'success' => 'false',
                'message' => 'Oops! houve um erro ao eliminar medicamento',
                'type' => 'danger',
            ];
        }
    }

    public function search(Array $data, $totalPage) {
        if(isset($data['id'])) {
            $medicamentos = DB::table('medicamentos')
                    ->join('formas', 'formas.id', '=', 'medicamentos.forma_id')
                    ->select('medicamentos.*', 'formas.nome as nome_forma')
                    ->where('medicamentos.id', $data['id'])
                    ->paginate($totalPage);
        } else {
            $medicamentos = DB::table('medicamentos')
                    ->join('formas', 'formas.id', '=', 'medicamentos.forma_id')
                    ->select('medicamentos.*', 'formas.nome as nome_forma')
                    ->where('medicamentos.nome', $data['nome'])
                    ->paginate($totalPage);
        }
        return $medicamentos;
    }

}
