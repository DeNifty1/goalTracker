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
        ///////////////////////////////////
        // Insert Users
        ///////////////////////////////////
        DB::table('users')->insert([  //id will be 1
            'name' => 'Chris',
            'email' => 'chris@bugert.com',
            'password' => '$2y$10$WZhDmb4icm6oVIpaPEJQ8uvcINh1SQqLfqe.0xYWBVnhmp6ca8SWq',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
            ]);
        DB::table('users')->insert([  //id will be 1
            'name' => 'DeNifty',
            'email' => 'denifty@gmail.com',
            'password' => '$2y$10$vhrBZXa6VNdQ8R9x9XMw3.vy903LJwTY9H9ZTEthNqRWIb66VAiee',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        ///////////////////////////////////
        // Insert Types
        ///////////////////////////////////
        DB::table('types')->insert([  //id will be 1
            'typeName' => 'Lose Weight',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);

        ///////////////////////////////////
        // Insert Goals
        ///////////////////////////////////
        DB::table('goals')->insert([
            'goalName' => 'Lose 20 pounds',
            'created_at' => date("Y-m-d H:i:s"),
            'user_id' => 1,
            'type_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('goals')->insert([
            'goalName' => 'Climb 100 floors',
            'created_at' => date("Y-m-d H:i:s"),
            'user_id' => 2,
            'type_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('goals')->insert([
            'goalName' => 'Crossfit Fran workout in 20 minutes',
            'created_at' => date("Y-m-d H:i:s"),
            'user_id' => 1,
            'type_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
        DB::table('goals')->insert([
            'goalName' => 'Learn Laravel framework',
            'created_at' => date("Y-m-d H:i:s"),
            'user_id' => 2,
            'type_id' => 1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")
        ]);
    }
}
