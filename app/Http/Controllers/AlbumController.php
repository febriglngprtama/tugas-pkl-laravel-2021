<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dashboard\Album;
use Illuminate\Support\Facades\Storage;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.pages.album.index', [
            'album' => Album::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.pages.album.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'realease_date' => 'required',
            'image' => 'image|file|max:1024'
        ]);


        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('img/album');
        };

        dd($validatedData);

        Album::create($validatedData);

        return redirect('dashboard/album')->with('success', 'new Album has been added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Album $album)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Album $album)
    {
        return view('dashboard.pages.album.edit', [
            'album' => $album
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Album $album)
    {
        $rules = [
            'realese_date' => 'required',
            'image' => 'image|file|max:1024'
        ];

        if ($request->name != $album->name) {
            $rules['name'] = 'required';
        };

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }

            $rules['image'] = $request->file('image')->store('img/album');
        };

        $validatedData = $request->validate($request);

        dd($validatedData);

        Album::where('id', $album->id)->update($validatedData);

        return redirect('/dashboard/album')->with('success', 'Album has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Album $album)
    {
        if ($album->image) {
            Storage::delete($album->image);
        }

        Album::destroy($album->id);
        return redirect('dashboard/album')->with('success', 'Member has been deleted');
    }
}
