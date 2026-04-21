<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Author;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthorControllerTest extends TestCase
{
    use RefreshDatabase;

    public function test_author_can_be_created()
    {
        $response = $this->post(route('authors.store'), [
            'name' => 'Jane',
            'surname' => 'Smith',
            'birthdate' => '1985-05-10'
        ]);

        $this->assertDatabaseHas('authors', [
            'name' => 'Jane',
            'surname' => 'Smith',
        ]);

        $author = Author::first();

        $response->assertRedirect(route('authors.show', $author));
        $response->assertStatus(302);
    }
}
