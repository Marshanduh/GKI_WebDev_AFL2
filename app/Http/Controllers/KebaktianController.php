<?php

namespace App\Http\Controllers;

use App\Models\Kebaktian;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreKebaktianRequest;
use App\Http\Requests\UpdateKebaktianRequest;

class KebaktianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kebaktian', ['kebaktians' => Kebaktian::get()])->with([

            "pagetitle" => "Kebaktian", 

        ]);    
    }
    public function homepage()
    {
        return view('homepage', ['kebaktians' => Kebaktian::get()])->with([
            "pagetitle" => "Kebaktian"
            
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
    public function store(StoreKebaktianRequest $request)
    {
        $request->validate([
            'nama_ibadah' => 'required',
            'hari_pelaksanaan' => 'required',
            'waktu_ibadah' => 'nullable',
            'lokasi_kebaktian' => 'required',
            'foto_kebaktian' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

            // Buat objek Kebaktian baru
            $kebaktian = new Kebaktian([
                'nama_ibadah' => $request->input('nama_ibadah'),
                'hari_pelaksanaan' => $request->input('hari_pelaksanaan'),
                'waktu_ibadah' => $request->input('waktu_ibadah'),
                'lokasi_kebaktian' => $request->input('lokasi_kebaktian'),
            ]);

            if ($request->hasFile('foto_kebaktian')) {
                $file = $request->file('foto_kebaktian');
                $path = $file->storeAs('public/kebaktian', $file->getClientOriginalName());

                // Simpan nama file ke dalam database
                $kebaktian->foto_kebaktian = $file->getClientOriginalName();
            }

            // Simpan objek Kebaktian ke dalam database
            $kebaktian->save();

            // Redirect atau berikan respons sesuai kebutuhan
            return redirect()->route('kebaktian.index')->with('success', 'Data Kebaktian berhasil disimpan.');
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
