<?php

use Illuminate\Database\Seeder;
use bfinlay\SpreadsheetSeeder\SpreadsheetSeeder;

class AnalyticTypesTableSeeder extends SpreadsheetSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // By default, the seeder will process all XLSX files in /database/seeds/*.xlsx (relative to Laravel project base path)

        // Example setting

        // specify relative to Laravel project base path
        // feature directories specified
        $this->file = '/database/seeds/Analytic_Types.xlsx';

        // specify the table this is loaded into
        //$this->tablename = 'analytic_types';
        //$this->worksheetTableMapping = ['Analytic_Types' => 'analytic_types'];
        $this->mapping = ['id','name','units','is_numeric','num_decimal_places'];
        $this->aliases = ['id' => 'id', 'name' => 'name', 'units' => 'units', 'is_numeric' => 'is_numeric','num_decimal_places' => 'num_decimal_places'];
        //$this->header = true;

        parent::run();
    }
}
