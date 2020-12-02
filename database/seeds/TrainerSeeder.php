<?php

use App\Trainer;
use Illuminate\Database\Seeder;

class TrainerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trainer::create([
            'name' => 'mahmoud',
            'spec' => 'web development',
            'img' => '1.png',
        ]);
        Trainer::create([
            'name' => 'ahmed',
            'spec' => 'web development',
            'img' => '2.png',
        ]);
        Trainer::create([
            'name' => 'mohamed',
            'spec' => 'programming',
            'img' => '3.png',
        ]);
        Trainer::create([
            'name' => 'ibrahim',
            'spec' => 'medical',
            'img' => '4.png',
        ]);
        Trainer::create([
            'name' => 'mostafa mohamed',
            'spec' => 'doctor',
            'img' => '5.png',
        ]);
    }
}
