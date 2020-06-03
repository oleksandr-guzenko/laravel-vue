<?php

use Illuminate\Database\Seeder;
use bfinlay\SpreadsheetSeeder\SpreadsheetSeeder;

class PropertiesTableSeeder extends SpreadsheetSeeder
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
        $this->file = '/database/seeds/Properties.xlsx';

        // specify the table this is loaded into
        //$this->tablename = 'properties';
        //$this->worksheetTableMapping = ['Properties' => 'properties'];
        $this->mapping = ['id','suburb','state','country'];
        $this->aliases = ['Property_Id' => 'id','Suburb' => 'suburb', 'State' => 'state', 'Counrty' => 'country'];
        $this->header = true;

        parent::run();
    }
}
