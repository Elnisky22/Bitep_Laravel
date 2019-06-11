<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model {
    protected $table = "cidades";
    protected $primaryKey = "id";
    public $incrementing = true;
    public $timestamps = false;
    protected $fillable = ['id', 'nome', 'estado_id'];
    protected $guarded = [];
}
