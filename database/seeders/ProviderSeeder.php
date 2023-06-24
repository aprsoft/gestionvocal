<?php

namespace Database\Seeders;

use App\Models\Provider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;



class ProviderSeeder extends Seeder
{
  
    public function run(): void
    {
        Provider::factory(50)->create();
    }
}
