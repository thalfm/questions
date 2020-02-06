<?php

namespace App\Modules\Programa\Database\Seeds;

use App\Modules\Programa\Models\Subject;
use Illuminate\Database\Seeder;

class SubjectTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->getSubjects() as $arSubject) {
            $subjectsChild = array_pop($arSubject);
            /** @var Subject $subjectPrincipal */
            $subjectPrincipal = Subject::firstOrCreate($arSubject);

            foreach ($subjectsChild as $subjectChild) {
                $lastChilds = [];
                if (is_array(end($subjectChild))) {
                    $lastChilds = array_pop($subjectChild);
                }
                $child = Subject::firstOrCreate($subjectChild);
                try {
                    $subjectPrincipal->childs()->attach($child);
                }catch (\Exception $e) {

                }


                if (!$lastChilds) {
                    continue;
                }

                foreach ($lastChilds as $lastChild) {
                    $grandchild = Subject::firstOrCreate($lastChild);
                    try {
                        $child->childs()->attach($grandchild);
                    }catch (\Exception $e) {

                    }
                }
            }
        }
    }

    private function getSubjects()
    {
        return [
            [
                'name' => 'Português',
                'childs' => [
                    ['name' => 'Morfologia'],
                    ['name' => 'Morfologia - Verbos'],
                    ['name' => 'Morfologia - Pronomes'],
                ]
            ],
            [
                'name' => 'Raciocínio Lógico - RLM',
                'childs' => [
                    ['name' => 'Proposições Simples e Compostas'],
                    ['name' => 'Análise Combinatória'],
                    ['name' => 'Probabilidade'],
                ]
            ],
            [
                'name' => 'Noções de Informática',
                'childs' => [
                    [
                        'name' => 'Sistema Operacional',
                        'grandchild' => [
                            ['name' => 'Windows'],
                            ['name' => 'Linux']
                        ]
                    ],
                    ['name' => 'Pacote de Aplicativos'],
                    ['name' => 'Softwares'],
                ],
            ],
            [
                'name' => 'Segurança da Informação',
                'childs' => [
                    ['name' => 'Assinatura Digital'],
                    ['name' => 'Ataques e ameaças'],
                    ['name' => 'Backup'],
                ],
            ],
        ];
    }
}
