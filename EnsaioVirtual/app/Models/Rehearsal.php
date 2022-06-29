<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rehearsal extends Model
{
    use HasFactory;

    protected $fillable = [
        'Data',
        'Hora',
        'Local',
        'Custo',
    ];
    protected $table = "rehearsal";
}
