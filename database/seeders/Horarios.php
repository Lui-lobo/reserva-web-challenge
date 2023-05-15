<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Horarios extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('horarios')->insert([
        [
            'horarios_disponiveis' => '18:00',
            'status_id' => 1
        ],
        [
            'horarios_disponiveis' => '18:45',
            'status_id' => 1
        ],  
        [
            'horarios_disponiveis' => '19:30',
            'status_id' => 1
        ],
        [
            'horarios_disponiveis' => '20:15',
            'status_id' => 1
        ], 
        [
            'horarios_disponiveis' => '21:00',
            'status_id' => 1
        ],  
        [
            'horarios_disponiveis' => '21:45',
            'status_id' => 1
        ],  
        [
            'horarios_disponiveis' => '22:15',
            'status_id' => 1
        ],  
        [
            'horarios_disponiveis' => '23:00',
            'status_id' => 1
        ],  
        ]);
    }
}
