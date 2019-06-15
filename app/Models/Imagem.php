<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imagem extends Model {
    protected $table = "imagens";
    protected $primaryKey = "id";
    public $incrementing = true;
    public $timestamps = false;
    protected $fillable = ['id', 'imagem','pet_id'];
    protected $guarded = [];
}