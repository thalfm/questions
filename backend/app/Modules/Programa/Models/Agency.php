<?php


namespace App\Modules\Programa\Models;


use Illuminate\Database\Eloquent\Model;

class Agency extends Model
{

    public $timestamps = false;

    protected $fillable = [
        'name',
        'initials',
    ];
}
