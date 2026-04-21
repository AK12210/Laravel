<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
            'birthdate' => 'required|date',
        ]);

        $author = Author::create($validated);

        return redirect()->route('authors.show', $author);
    }
}
