<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Pengumuman;
use App\Models\Peraturan;
use App\Http\Requests\StoreBeritaRequest;
use App\Http\Requests\UpdateBeritaRequest;
use Illuminate\Http\Request;

class MainPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita = new berita(); // getting the berita
        $latestBerita = $berita->LatestBerita();

        $pengumuman = new Pengumuman(); // getting the pngumuman
        $LatestPengumuman = $pengumuman->LatestPengumuman();

        $peraturan = new Peraturan();// getting peraturan
        $LatestPeraturan = $peraturan->LatestPeraturan();
        $countPeraturan = $peraturan->getPeraturanCounts();

        // GROUPING EACH ONE OF THE TABLES (why not)
        $groupNmrPer = $peraturan->LatestPeraturan()->groupBy('id_nomor')->pluck('0.nomor_peraturan', '0.id_nomor');
        $groupThnPer = $peraturan->LatestPeraturan()->groupBy('id_tahun')->pluck('0.tahun_peraturan', '0.id_tahun');
        $groupJnsPer = $peraturan->LatestPeraturan()->groupBy('id_jenis')->pluck('0.jenis_peraturan', '0.id_jenis');
        $groupSbjkPer = $peraturan->LatestPeraturan()->groupBy('id_subjek')->pluck('0.subjek', '0.id_subjek');
        $groupStatPer = $peraturan->LatestPeraturan()->groupBy('id_status')->pluck('0.status_peraturan', '0.id_status');

        return view('index', [
            'title' => 'Main Page',
            'berita' => $latestBerita,
            'pengumuman' => $LatestPengumuman,
            'peraturan' => $LatestPeraturan,
            'countPer' => $countPeraturan,

            // GROUPD
            'groupNomor' => $groupNmrPer,
            'groupTahun' => $groupThnPer,
            'groupJenis' => $groupJnsPer,
            'groupSubjek' => $groupSbjkPer,
            'groupStatus' => $groupStatPer,
        ]);
    }

    public function filterPeraturan(Request $request){
        $searchInput = $request->input('search-peraturan');

        if (!empty($searchInput)) {
            $queryParameter['search-peraturan'] = $searchInput;
        }

        return redirect()->route('show_peraturan.data', $queryParameter);
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
