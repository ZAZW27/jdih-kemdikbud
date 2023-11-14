<?php

namespace App\Http\Controllers;

use App\Models\Peraturan; 
use App\Models\BppProdukHukum; 
use App\Http\Requests\StorePeraturanRequest;
use App\Http\Requests\UpdatePeraturanRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        $peraturanData = Peraturan::select(
            'tbl_peraturan.id AS id_peraturan',
            'nomor_peraturan.id AS id_nomor',
            'tahun_branch.id AS id_tahun',
            'jenis_peraturan.id AS id_jenis',
            'subjek_peraturan.id AS id_subjek',
            'status_branch.id AS id_status',
            'tbl_peraturan.judul_peraturan',
            'nomor_peraturan.nomor AS nomor_peraturan',
            'tahun_branch.tahun AS tahun_peraturan',
            'jenis_peraturan.jenis AS jenis_peraturan',
            'subjek_peraturan.subjek AS subjek',
            'status_branch.status AS status_peraturan',
            'tbl_peraturan.tgl_penetapan AS tanggal_penetapan',
            'tbl_peraturan.tajuk_entri_pertama',
            'tbl_peraturan.tipe_dokumen',
            'tbl_peraturan.tmpt_penetapan AS tempat_penetapan',
            'tbl_peraturan.tgl_penetapan',
            'tbl_peraturan.tgl_pengundangan AS tanggal_pengundangan',
            'tbl_peraturan.sumber',
            'tbl_peraturan.detail_status',
            'tbl_peraturan.bahasa',
            'tbl_peraturan.lokasi',
            'tbl_peraturan.bidang_hukum',
            'tbl_peraturan.view',
            'tbl_peraturan.download',
            DB::raw('NULL AS catatan'),
            DB::raw('NULL AS nama_pengarang'),
            DB::raw('NULL AS jenis_pengarang'),
            DB::raw('NULL AS tipe_pengarang'),
            DB::raw('NULL AS tipe_subjek'),
            DB::raw('NULL AS jenis_subjek'),
            DB::raw('NULL AS file')
        )
        // ... (join statements)
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
        });

        $bppProdukHukumData = BppProdukHukum::select(
            'bpp_produk_hukum.id AS id_produk',
            DB::raw('NULL AS id_nomor'),
            'tahun_branch.id AS id_tahun',
            'jenis_peraturan.id AS id_jenis',
            DB::raw('NULL AS id_subjek'),
            'status_branch.id AS id_status',
            'bpp_produk_hukum.judul AS judul_peraturan',
            'bpp_produk_hukum.nomor_peraturan',
            'tahun_branch.tahun AS tahun_peraturan',
            'jenis_peraturan.jenis AS jenis_peraturan',
            'bpp_produk_hukum.subjek',
            'status_branch.status AS status_peraturan',
            'bpp_produk_hukum.tanggal_penetapan',
            DB::raw('NULL AS tajuk_entri_pertama'),
            'bpp_produk_hukum.tipe_dokumen',
            'bpp_produk_hukum.tempat_penetapan',
            'bpp_produk_hukum.tanggal_penetapan AS tgl_penetapan',
            'bpp_produk_hukum.tanggal_pengundangan',
            'bpp_produk_hukum.sumber',
            DB::raw('NULL AS detail_status'),
            'bpp_produk_hukum.bahasa',
            DB::raw('NULL AS lokasi'),
            DB::raw('NULL AS bidang_hukum'),
            'bpp_produk_hukum.dilihat AS view',
            'bpp_produk_hukum.diunduh AS download',
            'bpp_produk_hukum.catatan',
            'bpp_produk_hukum.nama_pengarang',
            'bpp_produk_hukum.jenis_pengarang',
            'bpp_produk_hukum.tipe_pengarang',
            'bpp_produk_hukum.tipe_subjek',
            'bpp_produk_hukum.jenis_subjek',
            'bpp_produk_hukum.file'
        )
        // ... (join statements)
        ->when($searchInput, function ($query) use ($searchInput) {
            $query->where(function ($subQuery) use ($searchInput) {
                $subQuery->orWhere('judul', 'like', '%' . $searchInput . '%');
            });
        })
        // ->when($subjekInput, function ($query) use ($subjekInput) {
        //     // Adjust the field name based on your actual structure
        //     $query->where('subjek', $subjekInput);
        // })
        // ->when($nomorInput, function ($query) use ($nomorInput) {
        //     // Adjust the field name based on your actual structure
        //     $query->where('nomor_peraturan', $nomorInput);
        // })
        ->when($jenisInput, function ($query) use ($jenisInput) {
            // Adjust the field name based on your actual structure
            $query->where('jenis_id', $jenisInput);
        })
        ->when($tahunInput, function ($query) use ($tahunInput) {
            // Adjust the field name based on your actual structure
            $query->where('tahun_id', $tahunInput);
        })
        ->when($statusInput, function ($query) use ($statusInput) {
            // Adjust the field name based on your actual structure
            $query->where('status_id', $statusInput);
        });

        // Unionize the results
        $combinedData = $peraturanData->union($bppProdukHukumData)->paginate(10);

        // GROUPING EACH ONE OF THE TABLES
        $groupNomor = $peraturan->LatestPeraturan()->groupBy('id_nomor')->pluck('0.nomor_peraturan', '0.id_nomor');
        $groupTahun = $peraturan->LatestPeraturan()->groupBy('id_tahun')->pluck('0.tahun_peraturan', '0.id_tahun');
        $groupJenis = $peraturan->LatestPeraturan()->groupBy('id_jenis')->pluck('0.jenis_peraturan', '0.id_jenis');
        $groupSubjek = $peraturan->LatestPeraturan()->groupBy('id_subjek')->pluck('0.subjek', '0.id_subjek');
        $groupStatus = $peraturan->LatestPeraturan()->groupBy('id_status')->pluck('0.status_peraturan', '0.id_status');

        return view('pages.produk-hukum.peraturan', [
            'title' => 'Peraturan | JDIH BPK',
            'peraturanData' => $combinedData,
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
