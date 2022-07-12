<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setlist extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nome da Musica',
        'Interprete',
        'Link',

    ];

    public function file()
    {
        return $this->hasOne(file::class, 'id_lyrics', 'id');
    }

    public function buscarSetListComLyrics($id)
    {
        return self::find($id)->with('file');
    }
}
