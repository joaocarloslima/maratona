<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'name' => Str::random(10),
            'start_date' => '2020-01-01',
            'end_date' => '2020-01-02',
        ]);
    }
}
