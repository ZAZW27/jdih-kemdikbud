<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Pengumuman;
use App\Models\Peraturan;
use App\Http\Requests\StoreBeritaRequest;
use App\Http\Requests\UpdateBeritaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        // $LatestPeraturan = $peraturan->LatestPeraturan();
        $LatestPeraturan = $peraturan->getProdukHukum();
        // HITUNG BERAPA BANYAK PERATURAN
        $countPeraturan = DB::table('tbl_peraturan')->select('jenis_peraturan.jenis AS jenis_peraturan', DB::raw('COUNT(jenis_id) as countPeraturan'))->join('jenis_peraturan', 'jenis_peraturan.id', '=', 'tbl_peraturan.jenis_id')->groupBy('jenis_peraturan.jenis')->get();
        // HITUNG BERAPA BANYAK VEIWS
        $countView = DB::select("
            (SELECT 'year' AS time, YEAR(tgl_penetapan) AS period, SUM(view) AS totalViews
            FROM tbl_peraturan
            GROUP BY YEAR(tgl_penetapan)
            ORDER BY period DESC
            LIMIT 1)
        
            UNION
        
            (SELECT 'month' AS time, MONTH(tgl_penetapan) AS period, SUM(view) AS totalViews
            FROM tbl_peraturan
            GROUP BY YEAR(tgl_penetapan), MONTH(tgl_penetapan)
            ORDER BY YEAR(tgl_penetapan) DESC, MONTH(tgl_penetapan) DESC
            LIMIT 1)
        
            UNION
        
            (SELECT 'week' AS time, WEEK(tgl_penetapan) AS period, SUM(view) AS totalViews
            FROM tbl_peraturan
            GROUP BY YEAR(tgl_penetapan), WEEK(tgl_penetapan)
            ORDER BY YEAR(tgl_penetapan) DESC, WEEK(tgl_penetapan) DESC
            LIMIT 1)
        ");

        // GROUPING EACH ONE OF THE TABLES (why not)
        $groupNmrPer = $peraturan->LatestPeraturan()->groupBy('id_nomor')->pluck('0.nomor_peraturan', '0.id_nomor');
        $groupThnPer = $peraturan->LatestPeraturan()->groupBy('id_tahun')->pluck('0.tahun_peraturan', '0.id_tahun');
        $groupJnsPer = $peraturan->LatestPeraturan()->groupBy('id_jenis')->pluck('0.jenis_peraturan', '0.id_jenis');
        $groupSbjkPer = $peraturan->LatestPeraturan()->groupBy('id_subjek')->pluck('0.subjek', '0.id_subjek');
        $groupStatPer = $peraturan->LatestPeraturan()->groupBy('id_status')->pluck('0.status_peraturan', '0.id_status');

        return view('index', [
            'title' => 'JDIH BPP | Main Page',
            'berita' => $latestBerita,
            'pengumuman' => $LatestPengumuman,
            'peraturan' => $LatestPeraturan,
            'countPer' => $countPeraturan,
            'countView' => $countView,

            // GROUPD
            'groupNomor' => $groupNmrPer,
            'groupTahun' => $groupThnPer,
            'groupJenis' => $groupJnsPer,
            'groupSubjek' => $groupSbjkPer,
            'groupStatus' => $groupStatPer,
        ]);
    }

    public function filterPeraturan(Request $request)
    {
        $searchInput = $request->input('search-peraturan');
        $subjekInput = $request->input('subjek-peraturan');
        $nomorInput = $request->input('nomor-peraturan');
        $jenisInput = $request->input('jenis-peraturan');
        $tahunInput = $request->input('tahun-peraturan');
        $statusInput = $request->input('status-peraturan');

        $queryParameter = [];

        if (!empty($searchInput)) {
            $queryParameter['search-peraturan'] = $searchInput;
        }

        if (!empty($subjekInput)) {
            $queryParameter['subjek-peraturan'] = $subjekInput;
        }

        if (!empty($jenisInput)) {
            $queryParameter['jenis-peraturan'] = $jenisInput;
        }

        if (!empty($nomorInput)) {
            $queryParameter['nomor-peraturan'] = $nomorInput;
        }

        if (!empty($tahunInput)) {
            $queryParameter['tahun-peraturan'] = $tahunInput;
        }

        if (!empty($statusInput)) {
            $queryParameter['status-peraturan'] = $statusInput;
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
