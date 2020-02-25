<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
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
        $faker = Faker::create();
        for($i = 0;$i<10;$i++){
            DB::table('students')->insert([
                'firstname' =>$faker->firstName(),
                'lastname' =>$faker->lastName(),
                'age' =>$faker->numberBetween(15,20),
            ]);
        }
        
    }
}
