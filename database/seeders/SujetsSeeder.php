<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SujetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sujets')->insert([
            [
                "sujets" => "Besoin de conseils."
            ],
            [
                "sujets" => "Demande d'informations supplémentaires."
            ],
            [
                "sujets" => "Devis."
            ]
        ]);
    }
}
