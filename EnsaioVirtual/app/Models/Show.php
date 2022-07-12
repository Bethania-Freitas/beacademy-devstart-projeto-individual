<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    use HasFactory;

    protected $fillable = [
        'Data',
        'Local',
        'Formato',
        'Cidade',
        'Cachê'
    ];

    public function getUsers(string $search = null)
    {
        $shows = $this->where( function ($query) use ($search)  {
            if($search){
                $query->where('local', 'LIKE', "%{$search}%");
                $query->orWhere('cidade', 'LIKE', "%{$search}%");
                $query->orWhere('formato', 'LIKE', "%{$search}%");
            }
        })
        ->paginate(7);

        return $shows;
    }
}


