<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password')
        ]);


        $cs50 = Course::create([
            'name' => 'CS50: Introduction to Computer Science',
        ]);

        Lesson::create([
            'course_id' => $cs50->id,
            'title' => 'Welcome to CS50',
            'body' => 'Overview of the course, tools, and how to think like a computer scientist.',
        ]);

        Lesson::create([
            'course_id' => $cs50->id,
            'title' => 'Binary and Data Representation',
            'body' => 'Understanding bits, bytes, and how computers store information.',
        ]);

        Lesson::create([
            'course_id' => $cs50->id,
            'title' => 'Algorithms and Problem Solving',
            'body' => 'Introduction to algorithms, efficiency, and logical thinking.',
        ]);

        Lesson::create([
            'course_id' => $cs50->id,
            'title' => 'Introduction to C Programming',
            'body' => 'Writing your first programs in C and understanding syntax.',
        ]);

        // ------------------------------------------------

        $webDev = Course::create([
            'name' => 'Web Development Fundamentals',
        ]);

        Lesson::create([
            'course_id' => $webDev->id,
            'title' => 'How the Web Works',
            'body' => 'Understanding browsers, servers, HTTP, and the internet.',
        ]);

        Lesson::create([
            'course_id' => $webDev->id,
            'title' => 'HTML Basics',
            'body' => 'Structure web pages using semantic HTML.',
        ]);

        Lesson::create([
            'course_id' => $webDev->id,
            'title' => 'CSS Basics',
            'body' => 'Styling web pages with layouts, colors, and typography.',
        ]);

        Lesson::create([
            'course_id' => $webDev->id,
            'title' => 'JavaScript Introduction',
            'body' => 'Making web pages interactive using JavaScript.',
        ]);

        // ------------------------------------------------

        $laravel = Course::create([
            'name' => 'Laravel for Beginners',
        ]);

        Lesson::create([
            'course_id' => $laravel->id,
            'title' => 'What is Laravel?',
            'body' => 'Overview of Laravel and why it is popular.',
        ]);

        Lesson::create([
            'course_id' => $laravel->id,
            'title' => 'Routing and Controllers',
            'body' => 'Handling HTTP requests using routes and controllers.',
        ]);

        Lesson::create([
            'course_id' => $laravel->id,
            'title' => 'Blade Templates',
            'body' => 'Creating dynamic views using Blade.',
        ]);

        Lesson::create([
            'course_id' => $laravel->id,
            'title' => 'Database and Eloquent',
            'body' => 'Working with databases using Eloquent ORM.',
        ]);
    }
}
