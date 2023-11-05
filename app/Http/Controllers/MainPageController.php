<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\pengumuman;
use App\Http\Requests\StoreBeritaRequest;
use App\Http\Requests\UpdateBeritaRequest;

class MainPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita = new berita(); // getting the berita
        $latestBerita = $berita->LatestBerita();

        $pengumuman = new pengumuman(); // getting the pngumuman
        $LatestPengumuman = $pengumuman->LatestPengumuman();

        return view('index', [
            'title' => 'Berita | JDIH BPK',
            'berita' => $latestBerita,
            'pengumuman' => $LatestPengumuman,
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
    public function store(StoreBeritaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Berita $berita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBeritaRequest $request, Berita $berita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berita $berita)
    {
        //
    }
}
