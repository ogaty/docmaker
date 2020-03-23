<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('documents')->insert([
            'user_id' => 1,
            'document_name' => 'sample document',
            'document_title' => 'sample document',
            'document_version' => '1.0',
        ]);
    }
}
