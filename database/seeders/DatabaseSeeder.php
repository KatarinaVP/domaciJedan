<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\SkolaSeeder;
use Database\Seeders\UciteljicaSeeder;
use Database\Seeders\UcenicaSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $sk = new SkolaSeeder();
        $sk->run();
        $uc = new UciteljicaSeeder();
        $uc->run();
        $uu = new UcenicaSeeder();
        $uu->run();

    }
}
