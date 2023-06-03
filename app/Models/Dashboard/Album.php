<?php

namespace App\Models\Dashboard;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'realese_date',
        'image',
    ];


    /*
    *
    * function this song()
    *
    * $this->hasMany(Song::class) for song because one album have many song
    *
    */

    public function song()
    {
        return $this->hasMany(Song::class);
    }
}
