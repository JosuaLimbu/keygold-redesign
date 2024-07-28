<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hargaemas;

class HargaemasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hargaemas::create([
            'gramasi' => 'Antam CertiEye 0,5 gr',
            'redmark_price' => 749500,
        ]);

        Hargaemas::create([
            'gramasi' => 'Antam CertiEye 1 gr',
            'redmark_price' => 1399000,
        ]);

        Hargaemas::create([
            'gramasi' => 'Antam CertiEye 2 gr',
            'redmark_price' => 2748000,
        ]);

        Hargaemas::create([
            'gramasi' => 'Antam CertiEye 3 gr',
            'redmark_price' => 4104000,
        ]);

        Hargaemas::create([
            'gramasi' => 'Antam CertiEye 5 gr',
            'redmark_price' => 6811000,
        ]);

        Hargaemas::create([
            'gramasi' => 'Antam CertiEye 10 gr',
            'redmark_price' => 13532000,
        ]);

        Hargaemas::create([
            'gramasi' => 'Antam CertiEye 25 gr',
            'redmark_price' => 33680000,
        ]);

        Hargaemas::create([
            'gramasi' => 'Antam CertiEye 50 gr',
            'redmark_price' => 67209000,
        ]);

        Hargaemas::create([
            'gramasi' => 'Antam CertiEye 100 gr',
            'redmark_price' => 134239000,
        ]);
    }
}
