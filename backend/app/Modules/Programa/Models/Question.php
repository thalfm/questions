<?php


namespace App\Modules\Programa\Models;


use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

    public $timestamps = false;

    protected $fillable = [
        'name',
        'agency_id',
        'examining_board_id',
        'subject_id'
    ];


    public function agency()
    {
        return $this->hasOne(
            Agency::class
        );
    }

    public function examiningBoard()
    {
        return $this->hasOne(
            ExaminingBoard::class
        );
    }

    public function subject()
    {
        return $this->hasOne(
            Subject::class
        );
    }
}
