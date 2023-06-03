<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dashboard\Member;
use Illuminate\Support\Facades\Storage;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.pages.member.index', [
            'member' => Member::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.pages.member.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'role' => 'required',
            'date_birth' => 'required',
            'place_birth' => 'required',
            'image' => 'image|file|mimes:jpg,jpeg,png,svg,gif|max:1024'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('/img/member');
        }
        // dd($validatedData);

        Member::create($validatedData);

        return redirect('/dashboard/member')->with('success', 'New member has been added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
        return view('dashboard.pages.member.edit', [
            'member' => $member,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Member $member)
    {
        $rules = [
            'role' => 'required',
            'date_birth' => 'required',
            'place_birth' => 'required',
            'image' => 'image|file|max:1024'
        ];

        if ($request->name != $member->name) {
            $rules['name'] = 'required';
        }

        $validatedData = $request->validate($rules);

        // image

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }

            $validatedData['image'] = $request->file('image')->store('img/member');
        }

        Member::where('id', $request->id)->update($validatedData);
        return redirect('dashboard/member')->with('succes', 'Update member has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {
        if ($member->image) {
            Storage::delete($member->image);
        }

        Member::destroy($member->id);
        return redirect('dashboard/member')->with('success', 'Member has been deleted');
    }
}
