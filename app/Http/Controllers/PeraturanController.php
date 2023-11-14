<?php

namespace App\Http\Controllers;

use App\Models\Peraturan;
use App\Http\Requests\StorePeraturanRequest;
use App\Http\Requests\UpdatePeraturanRequest;
use Illuminate\Http\Request;

class PeraturanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
         // Assuming you want to fetch a specific Berita by its ID
        $detail_peraturan = Peraturan::LatestPeraturan()->where('id', $id)->first();


        // You can also add more conditions as needed
        // For example, if you want to fetch a specific Berita with a specific category
        // $detail_peraturan = Berita::where('id', $id)->where('category', 'your_category')->first();
    
        if (!$detail_peraturan) {
            // Handle the case where the Berita with the specified ID is not found
            // You can return a 404 page or some other response.
        }
    
        // Continue with your logic to display the Berita details
        return view('pages.produk-hukum.detail_peraturan', [
            'title' => 'Berita Detail | JDIH BPK',
            'per' => $detail_peraturan,
        ]);
    }
    public function showPeraturan(Request $request)
    {
        $searchInput = $request->input('search-peraturan');
        $subjekInput = $request->input('subjek-peraturan');
        $nomorInput = $request->input('nomor-peraturan');
        $jenisInput = $request->input('jenis-peraturan');
        $tahunInput = $request->input('tahun-peraturan');
        $statusInput = $request->input('status-peraturan');

        $peraturan = new Peraturan();

        $peraturanData = Peraturan::with(['getNomor', 'getJenis', 'getSubjek', 'getTahun', 'getStatus'])
            ->when($searchInput, function ($query) use ($searchInput) {
                $query->where(function ($subQuery) use ($searchInput) {
                    $subQuery->orWhere('judul_peraturan', 'like', '%' . $searchInput . '%');
                });
            })
            ->when($subjekInput, function ($query) use ($subjekInput) {
                $query->where('subjek_id', $subjekInput);
            })
            ->when($nomorInput, function ($query) use ($nomorInput) {
                $query->where('nomor_id', $nomorInput);
            })
            ->when($jenisInput, function ($query) use ($jenisInput) {
                $query->where('jenis_id', $jenisInput);
            })
            ->when($tahunInput, function ($query) use ($tahunInput) {
                $query->where('tahun_id', $tahunInput);
            })
            ->when($statusInput, function ($query) use ($statusInput) {
                $query->where('status_id', $statusInput);
            })
            ->paginate(10);

        // GROUPING EACH ONE OF THE TABLES
        $groupNomor = $peraturan->LatestPeraturan()->groupBy('id_nomor')->pluck('0.nomor_peraturan', '0.id_nomor');
        $groupTahun = $peraturan->LatestPeraturan()->groupBy('id_tahun')->pluck('0.tahun_peraturan', '0.id_tahun');
        $groupJenis = $peraturan->LatestPeraturan()->groupBy('id_jenis')->pluck('0.jenis_peraturan', '0.id_jenis');
        $groupSubjek = $peraturan->LatestPeraturan()->groupBy('id_subjek')->pluck('0.subjek', '0.id_subjek');
        $groupStatus = $peraturan->LatestPeraturan()->groupBy('id_status')->pluck('0.status_peraturan', '0.id_status');

        return view('pages.produk-hukum.peraturan', [
            'title' => 'Peraturan | JDIH BPK',
            'peraturanData' => $peraturanData,
            'groupNomor' => $groupNomor,
            'groupTahun' => $groupTahun,
            'groupJenis' => $groupJenis,
            'groupSubjek' => $groupSubjek,
            'groupStatus' => $groupStatus,
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
    public function store(StorePeraturanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Peraturan $peraturan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peraturan $peraturan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePeraturanRequest $request, Peraturan $peraturan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peraturan $peraturan)
    {
        //
    }
}
