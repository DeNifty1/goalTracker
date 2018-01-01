<?php

use Illuminate\Database\Seeder;

class GoalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('goals')->insert([
            'goalName' => 'Lose 20 pounds'
        ]);
        DB::table('goals')->insert([
            'goalName' => 'Climb 100 floors'
        ]);
        DB::table('goals')->insert([
            'goalName' => 'Crossfit Fran workout in 20 minutes'
        ]);
        DB::table('goals')->insert([
            'goalName' => 'Learn Laravel framework'
            
        ]);
    }
}
