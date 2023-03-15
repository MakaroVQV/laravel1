<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produtos')->insert([
            'nome'       => 'Detergente',
            'quantidade' => 10,
            'valor'      =>5.67
        ]);
        DB::table('produtos')->insert([
            'nome'       => 'Sabão',
            'quantidade' => 20,
            'valor'      =>9.17
        ]);
        DB::table('produtos')->insert([
            'nome'       => 'Amaciante',
            'quantidade' => 30,
            'valor'      =>15.42
        ]);
    }
}