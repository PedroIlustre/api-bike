<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bike extends Model
{
    protected $fillable = [
        'descricao','modelo','preco','data_cadastro','vendida'
    ];
}
