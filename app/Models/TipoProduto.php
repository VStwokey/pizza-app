<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoProduto extends Model
{
    use SoftDeletes;
    protected $table = 'tipo_produtos';
    protected $primaryKey = 'id_tipo_produto';
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];


    protected $fillable = [
        'tipo_produtos'
    ];
}
