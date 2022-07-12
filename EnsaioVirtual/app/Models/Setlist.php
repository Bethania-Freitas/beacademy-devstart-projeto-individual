<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setlist extends Model
{
    use HasFactory;

    protected $fillable = [
        'Musica',
        'Interprete',
        'Link',
        'Lyric',
    ];

    public function getUsers(string $search = null)
    {
        $setlists = $this->where( function ($query) use ($search)  {
            if($search){
                $query->where('Musica', 'LIKE', "%{$search}%");
                $query->orWhere('Interprete', 'LIKE', "%{$search}%");
            }
        })
        ->paginate(7);

        return $setlists;
    }

    public function file()
    {
        return $this->hasOne(File::class, 'id', 'id_lyrics');
    }

    Public static function buscarSetlistComLyrics($id)
    {
        return static::with('file')->find($id);
    }

}
