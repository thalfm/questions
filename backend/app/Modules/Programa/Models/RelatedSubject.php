<?php


namespace App\Modules\Programa\Models;


use Illuminate\Database\Eloquent\Model;

class RelatedSubject extends Model
{

    public $timestamps = false;

    public function assuntoPai()
    {
        return $this->hasOne(
            Subject::class,
            'id_assunto',
            'id_assunto_pai'
        );
    }

    public function assuntoFilho()
    {
        return $this->hasOne(
            Subject::class,
            'id_assunto',
            'id_assunto_filho'
        );
    }

}
