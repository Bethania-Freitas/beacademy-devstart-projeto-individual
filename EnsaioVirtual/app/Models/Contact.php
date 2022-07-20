<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'tel',
        'messageClient',
    ];
    protected $table = "contacts";

    protected $attributes = [
        'read' => 0,
        'answered' => 0,
    ];
}
