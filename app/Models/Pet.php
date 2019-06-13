<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model {
    protected $table = 'pets';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
    protected $fillable = ['id', 'nome', 'genero', 'especie', 'raca', 'observacao'];
    protected $guarded = [];
}
