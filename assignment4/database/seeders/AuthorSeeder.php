<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Book;

class AuthorSeeder extends Seeder
{
    public function run()
    {
        $author1 = Author::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
        ]);

        Book::create([
            'title' => 'Laravel 1',
            'description' => 'Introduction to Laravel',
            'author_id' => $author1->id,
        ]);

        Book::create([
            'title' => 'Laravel 2',
            'description' => 'Laravel basics',
            'author_id' => $author1->id,
        ]);

        $author2 = Author::create([
            'name' => 'John Doee',
            'email' => 'john@examplee.com',
        ]);

        Book::create([
            'title' => 'Laravel 3',
            'description' => 'Introduction to Laravel',
            'author_id' => $author2->id,
        ]);

        Book::create([
            'title' => 'Laravel 4',
            'description' => 'Laravel basics',
            'author_id' => $author2->id,
        ]);

        $author3 = Author::create([
            'name' => 'John Doeee',
            'email' => 'john@exampleee.com',
        ]);

        Book::create([
            'title' => 'Laravel 5',
            'description' => 'Introduction to Laravel',
            'author_id' => $author3->id,
        ]);

        Book::create([
            'title' => 'Laravel 6',
            'description' => 'Laravel basics',
            'author_id' => $author3->id,
        ]);
    }
}
