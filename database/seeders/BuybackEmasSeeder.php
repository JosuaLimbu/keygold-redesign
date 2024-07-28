<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Buybackemas;

class BuybackEmasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Buybackemas::create([
            'karat' => 'K24 (99,9%)',
            'price' => 1185000,
        ]);

        Buybackemas::create([
            'karat' => 'K24 (99%)',
            'price' => 1175000,
        ]);

        Buybackemas::create([
            'karat' => 'K23',
            'price' => 1025000,
        ]);

        Buybackemas::create([
            'karat' => 'K22',
            'price' => 985000,
        ]);

        Buybackemas::create([
            'karat' => 'K21',
            'price' => 940000,
        ]);

        Buybackemas::create([
            'karat' => 'K20',
            'price' => 895000,
        ]);

        Buybackemas::create([
            'karat' => 'K19',
            'price' => 855000,
        ]);

        Buybackemas::create([
            'karat' => 'K18',
            'price' => 815000,
        ]);

        Buybackemas::create([
            'karat' => 'K17',
            'price' => 770000,
        ]);

        Buybackemas::create([
            'karat' => 'K16',
            'price' => 720000,
        ]);

        Buybackemas::create([
            'karat' => 'K15',
            'price' => 680000,
        ]);

        Buybackemas::create([
            'karat' => 'K8',
            'price' => 365000,
        ]);

        Buybackemas::create([
            'karat' => 'K6',
            'price' => 277000,
        ]);
    }
}
