<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    
    // Campos que se pueden asignar masivamente
    protected $fillable = [
        'name',
        'email',
        'created_at',
        'updated_at'
    ];
    
    // Campos que se ocultan en la serialización JSON
    protected $hidden = [];
    
    // Tipos de datos automáticos
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
