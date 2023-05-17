<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiasDaSemana extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dias_da_semana')->insert([
            [
                'dias_da_semana' => 'segunda-feira',
                'status_id' => 1
            ],
            [
                'dias_da_semana' => 'terca-feira',
                'status_id' => 1
            ],  
            [
                'dias_da_semana' => 'quarta-feira',
                'status_id' => 1
            ],
            [
                'dias_da_semana' => 'quinta-feira',
                'status_id' => 1
            ], 
            [
                'dias_da_semana' => 'sexta-feira',
                'status_id' => 1
            ],  
            [
                'dias_da_semana' => 'sabado',
                'status_id' => 1
            ],  
            [
                'dias_da_semana' => 'domingo',
                'status_id' => 1
            ],  
            ]);
    }
}
