<?php

namespace App\Http\Controllers;

use App\Models\pengumuman;
use App\Http\Requests\StorepengumumanRequest;
use App\Http\Requests\UpdatepengumumanRequest;

class PengumumanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $pengumuman = pengumuman::all();

        // return view('index', [
        //     'title' => 'KEMDIKBUD | Main Page', 
        //     'pengumuman' => $pengumuman, 
        // ]);
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
    public function store(StorepengumumanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(pengumuman $pengumuman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pengumuman $pengumuman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepengumumanRequest $request, pengumuman $pengumuman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pengumuman $pengumuman)
    {
        //
    }
}
