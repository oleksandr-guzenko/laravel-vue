<?php

use Illuminate\Database\Seeder;
use bfinlay\SpreadsheetSeeder\SpreadsheetSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $this->call([
            //SpreadsheetSeeder::class,
            BackEndTableSeeder::class,
            //PropertiesTableSeeder::class,
            //AnalyticTypesTableSeeder::class,
            //PropertyTypesTableSeeder::class,
        ]);
    }
}
