<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use bfinlay\SpreadsheetSeeder\SpreadsheetSeeder;

class BackEndTableSeeder extends SpreadsheetSeeder
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
        $this->file = '/database/seeds/BackEndTest_TestData_v1.1.xlsx';

        // specify the table this is loaded into
        $this->worksheetTableMapping = ['Properties' => 'properties', 'AnalyticTypes' => 'analytic_types', 'PropertyAnalytics' => 'property_analytics'];
        $this->defaults = ['created_by' => 'seed', 'updated_by' => 'seed'];
        $this->header = true;

        parent::run();

        $this->updatePropertiesTableGUIDColumn();
    }

    /**
     * Update GUID column of Properties Table after seeding
     *
     * @return void
     */
    private function updatePropertiesTableGUIDColumn()
    {
        $table = 'properties';
        if (DB::connection()->getSchemaBuilder()->hasColumn($table, 'guid')) {
            $ids = DB::table($table)->pluck('id');

            foreach($ids as $id) {
                $guid = Str::uuid()->toString();
                DB::table($table)
                    ->where('id', $id)
                    ->update(['guid' => $guid]);
            }

        }
    }
}
