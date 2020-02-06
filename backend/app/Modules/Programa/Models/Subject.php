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

    public function questoions($arrParam = [])
    {
        $questoions = $this->hasMany(
            Question::class
        );
        if ($arrParam) {
            $questoions->where($arrParam);
        }
        return $questoions;
    }

    public function questionsCount($arrParam = [])
    {
        $questoesCount = $this->questoions($arrParam)->count();
        $childs = $this->childs()->get();
        if ($childs->isNotEmpty()) {
            foreach ($childs as $child) {
                $questoesCount += $child->questionsCount($arrParam);
            }
        }
        return $questoesCount;
    }

    public static function scopeRoot($query)
    {
        return $query->doesntHave('principal');
    }
}
