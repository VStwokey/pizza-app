<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\{
    Produto,
    Tamanho
};

class Produtos_Tamanhos extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'produtos_tamanhos';
    protected $primaryKey = 'id_produto_tamanho';
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];


    protected $fillable = [
        'id_produto',
        'id_tamanho',
        'nome',
        'foto',
        'descricao',
        'observacoes',
    ];

    // RELACIONAMENTOS

    public function produto(): object {
        return $this->hasOne(Tamanho::class,
                                'id_tamanho',
                                'id_tamanho');
    }
}

?>
