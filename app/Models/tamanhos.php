<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Constraints\SoftDeletedInDatabase;
use Illuminate\Database\Eloquent\SoftDeletes;

class tamanhos extends Model
{
    use SoftDeletes;
    protected $table = 'tamanhos';
    protected $primaryKey = 'id_tamanho';
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];


    protected $fillable = [
        'tamanho'
    ];
}
