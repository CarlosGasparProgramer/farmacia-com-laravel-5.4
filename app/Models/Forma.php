<?php

namespace farmacia\Models;

use Illuminate\Database\Eloquent\Model;

class Forma extends Model
{
    protected $fillable = ['nome', 'medida'];
    
    public function medicamento()
    {
        return $this->belongsTo('farmacia\Models\Medicamentos');
    }
    
    public function listar() {
        
    }

    public function cadastrar($forma){
        
        $forma = $this->create($forma);
        if($forma){
            
            return [
                'success' => 'true',
                'message' => 'A nova forma de medicamento foi regeistada com sucesso.',
                'type'    => 'success',
            ];
        }  else {
            return [
                'success' => 'false',
                'message' => 'Oops! houve um erro no registo da nova forma de medicamento',
                'type'    => 'danger',
            ];
        }
    }
    
    public function editar($forma){
        
        $forma = $this->update($forma);
        if($forma){
            
            return [
                'success' => 'true',
                'message' => 'A forma de medicamento foi editada com sucesso',
                'type'    => 'success',
            ];
        }  else {
            return [
                'success' => 'false',
                'message' => 'Oops! houve um erro ao editar a forma de medicamento',
                'type'    => 'danger',
            ];
        }
    }
    public function eliminar($dados){
        
       
        $forma = $dados->delete();
        
        if($forma){
            
            return [
                'success' => 'true',
                'message' => 'A forma de medicamento foi eliminada com sucesso',
                'type'    => 'success',
            ];
        }  else {
            return [
                'success' => 'false',
                'message' => 'Oops! houve um erro ao eliminar a forma de medicamento',
                'type'    => 'danger',
            ];
        }
    }
}
