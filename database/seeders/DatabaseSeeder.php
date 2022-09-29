<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RolesAndPermissionsSeeder::class,
            PersonTypeSeeder::class,
            UserSeeder::class,
            PropertySeeder::class,
            ContractSeeder::class,
        ]);
    }
}
