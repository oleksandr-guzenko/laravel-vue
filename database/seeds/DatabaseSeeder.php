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

        // use this Seeder Class but need to change the Header Column Names of the Spreadsheet to corresponse to the Table Column Names
        // the Header Column Names must be the same as the Table Column Name, case-sensitive is a must in order for this to work properly
        $this->call(BackEndTableSeeder::class);

        /*
        $this->call([
            SpreadsheetSeeder::class,
            PropertiesTableSeeder::class,
            AnalyticTypesTableSeeder::class,
            PropertyTypesTableSeeder::class,
        ]);
        */
    }
}
