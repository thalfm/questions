<?php

namespace App\Modules\Programa\Database\Seeds;

use App\Modules\Programa\Models\Subject;
use App\Modules\Programa\Models\ExaminingBoard;
use App\Modules\Programa\Models\Agency;
use App\Modules\Programa\Models\Question;
use App\Modules\Projeto\Models\Etapa;
use Illuminate\Database\Seeder;


class QuestionTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->getQuestions() as $questao) {
            Question::firstOrCreate([
                'name' => $questao['name'],
                'agency_id' => Agency::firstOrCreate(['initials' => $questao['initials']])->id,
                'examining_board_id' => ExaminingBoard::firstOrCreate(['name' => $questao['examining_boards']])->id,
                'subject_id' => Subject::firstOrCreate(['name' => $questao['subject']])->id,
            ]);
        }
    }

    private function getQuestions()
    {
        return [
            [
                'name' => 'A inserção de uma vírgula imediatamente após a palavra “Assim” (l.2) alteraria os sentidos do texto.',
                'initials' => 'PF',
                'examining_boards' => 'CESPE',
                'subject' => 'Morfologia',

            ],
            [
                'name' => 'A substituição do termo “do futuro”, em “modelos do futuro” (l. 5 e 6), pelo adjetivo futuristas manteria os sentidos originais do texto.',
                'initials' => 'PF',
                'examining_boards' => 'CESPE',
                'subject' => 'Morfologia',
            ],
            [
                'name' => 'A expressão “Dir-se-á” (l.40) poderia ser corretamente substituída por Será dito.',
                'initials' => 'PF',
                'examining_boards' => 'CESPE',
                'subject' => 'Morfologia - Verbos',

            ],
            [
                'name' => 'As palavras “indivíduos”, “vulneráveis”, “incidência” e “neurônios”, contidas no texto, apresentam acento gráfico com base na mesma regra.',
                'initials' => 'PF',
                'examining_boards' => 'CESPE',
                'subject' => 'Morfologia - Verbos',
            ],
            [
                'name' => 'No trecho “ao procurar alguma coisa que se ache escondida” (l. 30 e 31), o pronome “que” exerce a função de complemento da forma verbal “ache”.',
                'initials' => 'PF',
                'examining_boards' => 'CESPE',
                'subject' => 'Morfologia - Pronomes',

            ],
            [
                'name' => 'As expressões “dessa busca sem fim” (l.15) e “dessa aventura” (l. 18 e 19) retomam, por coesão, o mesmo referente: “compreender o novo” (l.15).',
                'initials' => 'PF',
                'examining_boards' => 'CESPE',
                'subject' => 'Morfologia - Pronomes',
            ],


            [
                'name' => 'A inserção de uma vírgula imediatamente após a palavra “Assim” (l.2) alteraria os sentidos do texto.',
                'initials' => 'PF',
                'examining_boards' => 'IADES',
                'subject' => 'Morfologia',

            ],
            [
                'name' => 'A substituição do termo “do futuro”, em “modelos do futuro” (l. 5 e 6), pelo adjetivo futuristas manteria os sentidos originais do texto.',
                'initials' => 'PF',
                'examining_boards' => 'IADES',
                'subject' => 'Morfologia',
            ],
            [
                'name' => 'A expressão “Dir-se-á” (l.40) poderia ser corretamente substituída por Será dito.',
                'initials' => 'PF',
                'examining_boards' => 'IADES',
                'subject' => 'Morfologia - Verbos',

            ],
            [
                'name' => 'As palavras “indivíduos”, “vulneráveis”, “incidência” e “neurônios”, contidas no texto, apresentam acento gráfico com base na mesma regra.',
                'initials' => 'PF',
                'examining_boards' => 'IADES',
                'subject' => 'Morfologia - Verbos',
            ],
            [
                'name' => 'No trecho “ao procurar alguma coisa que se ache escondida” (l. 30 e 31), o pronome “que” exerce a função de complemento da forma verbal “ache”.',
                'initials' => 'PF',
                'examining_boards' => 'IADES',
                'subject' => 'Morfologia - Pronomes',

            ],
            [
                'name' => 'As expressões “dessa busca sem fim” (l.15) e “dessa aventura” (l. 18 e 19) retomam, por coesão, o mesmo referente: “compreender o novo” (l.15).',
                'initials' => 'PF',
                'examining_boards' => 'IADES',
                'subject' => 'Morfologia - Pronomes',
            ],


            [
                'name' => 'A inserção de uma vírgula imediatamente após a palavra “Assim” (l.2) alteraria os sentidos do texto.',
                'initials' => 'PF',
                'examining_boards' => 'ESAF',
                'subject' => 'Morfologia',

            ],
            [
                'name' => 'A substituição do termo “do futuro”, em “modelos do futuro” (l. 5 e 6), pelo adjetivo futuristas manteria os sentidos originais do texto.',
                'initials' => 'PF',
                'examining_boards' => 'ESAF',
                'subject' => 'Morfologia',
            ],
            [
                'name' => 'A expressão “Dir-se-á” (l.40) poderia ser corretamente substituída por Será dito.',
                'initials' => 'PF',
                'examining_boards' => 'ESAF',
                'subject' => 'Morfologia - Verbos',

            ],
            [
                'name' => 'As palavras “indivíduos”, “vulneráveis”, “incidência” e “neurônios”, contidas no texto, apresentam acento gráfico com base na mesma regra.',
                'initials' => 'PF',
                'examining_boards' => 'ESAF',
                'subject' => 'Morfologia - Verbos',
            ],
            [
                'name' => 'No trecho “ao procurar alguma coisa que se ache escondida” (l. 30 e 31), o pronome “que” exerce a função de complemento da forma verbal “ache”.',
                'initials' => 'PF',
                'examining_boards' => 'ESAF',
                'subject' => 'Morfologia - Pronomes',

            ],
            [
                'name' => 'As expressões “dessa busca sem fim” (l.15) e “dessa aventura” (l. 18 e 19) retomam, por coesão, o mesmo referente: “compreender o novo” (l.15).',
                'initials' => 'PF',
                'examining_boards' => 'ESAF',
                'subject' => 'Morfologia - Pronomes',
            ],



            [
                'name' => 'A inserção de uma vírgula imediatamente após a palavra “Assim” (l.2) alteraria os sentidos do texto.',
                'initials' => 'PC-DF',
                'examining_boards' => 'CESPE',
                'subject' => 'Morfologia',

            ],
            [
                'name' => 'A substituição do termo “do futuro”, em “modelos do futuro” (l. 5 e 6), pelo adjetivo futuristas manteria os sentidos originais do texto.',
                'initials' => 'PC-DF',
                'examining_boards' => 'CESPE',
                'subject' => 'Morfologia',
            ],
            [
                'name' => 'A expressão “Dir-se-á” (l.40) poderia ser corretamente substituída por Será dito.',
                'initials' => 'PC-DF',
                'examining_boards' => 'CESPE',
                'subject' => 'Morfologia - Verbos',

            ],
            [
                'name' => 'As palavras “indivíduos”, “vulneráveis”, “incidência” e “neurônios”, contidas no texto, apresentam acento gráfico com base na mesma regra.',
                'initials' => 'PC-DF',
                'examining_boards' => 'CESPE',
                'subject' => 'Morfologia - Verbos',
            ],
            [
                'name' => 'No trecho “ao procurar alguma coisa que se ache escondida” (l. 30 e 31), o pronome “que” exerce a função de complemento da forma verbal “ache”.',
                'initials' => 'PC-DF',
                'examining_boards' => 'CESPE',
                'subject' => 'Morfologia - Pronomes',

            ],
            [
                'name' => 'As expressões “dessa busca sem fim” (l.15) e “dessa aventura” (l. 18 e 19) retomam, por coesão, o mesmo referente: “compreender o novo” (l.15).',
                'initials' => 'PC-DF',
                'examining_boards' => 'CESPE',
                'subject' => 'Morfologia - Pronomes',
            ],


            [
                'name' => 'A inserção de uma vírgula imediatamente após a palavra “Assim” (l.2) alteraria os sentidos do texto.',
                'initials' => 'PC-DF',
                'examining_boards' => 'IADES',
                'subject' => 'Morfologia',

            ],
            [
                'name' => 'A substituição do termo “do futuro”, em “modelos do futuro” (l. 5 e 6), pelo adjetivo futuristas manteria os sentidos originais do texto.',
                'initials' => 'PC-DF',
                'examining_boards' => 'IADES',
                'subject' => 'Morfologia',
            ],
            [
                'name' => 'A expressão “Dir-se-á” (l.40) poderia ser corretamente substituída por Será dito.',
                'initials' => 'PC-DF',
                'examining_boards' => 'IADES',
                'subject' => 'Morfologia - Verbos',

            ],
            [
                'name' => 'As palavras “indivíduos”, “vulneráveis”, “incidência” e “neurônios”, contidas no texto, apresentam acento gráfico com base na mesma regra.',
                'initials' => 'PC-DF',
                'examining_boards' => 'IADES',
                'subject' => 'Morfologia - Verbos',
            ],
            [
                'name' => 'No trecho “ao procurar alguma coisa que se ache escondida” (l. 30 e 31), o pronome “que” exerce a função de complemento da forma verbal “ache”.',
                'initials' => 'PC-DF',
                'examining_boards' => 'IADES',
                'subject' => 'Morfologia - Pronomes',

            ],
            [
                'name' => 'As expressões “dessa busca sem fim” (l.15) e “dessa aventura” (l. 18 e 19) retomam, por coesão, o mesmo referente: “compreender o novo” (l.15).',
                'initials' => 'PC-DF',
                'examining_boards' => 'IADES',
                'subject' => 'Morfologia - Pronomes',
            ],


            [
                'name' => 'A inserção de uma vírgula imediatamente após a palavra “Assim” (l.2) alteraria os sentidos do texto.',
                'initials' => 'PC-DF',
                'examining_boards' => 'ESAF',
                'subject' => 'Morfologia',

            ],
            [
                'name' => 'A substituição do termo “do futuro”, em “modelos do futuro” (l. 5 e 6), pelo adjetivo futuristas manteria os sentidos originais do texto.',
                'initials' => 'PC-DF',
                'examining_boards' => 'ESAF',
                'subject' => 'Morfologia',
            ],
            [
                'name' => 'A expressão “Dir-se-á” (l.40) poderia ser corretamente substituída por Será dito.',
                'initials' => 'PC-DF',
                'examining_boards' => 'ESAF',
                'subject' => 'Morfologia - Verbos',

            ],
            [
                'name' => 'As palavras “indivíduos”, “vulneráveis”, “incidência” e “neurônios”, contidas no texto, apresentam acento gráfico com base na mesma regra.',
                'initials' => 'PC-DF',
                'examining_boards' => 'ESAF',
                'subject' => 'Morfologia - Verbos',
            ],
            [
                'name' => 'No trecho “ao procurar alguma coisa que se ache escondida” (l. 30 e 31), o pronome “que” exerce a função de complemento da forma verbal “ache”.',
                'initials' => 'PC-DF',
                'examining_boards' => 'ESAF',
                'subject' => 'Morfologia - Pronomes',

            ],
            [
                'name' => 'As expressões “dessa busca sem fim” (l.15) e “dessa aventura” (l. 18 e 19) retomam, por coesão, o mesmo referente: “compreender o novo” (l.15).',
                'initials' => 'PC-DF',
                'examining_boards' => 'ESAF',
                'subject' => 'Morfologia - Pronomes',
            ],



            [
                'name' => 'A inserção de uma vírgula imediatamente após a palavra “Assim” (l.2) alteraria os sentidos do texto.',
                'initials' => 'TCU',
                'examining_boards' => 'CESPE',
                'subject' => 'Morfologia',

            ],
            [
                'name' => 'A substituição do termo “do futuro”, em “modelos do futuro” (l. 5 e 6), pelo adjetivo futuristas manteria os sentidos originais do texto.',
                'initials' => 'TCU',
                'examining_boards' => 'CESPE',
                'subject' => 'Morfologia',
            ],
            [
                'name' => 'A expressão “Dir-se-á” (l.40) poderia ser corretamente substituída por Será dito.',
                'initials' => 'TCU',
                'examining_boards' => 'CESPE',
                'subject' => 'Morfologia - Verbos',

            ],
            [
                'name' => 'As palavras “indivíduos”, “vulneráveis”, “incidência” e “neurônios”, contidas no texto, apresentam acento gráfico com base na mesma regra.',
                'initials' => 'TCU',
                'examining_boards' => 'CESPE',
                'subject' => 'Morfologia - Verbos',
            ],
            [
                'name' => 'No trecho “ao procurar alguma coisa que se ache escondida” (l. 30 e 31), o pronome “que” exerce a função de complemento da forma verbal “ache”.',
                'initials' => 'TCU',
                'examining_boards' => 'CESPE',
                'subject' => 'Morfologia - Pronomes',

            ],
            [
                'name' => 'As expressões “dessa busca sem fim” (l.15) e “dessa aventura” (l. 18 e 19) retomam, por coesão, o mesmo referente: “compreender o novo” (l.15).',
                'initials' => 'TCU',
                'examining_boards' => 'CESPE',
                'subject' => 'Morfologia - Pronomes',
            ],


            [
                'name' => 'A inserção de uma vírgula imediatamente após a palavra “Assim” (l.2) alteraria os sentidos do texto.',
                'initials' => 'TCU',
                'examining_boards' => 'IADES',
                'subject' => 'Morfologia',

            ],
            [
                'name' => 'A substituição do termo “do futuro”, em “modelos do futuro” (l. 5 e 6), pelo adjetivo futuristas manteria os sentidos originais do texto.',
                'initials' => 'TCU',
                'examining_boards' => 'IADES',
                'subject' => 'Morfologia',
            ],
            [
                'name' => 'A expressão “Dir-se-á” (l.40) poderia ser corretamente substituída por Será dito.',
                'initials' => 'TCU',
                'examining_boards' => 'IADES',
                'subject' => 'Morfologia - Verbos',

            ],
            [
                'name' => 'As palavras “indivíduos”, “vulneráveis”, “incidência” e “neurônios”, contidas no texto, apresentam acento gráfico com base na mesma regra.',
                'initials' => 'TCU',
                'examining_boards' => 'IADES',
                'subject' => 'Morfologia - Verbos',
            ],
            [
                'name' => 'No trecho “ao procurar alguma coisa que se ache escondida” (l. 30 e 31), o pronome “que” exerce a função de complemento da forma verbal “ache”.',
                'initials' => 'TCU',
                'examining_boards' => 'IADES',
                'subject' => 'Morfologia - Pronomes',

            ],
            [
                'name' => 'As expressões “dessa busca sem fim” (l.15) e “dessa aventura” (l. 18 e 19) retomam, por coesão, o mesmo referente: “compreender o novo” (l.15).',
                'initials' => 'TCU',
                'examining_boards' => 'IADES',
                'subject' => 'Morfologia - Pronomes',
            ],


            [
                'name' => 'A inserção de uma vírgula imediatamente após a palavra “Assim” (l.2) alteraria os sentidos do texto.',
                'initials' => 'TCU',
                'examining_boards' => 'ESAF',
                'subject' => 'Morfologia',

            ],
            [
                'name' => 'A substituição do termo “do futuro”, em “modelos do futuro” (l. 5 e 6), pelo adjetivo futuristas manteria os sentidos originais do texto.',
                'initials' => 'TCU',
                'examining_boards' => 'ESAF',
                'subject' => 'Morfologia',
            ],
            [
                'name' => 'A expressão “Dir-se-á” (l.40) poderia ser corretamente substituída por Será dito.',
                'initials' => 'TCU',
                'examining_boards' => 'ESAF',
                'subject' => 'Morfologia - Verbos',

            ],
            [
                'name' => 'As palavras “indivíduos”, “vulneráveis”, “incidência” e “neurônios”, contidas no texto, apresentam acento gráfico com base na mesma regra.',
                'initials' => 'TCU',
                'examining_boards' => 'ESAF',
                'subject' => 'Morfologia - Verbos',
            ],
            [
                'name' => 'No trecho “ao procurar alguma coisa que se ache escondida” (l. 30 e 31), o pronome “que” exerce a função de complemento da forma verbal “ache”.',
                'initials' => 'TCU',
                'examining_boards' => 'ESAF',
                'subject' => 'Morfologia - Pronomes',

            ],
            [
                'name' => 'As expressões “dessa busca sem fim” (l.15) e “dessa aventura” (l. 18 e 19) retomam, por coesão, o mesmo referente: “compreender o novo” (l.15).',
                'initials' => 'TCU',
                'examining_boards' => 'ESAF',
                'subject' => 'Morfologia - Pronomes',
            ],




            [
                'name' => 'A inserção de uma vírgula imediatamente após a palavra “Assim” (l.2) alteraria os sentidos do texto.',
                'initials' => 'SF',
                'examining_boards' => 'CESPE',
                'subject' => 'Morfologia',

            ],
            [
                'name' => 'A substituição do termo “do futuro”, em “modelos do futuro” (l. 5 e 6), pelo adjetivo futuristas manteria os sentidos originais do texto.',
                'initials' => 'SF',
                'examining_boards' => 'CESPE',
                'subject' => 'Morfologia',
            ],
            [
                'name' => 'A expressão “Dir-se-á” (l.40) poderia ser corretamente substituída por Será dito.',
                'initials' => 'SF',
                'examining_boards' => 'CESPE',
                'subject' => 'Morfologia - Verbos',

            ],
            [
                'name' => 'As palavras “indivíduos”, “vulneráveis”, “incidência” e “neurônios”, contidas no texto, apresentam acento gráfico com base na mesma regra.',
                'initials' => 'SF',
                'examining_boards' => 'CESPE',
                'subject' => 'Morfologia - Verbos',
            ],
            [
                'name' => 'No trecho “ao procurar alguma coisa que se ache escondida” (l. 30 e 31), o pronome “que” exerce a função de complemento da forma verbal “ache”.',
                'initials' => 'SF',
                'examining_boards' => 'CESPE',
                'subject' => 'Morfologia - Pronomes',

            ],
            [
                'name' => 'As expressões “dessa busca sem fim” (l.15) e “dessa aventura” (l. 18 e 19) retomam, por coesão, o mesmo referente: “compreender o novo” (l.15).',
                'initials' => 'SF',
                'examining_boards' => 'CESPE',
                'subject' => 'Morfologia - Pronomes',
            ],


            [
                'name' => 'A inserção de uma vírgula imediatamente após a palavra “Assim” (l.2) alteraria os sentidos do texto.',
                'initials' => 'SF',
                'examining_boards' => 'IADES',
                'subject' => 'Morfologia',

            ],
            [
                'name' => 'A substituição do termo “do futuro”, em “modelos do futuro” (l. 5 e 6), pelo adjetivo futuristas manteria os sentidos originais do texto.',
                'initials' => 'SF',
                'examining_boards' => 'IADES',
                'subject' => 'Morfologia',
            ],
            [
                'name' => 'A expressão “Dir-se-á” (l.40) poderia ser corretamente substituída por Será dito.',
                'initials' => 'SF',
                'examining_boards' => 'IADES',
                'subject' => 'Morfologia - Verbos',

            ],
            [
                'name' => 'As palavras “indivíduos”, “vulneráveis”, “incidência” e “neurônios”, contidas no texto, apresentam acento gráfico com base na mesma regra.',
                'initials' => 'SF',
                'examining_boards' => 'IADES',
                'subject' => 'Morfologia - Verbos',
            ],
            [
                'name' => 'No trecho “ao procurar alguma coisa que se ache escondida” (l. 30 e 31), o pronome “que” exerce a função de complemento da forma verbal “ache”.',
                'initials' => 'SF',
                'examining_boards' => 'IADES',
                'subject' => 'Morfologia - Pronomes',

            ],
            [
                'name' => 'As expressões “dessa busca sem fim” (l.15) e “dessa aventura” (l. 18 e 19) retomam, por coesão, o mesmo referente: “compreender o novo” (l.15).',
                'initials' => 'SF',
                'examining_boards' => 'IADES',
                'subject' => 'Morfologia - Pronomes',
            ],


            [
                'name' => 'A inserção de uma vírgula imediatamente após a palavra “Assim” (l.2) alteraria os sentidos do texto.',
                'initials' => 'SF',
                'examining_boards' => 'ESAF',
                'subject' => 'Morfologia',

            ],
            [
                'name' => 'A substituição do termo “do futuro”, em “modelos do futuro” (l. 5 e 6), pelo adjetivo futuristas manteria os sentidos originais do texto.',
                'initials' => 'SF',
                'examining_boards' => 'ESAF',
                'subject' => 'Morfologia',
            ],
            [
                'name' => 'A expressão “Dir-se-á” (l.40) poderia ser corretamente substituída por Será dito.',
                'initials' => 'SF',
                'examining_boards' => 'ESAF',
                'subject' => 'Morfologia - Verbos',

            ],
            [
                'name' => 'As palavras “indivíduos”, “vulneráveis”, “incidência” e “neurônios”, contidas no texto, apresentam acento gráfico com base na mesma regra.',
                'initials' => 'SF',
                'examining_boards' => 'ESAF',
                'subject' => 'Morfologia - Verbos',
            ],
            [
                'name' => 'No trecho “ao procurar alguma coisa que se ache escondida” (l. 30 e 31), o pronome “que” exerce a função de complemento da forma verbal “ache”.',
                'initials' => 'SF',
                'examining_boards' => 'ESAF',
                'subject' => 'Morfologia - Pronomes',

            ],
            [
                'name' => 'As expressões “dessa busca sem fim” (l.15) e “dessa aventura” (l. 18 e 19) retomam, por coesão, o mesmo referente: “compreender o novo” (l.15).',
                'initials' => 'SF',
                'examining_boards' => 'ESAF',
                'subject' => 'Morfologia - Pronomes',
            ],
        ];
    }
}
