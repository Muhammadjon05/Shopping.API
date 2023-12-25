<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Attribute;
use App\Models\Product;
use App\Models\Value;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this-> call([
            CategorySeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            AttributeSeeder::class,
            ProductSeeder::class,
            ValueSeeder::class
        ]);


    }
}
