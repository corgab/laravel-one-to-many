<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $types = ['html','css','javascript','vue','laravel'];

        // DB::table('types')->truncate();

        foreach ($types as $type) {

            $new_type = new Type();
            $new_type->title = $type;
    
            $new_type->save();

        }
        
        
    }
}
