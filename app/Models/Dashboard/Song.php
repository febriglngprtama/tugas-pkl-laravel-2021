<?php

namespace App\Models\Dashboard;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    protected $fillable = [
        'album_id',
        'name',
        'duration',
    ];

    /*
    *
    * function album
    *
    * return $this->belongTo for album because one song have one album
    *
    */

    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}
