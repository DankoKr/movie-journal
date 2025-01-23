<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\Movie;
use Illuminate\Support\Facades\Auth;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function index(Request $request)
    {
        $query = Movie::query();

        if ($request->filled('username')) {
            $query->whereHas('user', function ($q) use ($request) {
                $q->where('username', $request->input('username'));
            });
        } else {
            // Default: Show only the logged-in user's movies
            $query->where('user_id', Auth::user()->id);
        }

        if ($request->filled('title')) {
            $query->where('title', 'LIKE', '%' . $request->input('title') . '%');
        }

        $movies = $query->latest()->simplePaginate(6)->appends($request->all());

        return view('movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $validated = request()->validate([
            'title' => ['required', 'string', 'min:3'],
            'tags' => ['required', 'string'],
            'image_data' => ['required', 'file', 'mimes:jpeg,png,jpg', 'max:2048'],
            'trailer_url' => ['required', 'url'],
        ]);


        $tags = json_encode(array_map('trim', explode(',', $validated['tags'])));
        // Get the binary content of the uploaded file
        $imageBinary = file_get_contents(request()->file('image_data')->getRealPath());
    
        Movie::create([
            'title' => $validated['title'],
            'tags' => $tags,
            'image_data' => $imageBinary,
            'trailer_url' => $validated['trailer_url'],
            'user_id' => Auth::user()->id,
        ]);


        return redirect('/movies');
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        return view('movies.show', ['movie' => $movie]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Movie $movie)
    {
        return view('movies.edit', ['movie' => $movie]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Movie $movie)
    {
        Gate::authorize('edit-movie', $movie);
        
        request()->validate([
            'title' => ['required', 'string', 'min:3'],
            'trailer_url' => ['required', 'url'],
        ]);


        $movie->update([
            'title' => request('title'),
            'trailer_url' => request('trailer_url'),
        ]);

        return redirect('/movie/' . $movie->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Movie $movie)
    {
        Gate::authorize('edit-movie', $movie);

        $movie->delete();

        return redirect('/movies');
    }
}
