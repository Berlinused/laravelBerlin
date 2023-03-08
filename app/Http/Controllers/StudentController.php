<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('student.index');
        // $data = [
        //     'name' => 'Berlin', 
        //     'category' => 'cat'
        // ];
        // return view('student.index', ['data' => $data]);
        $data = [
            ['name' => 'Berlin', 
            'price' => '999'],
            ['name' => 'Amer', 
            'price' => '888'],
            ['name' => 'SSR', 
            'price' => '777'],
        ];
        return view('student.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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

    public function excel(){
        return view('student.excel');
    }

    public function childPage(){
        return view('child');
    }

    public function appPage(){
        return view('/layouts/app');
    }
}
