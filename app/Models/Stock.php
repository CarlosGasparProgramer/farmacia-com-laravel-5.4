<?php

namespace farmacia\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Stock extends Model {

    public function searchMedicamento(Array $data, $totalPage) {

        $medicamentos = DB::table('medicamentos')
                ->join('formas', 'formas.id', '=', 'medicamentos.forma_id')
                ->join('entradas', 'entradas.medicamento_id', '=', 'medicamento_id')
                ->select('medicamentos.*', 'formas.nome as nome_forma', 'entradas.*')
                ->where([
                    ['medicamentos.nome', '=', $data['nome']],
                    ['formas.id', '=', $data['forma_id']],
                ])->get();
                //->paginate($totalPage);

        return $medicamentos;
    }

}
