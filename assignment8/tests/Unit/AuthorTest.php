<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Author;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthorTest extends TestCase
{
    use RefreshDatabase;

    public function test_full_name_returns_correct_value()
    {
        $author = Author::create([
            'name' => 'John',
            'surname' => 'Doe',
            'birthdate' => '1990-01-01'
        ]);

        $this->assertEquals('John Doe', $author->fullName());
    }
}
