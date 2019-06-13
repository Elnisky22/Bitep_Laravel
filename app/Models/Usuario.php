<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Model {
	use Notifiable;

    protected $table = 'usuarios';
    protected $primaryKey = 'id';
    protected $fillable = ['nome', 'email', 'created_at', 'senha', 'telefone'];
    protected $guarded = ['id', 'cidade_id'];
    protected $hidden = ['senha', 'remember_token',];
    protected $casts = ['email_verified_at' => 'datetime',];
}
