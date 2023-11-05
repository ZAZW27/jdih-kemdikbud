<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Http\Requests\StoreBeritaRequest;
use App\Http\Requests\UpdateBeritaRequest;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita = new berita();
        $beritas = $berita->LatestBerita();

        return view('pages.informasi.informasi', [
            'title' => 'Berita | JDIH BPK',
            'beritas' => $beritas,
        ]);
    }

    public function GetBeritaDetail($id) {
        // Assuming you want to fetch a specific Berita by its ID
        $detail_berita = Berita::where('id', $id)->first();
    
        // You can also add more conditions as needed
        // For example, if you want to fetch a specific Berita with a specific category
        // $detail_berita = Berita::where('id', $id)->where('category', 'your_category')->first();
    
        if (!$detail_berita) {
            // Handle the case where the Berita with the specified ID is not found
            // You can return a 404 page or some other response.
        }
    
        // Continue with your logic to display the Berita details
        return view('pages.informasi.detail_berita', [
            'title' => 'Berita Detail | JDIH BPK',
            'berita' => $detail_berita,
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
