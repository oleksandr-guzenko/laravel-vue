<?php

use Illuminate\Database\Seeder;
use bfinlay\SpreadsheetSeeder\SpreadsheetSeeder;

class PropertyTypesTableSeeder extends SpreadsheetSeeder
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
        $this->file = '/database/seeds/Property_Analytics.xlsx';

        // specify the table this is loaded into
        //$this->tablename = 'property_types';
        //$this->worksheetTableMapping = ['Property_Types' => 'property_types'];
        $this->mapping = ['property_id','analytic_type_id','value'];
        $this->aliases = ['property_id' => 'property_id','analytic_type_id' => 'analytic_type_id','value' => 'value'];
        $this->header = true;

        parent::run();
    }
}
