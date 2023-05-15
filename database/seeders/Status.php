<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Status extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('status')->insert([[
            'tipo_status' => 'Ativo',
        ], [
            'tipo_status' => 'inativo',
        ],
        [
            'tipo_status' => 'disponivel',
        ],
        [
            'tipo_status' => 'disponivel_em_outro_horario',
        ],
        [
            'tipo_status' => 'indisponivel',
        ],
        ]
    );
    }
}
