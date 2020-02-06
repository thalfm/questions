<?php


namespace App\Modules\Programa\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SubjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id_assunto' => $this->id,
            'no_assunto' => $this->name,
            'pai' => $this->principal,
            'filhos' => SubjectResource::collection($this->childs),
            'quantidade_questoes' => $this->questionsCount(
                $request->all()
            ),
        ];
    }
}