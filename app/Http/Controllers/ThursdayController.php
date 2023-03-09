<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Thursday;

class ThursdayController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Thursday::get();
        // dd($data);
        return view('thursday.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // dd('hello create');
        return view('thursday.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Thursday;
 
        $data->name = $request->name;
        $data->age = $request->age;
 
        $data->save();

        return redirect()->route('thursday.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}
