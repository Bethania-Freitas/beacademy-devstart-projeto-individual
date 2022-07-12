<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $fillable = [
        'orig_filename',
        'mime_type',
        'filesize',
        'content',
    ];

    public function setList()
    {
        return $this->belongsTo(Setlist::class, 'id_lyrics', 'id');
    }
}
