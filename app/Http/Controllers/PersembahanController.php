<?php

namespace App\Http\Controllers;

use App\Models\Persembahan;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorePersembahanRequest;
use App\Http\Requests\UpdatePersembahanRequest;

class PersembahanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('persembahan', ['persembahans' => Persembahan::get()])->with([

            "pagetitle" => "Persembahan", 
            "maintitle" => "Macam Persembahan"

            // Add more data as needed
        ]);
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
    public function store(StorePersembahanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Persembahan $persembahan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Persembahan $persembahan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePersembahanRequest $request, Persembahan $persembahan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Persembahan $persembahan)
    {
        //
    }
}