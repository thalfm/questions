<?php


namespace App\Modules\Programa\Models;


use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    public $timestamps = false;

    public $hidden = [
        'pivot'
    ];

    protected $fillable = [
        'name',
    ];

    public function principal()
    {
        return $this->hasOneThrough(
            Subject::class,
            RelatedSubject::class,
            'subject_id_child',
            'subject_id',
            'subject_id',
            'subject_id_principal'
        );
    }

    public function childs()
    {
        return $this->belongsToMany(
            Subject::class,
            'related_subject',
            'subject_id_principal',
            'subject_id_child'
        );
    }

    public function questoions($arrParam = [])
    {
        $questoions = $this->hasMany(
            Question::class,
            'subject_id',
            'subject_id'
        );
        if ($arrParam) {
            $questoions->where($arrParam);
        }
        return $questoions;
    }

    public function questoesCount($arrParam = [])
    {
        $questoesCount = $this->questoes($arrParam)->count();
        $childs = $this->childs()->get();
        if ($childs->isNotEmpty()) {
            foreach ($childs as $child) {
                $questoesCount += $child->quantidadeQuestoes($arrParam);
            }
        }
        return $questoesCount;
    }

    public static function scopeRoot($query)
    {
        return $query->doesntHave('principal');
    }
}
