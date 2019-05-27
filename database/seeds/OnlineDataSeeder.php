<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OnlineDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::unprepared(file_get_contents(storage_path('/db/siteData.sql')));
        $this->command->info('Site Data seeded!');
    }
}
