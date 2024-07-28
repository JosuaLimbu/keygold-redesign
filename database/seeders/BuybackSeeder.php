<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Buyback;

class BuybackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Buyback::create([
            'product_name' => 'Antam Certieye RM ( 23-24)',
            'price' => 1310000,
        ]);

        Buyback::create([
            'product_name' => 'Antam Certieye RM (20-22)',
            'price' => 1310000,
        ]);

        Buyback::create([
            'product_name' => 'Antam Certieye Abu',
            'price' => 1290000,
        ]);

        Buyback::create([
            'product_name' => 'Antam Albino / Certibol',
            'price' => 1280000,
        ]);

        Buyback::create([
            'product_name' => 'Antam Press Hijau',
            'price' => 1270000,
        ]);

        Buyback::create([
            'product_name' => 'Antam Retro Berdiri',
            'price' => 1245000,
        ]);

        Buyback::create([
            'product_name' => 'Antam Retro Tidur',
            'price' => 1240000,
        ]);

        Buyback::create([
            'product_name' => 'UBS/ Lotus Archi/ King Halim',
            'price' => 1230000,
        ]);

        Buyback::create([
            'product_name' => 'Emas Kita/ Hartadinata',
            'price' => 1230000,
        ]);

        Buyback::create([
            'product_name' => 'EOA/ Mini Gold/ Big Gold',
            'price' => 1230000,
        ]);

        Buyback::create([
            'product_name' => 'Merek Lainya',
            'price' => 1225000,
        ]);

        Buyback::create([
            'product_name' => 'Sertifikat Rusak/ Hilang',
            'price' => 1220000,
        ]);

        Buyback::create([
            'product_name' => 'Dinar 22K',
            'price' => 1010000,
        ]);
    }
}
