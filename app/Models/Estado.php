<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model {
    protected $table = "estados";
    protected $primaryKey = "id";
    public $incrementing = true;
    public $timestamps = false;
    protected $fillable = ['id', 'nome'];
    protected $guarded = [];
}
