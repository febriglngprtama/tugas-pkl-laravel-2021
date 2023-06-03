<?php

namespace App\Http\Controllers;

use App\Models\Dashboard\Album;
use App\Models\Dashboard\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.pages.song.index', [
            'song' => Song::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.pages.song.create', [
            'album' => Album::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'duration' => 'required',
            'album_id' => 'required'
        ]);

        dd($validatedData);

        Song::create($validatedData);
        return redirect('/dashboard/song')->with('success', 'New song has been added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Song $song)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Song $song, Album $album)
    {
        return view('dashboard.pages.song.edit', [
            'song' => $song,
            'album' => $album
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Song $song)
    {
        $rules = [
            'duration' => 'required',
            'album_id' => 'required'
        ];

        if ($request->name != $song->name) {
            $rules['name'] = 'required|max:255|unique:songs';
        };

        $validatedData = $request->validate($rules);

        dd($validatedData);

        Song::where('id', $song->id)->update($validatedData);
        return redirect('/dashboard/song')->with('success', 'Song has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Song $song)
    {
        Song::destroy($song->id);
        return redirect('/dashboard/song')->with('success', 'Song has been deleted');
    }
}
