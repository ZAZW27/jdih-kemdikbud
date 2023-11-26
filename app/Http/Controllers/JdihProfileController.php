<?php

namespace App\Http\Controllers;

use App\Models\TTPJDIH;
use App\Models\BeritaTerkait;
use App\Http\Requests\StoreBeritaRequest;
use App\Http\Requests\UpdateBeritaRequest;

use Illuminate\Support\Facades\DB;

class JdihProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data_ttpJdih = TTPJDIH::all();

        return view('pages.profil.lainnya.pengelola-jdih', [
            'title' => 'TTP JDIH | JDIH BPK',
            'ttp' => $data_ttpJdih,
        ]);
    }

    public function GetBeritaDetail($id) {
        // Assuming you want to fetch a specific Berita by its ID
        $detail_berita = Berita::where('id', $id)->first();
    
        if (!$detail_berita) {
            // Handle the case where the Berita with the specified ID is not found
            // You can return a 404 page or some other response.
        }
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

        
        // Continue with your logic to display the Berita details and related berita_terkait
        return view('pages.informasi.detail_berita', [
            'title' => 'JDIH BPP | Profiles',
            'berita' => $detail_berita,
            'berita_terkait' => $get_berita_terkait, // Pass the related records to the view
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
