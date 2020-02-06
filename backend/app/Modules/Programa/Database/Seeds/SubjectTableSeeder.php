<?php

namespace App\Modules\Programa\Database\Seeds;

use App\Modules\Programa\Models\Subject;
use Illuminate\Database\Seeder;
use App\Modules\Conta\Model\Funcionalidade as FuncionalidadeModel;

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
                $child = Subject::firstOrCreate($subjectChild);
                $subjectPrincipal->childs()->attach($child);
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
                    ['name' => 'Sistema Operacional'],
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
