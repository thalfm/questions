<?php

namespace App\Modules\Programa\Database\Seeds;

use App\Modules\Programa\Models\Agency;
use App\Modules\Projeto\Models\Etapa;
use Illuminate\Database\Seeder;


class AgencyTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->getAgencies() as $orgao) {
            Agency::firstOrCreate($orgao);
        }
    }

    private function getAgencies()
    {
        return [
            [
                'name' => 'Polícia Federal',
                'initials' => 'PF'
            ],
            [
                'name' => 'Polícia Civil do Distrito Federal',
                'initials' => 'PC-DF'
            ],
            [
                'name' => 'Tribunal de Contas da União',
                'initials' => 'TCU'
            ],
            [
                'name' => 'Senado Federal',
                'initials' => 'SF'
            ],
        ];
    }
}
