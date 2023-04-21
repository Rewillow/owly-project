<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Course;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        \App\Models\User::factory(2)->create();

         Course::create(
            [
                'title' => 'Explorers',
                'subject' => ['Science', 'History', 'Geography'],
                'spots' => 20,
            ]); 
        
        Course::create(
            [
                'title' => 'Eco-Heroes',
                'subject' => ['Science', 'Mathematics', 'Art'],
                'spots' => 15,
            ]);

        Course::create(
            [
                'title' => 'Creators-Lab',
                'subject' => ['Art', 'Science'],
                'spots' => 12,
            ]); 

        Course::create(
            [
                'title' => 'Mathmagicians',
                'subject' => ['Mathematics'],
                'spots' => 10,
            ]); 

        Course::create(
            [
                'title' => 'Code Wizards',
                'subject' => ['Informatica', 'Art', 'Mathematics'],
                'spots' => 25,
            ]); 
         Course::create(
            [
                'title' => 'Time Travel',
                'subject' => ['History', 'Geography', 'Art'],
                'spots' => 12,
            ]);     
    }
}
