<?php

namespace App\Modules\Programa\Database\Seeds;

use App\Modules\Programa\Models\ExaminingBoard;
use Illuminate\Database\Seeder;


class ExaminingBoardTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->getExaminingBoard() as $banca) {
            ExaminingBoard::firstOrCreate($banca);
        }
    }

    private function getExaminingBoard()
    {
        return [
            ['name' => 'CESPE'],
            ['name' => 'IADES'],
            ['name' => 'ESAF'],
        ];
    }
}
