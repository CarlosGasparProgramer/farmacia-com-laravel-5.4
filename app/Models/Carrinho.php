<?php

namespace farmacia\Models;

use Illuminate\Database\Eloquent\Model;

class Carrinho extends Model
{
    protected $fillable = ['data', 'sessao', 'preco', 'user_id', 'estado'];
}
