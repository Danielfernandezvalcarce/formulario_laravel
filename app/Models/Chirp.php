<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chirp extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'extracto',
        'contenido',
        'caducable',
        'comentable',
        'acceso',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
