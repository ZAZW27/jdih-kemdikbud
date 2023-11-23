<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\BeritaTerkait;
use App\Models\Galeri;
use App\Models\Peraturan;

use App\Http\Requests\StoreBeritaRequest;
use App\Http\Requests\UpdateBeritaRequest;

use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $berita = Berita::orderBy('created_at', 'desc')->paginate(4);
        $galeri = Galeri::orderBy('created_at', 'desc')->paginate(4);
        $peraturan = Peraturan::LatestPeraturan(4);

        return view('pages.admin.index', [
            'title' => 'JDIH BPP | Admin',
            'active' => 'adminDash', 
            'berita' => $berita,
            'galeri' => $galeri,
        ]);
    }

    // public function showGaleri(){
    //     $galeri = new Galeri();

    //     $latestGaleri = $galeri->latestGaleri();

    //     return view('pages.informasi.galeri', [
    //         'title' => 'JDIH | Galeri', 
    //         'galeri' => $latestGaleri, 
    //     ]);
    // }
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
