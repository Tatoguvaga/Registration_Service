<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users'; // Nombre de la tabla en MySQL
    protected $fillable = ['name', 'email', 'password'];
    public $timestamps = true;
}