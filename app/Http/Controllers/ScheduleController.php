<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dashboard\Schedule;


class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.pages.schedule.index', [
            'schedule' => Schedule::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.pages.schedule.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'name' =>  'required|max:255',
                // 'slug' => 'unique:schedule',
                'date_start' => 'required',
                'date_end' => 'required',
                'place' => 'required',
            ]
        );

        // $validatedData['slug'] = Str::snake($request->name, '-');

        // dd($validatedData);

        Schedule::create($validatedData);
        return redirect('/dashboard/schedule')->with('success', 'New Product has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Schedule $schedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Schedule $schedule)
    {
        return view('dashboard.pages.schedule.edit', [
            'schedule' => $schedule
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Schedule $schedule)
    {
        $rules = [
            'date_start' => 'required',
            'date_end' => 'required',
            'place' => 'required'
        ];


        if ($request->name != $schedule->name) {
            $rules['name'] = 'required|unique:schedules';
        }

        $validatedData = $request->validate($rules);

        // dd($validatedData);

        Schedule::where('id', $schedule->id)->update($validatedData);

        return redirect('/dashboard/schedule')->with('success', 'Schedule has been update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Schedule $schedule)
    {
        Schedule::destroy($schedule->id);
        return redirect('/dashboard/schedule')->with('success', 'Schedule has been delete');
    }
}
