<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory(6)->sequence(
            ["name" => "Web Design"],
            ["name" => "HTML"],
            ["name" => "Freebies"],
            ["name" => "JavaScript"],
            ["name" => "CSS"],
            ["name" => "Tutorials"]
        )->create();
    }
}
