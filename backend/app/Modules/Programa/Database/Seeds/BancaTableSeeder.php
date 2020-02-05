<?php

namespace App\Modules\Programa\Database\Seeds;

use App\Modules\Programa\Models\ExaminingBoard;
use Illuminate\Database\Seeder;


class BancaTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->getBancas() as $banca) {
            ExaminingBoard::firstOrCreate($banca);
        }
    }

    private function getBancas()
    {
        return [
            ['no_banca' => 'CESPE'],
            ['no_banca' => 'IADES'],
            ['no_banca' => 'ESAF'],
        ];
    }
}
