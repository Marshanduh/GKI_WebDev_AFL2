<?php

namespace App\Http\Controllers;

use App\Models\Kebaktian;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreKebaktianRequest;
use App\Http\Requests\UpdateKebaktianRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KebaktianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kebaktian', ['kebaktians' => Kebaktian::get()])->with([
            "pagetitle" => "Kebaktian"
            //"maintitle" => "Daftar Kebaktian GKI Mojokerto",
            // Add more data as needed
        ]);

        // $data_kebaktian = Kebaktian::all(); 
        // return view('kebaktian', compact('data_kebaktian'));
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
    public function store(StoreKebaktianRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Kebaktian $kebaktian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kebaktian $kebaktian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKebaktianRequest $request, Kebaktian $kebaktian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kebaktian $kebaktian)
    {
        //
    }
}
