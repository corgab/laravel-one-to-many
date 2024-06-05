<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {

        DB::table('projects')->truncate();

        for ($i = 0; $i < 50; $i++) {

            $new_project = new Project();
    
            $new_project->title = $faker->unique()->word();
            $new_project->description = $faker->text(75);
            $new_project->start_date = $faker->date();
            $new_project->end_date = $faker->date();
            $new_project->project_url = $faker->unique()->url();
            $new_project->technologies_used = $faker->name();

            $new_project->save();

        }
    }
}
