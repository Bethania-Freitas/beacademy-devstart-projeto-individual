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
        return $this->hasOne(file::class, 'id_lyrics', 'id');
    }

    public function buscarSetListComLyrics($id)
    {
        return self::find($id)->with('file');
    }
}
