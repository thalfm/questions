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
            'id',
            'id',
            'subject_id_principal'
        );
    }

    public function childs()
    {
        return $this->belongsToMany(
            Subject::class,
            'related_subjects',
            'subject_id_principal',
            'subject_id_child'
        );
    }

    public function questoions()
    {
        return $this->hasMany(
            Question::class
        );
    }

    public function questionsByFilter(array $filter)
    {
        return $this->questoions()->where($filter);
    }

    public function questionsCount(array $filter = [])
    {
        $questoesCount = $this->questionsByFilter($filter)->count();
        $childs = $this->childs()->get();
        return $questoesCount += $this->getQuantityOfChild($childs, $filter);
    }

    protected function getQuantityOfChild($childs, $filter)
    {
        $questoesCount = 0;
        if (!$childs->isNotEmpty()) {
           return $questoesCount;
        }

        $questoesCount = 0;
        foreach ($childs as $child) {
            $questoesCount += $child->questionsCount($filter);
        }

        return $questoesCount;
    }

    public static function scopeRoot($query)
    {
        return $query->doesntHave('principal');
    }
}
