<?php


namespace App\Modules\Programa\Database\Seeds;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramaDatabaseSeeder extends Seeder
{
    public function run()
    {
        try{
            DB::beginTransaction();
            $this->call(ExaminingBoardTableSeeder::class);
            $this->call(AgencyTableSeeder::class);
            $this->call(SubjectTableSeeder::class);
            $this->call(QuestionTableSeeder::class);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            throw $exception;
        }


    }
}
