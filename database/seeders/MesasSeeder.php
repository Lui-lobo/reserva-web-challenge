<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MesasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mesas')->insert([
            [
                'mesa' => 'mesa-1',
                'quantidade_pessoas' => '4',
                'preco_hora' => '90',
                'status_id' => 3
            ],
            [
                'mesa' => 'mesa-2',
                'quantidade_pessoas' => '4',
                'preco_hora' => '90',
                'status_id' => 3
            ],
            [
                'mesa' => 'mesa-3',
                'quantidade_pessoas' => '4',
                'preco_hora' => '90',
                'status_id' => 3
            ],
            [
                'mesa' => 'mesa-4',
                'quantidade_pessoas' => '6',
                'preco_hora' => '120',
                'status_id' => 3
            ],
            [
                'mesa' => 'mesa-5',
                'quantidade_pessoas' => '3',
                'preco_hora' => '60',
                'status_id' => 3
            ],
            [
                'mesa' => 'mesa-6',
                'quantidade_pessoas' => '4',
                'preco_hora' => '90',
                'status_id' => 3
            ],
            [
                'mesa' => 'mesa-7',
                'quantidade_pessoas' => '3',
                'preco_hora' => '60',
                'status_id' => 3
            ],
            [
                'mesa' => 'mesa-8',
                'quantidade_pessoas' => '5',
                'preco_hora' => '100',
                'status_id' => 3
            ],
            [
                'mesa' => 'mesa-9',
                'quantidade_pessoas' => '8',
                'preco_hora' => '180',
                'status_id' => 3
            ],
            [
                'mesa' => 'mesa-10',
                'quantidade_pessoas' => '3',
                'preco_hora' => '60',
                'status_id' => 3
            ],
            [
                'mesa' => 'mesa-11',
                'quantidade_pessoas' => '4',
                'preco_hora' => '90',
                'status_id' => 3
            ],
            [
                'mesa' => 'mesa-12',
                'quantidade_pessoas' => '4',
                'preco_hora' => '90',
                'status_id' => 3
            ], [
                'mesa' => 'mesa-13',
                'quantidade_pessoas' => '6',
                'preco_hora' => '120',
                'status_id' => 3
            ],
            [
                'mesa' => 'mesa-14',
                'quantidade_pessoas' => '3',
                'preco_hora' => '60',
                'status_id' => 3
            ],
            [
                'mesa' => 'mesa-15',
                'quantidade_pessoas' => '4',
                'preco_hora' => '90',
                'status_id' => 3
            ],
        ]);
    }
}
