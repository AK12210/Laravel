<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Book;
use App\Models\Author;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BookTest extends TestCase
{
    use RefreshDatabase;

    public function test_short_title_is_stored_and_retrieved()
    {
        $author = Author::create([
            'name' => 'John',
            'surname' => 'Doe',
            'birthdate' => '1990-01-01'
        ]);

        $book = Book::create([
            'title' => 'Laravel book',
            'short_title' => 'Laravel',
            'year' => 2026,
            'author_id' => $author->id
        ]);

        $this->assertEquals('Laravel', $book->short_title);
    }
}
