<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        DB::table('users')->truncate();

        for ($i = 0; $i < 50; $i++) {
            
            $new_user = new User();
    
            $new_user->name = $faker->userName();
            $new_user->email = $faker->safeEmail();
            $new_user->password = $faker->password();

            $new_user->save();

        }
    }
}
