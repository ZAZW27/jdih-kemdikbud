<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\BeritaTerkait;
use App\Models\Galeri;

use App\Http\Requests\StoreBeritaRequest;
use App\Http\Requests\UpdateBeritaRequest;

use Illuminate\Support\Facades\DB;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita = new berita(); // getting the berita
        $latestBerita = $berita->LatestBerita();

        return view('pages.informasi.informasi', [
            'title' => 'Berita | JDIH BPK',
            'berita' => $latestBerita,
        ]);
    }

    public function GetBeritaDetail($id) {
        // Assuming you want to fetch a specific Berita by its ID
        $detail_berita = Berita::where('id', $id)->first();
    
        if (!$detail_berita) {
            // Handle the case where the Berita with the specified ID is not found
            // You can return a 404 page or some other response.
        }
        else {
            $getRelated = BeritaTerkait::find($id);
                
            // Get related berita_terkait records with the same group_id
            if ($getRelated) {
                // Get related berita
                $berita_terkait = BeritaTerkait::where('id_berita', $id)->pluck('group_id');
                $get_berita_terkait = DB::table('tbl_berita')
                ->select('tbl_berita.id', 'tbl_berita.gambar_berita', 'tbl_berita.judul', 'tbl_berita.tanggal', 'tbl_berita.tema')
                ->join('tbl_berita_terkait', 'tbl_berita_terkait.id_berita', '=', 'tbl_berita.id')
                ->whereIn('group_id', $berita_terkait)
                ->where('tbl_berita.id', '!=', $id)
                ->get();
            } else {
                // Handle the case where there are no related beritaTerkait
                $get_berita_terkait = null; // Or any other value you prefer
            }

            return view('pages.informasi.detail_berita', [
                'title' => 'Berita Detail | JDIH BPK',
                'berita' => $detail_berita,
                'berita_terkait' => $get_berita_terkait, // Pass the related records to the view
            ]);
        }
    }

    public function showGaleri(){
        $galeri = new Galeri();

        $latestGaleri = $galeri->latestGaleri();

        return view('pages.informasi.galeri', [
            'title' => 'JDIH | Galeri', 
            'galeri' => $latestGaleri, 
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
