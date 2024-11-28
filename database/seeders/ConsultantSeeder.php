<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ConsultantSeeder extends Seeder
{
    public function run(): void
    {
        \Database\Factories\ConsultantFactory::new()->count(20)->create();
    }
}
