<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BppDokumen;
use Illuminate\Support\Facades\DB;

class DokumenController extends Controller
{
    public function showDokumen(Request $request)
    {
        $searchInput = $request->input('search-peraturan');
        $peraturanInput = $request->input('peraturan-input');
        $statusInput = $request->input('status-input');
        $thaunInput = $request->input('tahun-input');
        $opdInput = $request->input('opd-input');

        $dokumen = new BppDokumen();

        $getDoc = BppDokumen::select('*')
        ->when($searchInput, function($query) use ($searchInput){
            $query->where(function ($subquery) use ($searchInput){
                $subquery->orwhere('judul_dok', 'like', '%' . $searchInput . '%');
            });
        })
        ->when($peraturanInput, function ($query) use ($peraturanInput) {
            $query->where('peraturan', $peraturanInput);
        })
        ->when($statusInput, function ($query) use ($statusInput) {
            $query->where('status_dok', $statusInput);
        })
        ->when($opdInput, function($query) use ($opdInput){
            $query->where(function ($subquery) use ($opdInput){
                $subquery->orwhere('OPD', 'like', '%' . $opdInput . '%');
            });
        })
        ->when($thaunInput, function($query) use ($thaunInput){
            $query->where(function ($subquery) use ($thaunInput){
                $subquery->orwhere('created_at', 'like', '%' . $thaunInput . '%');
            });
        })
        ->paginate(10);

        $getPeraturan = $dokumen->latestDocument()->groupBy('peraturan')->pluck('0.peraturan');
        $getStatus = $dokumen->latestDocument()->groupBy('status_dok')->pluck('0.status_dok');
        $getYear = BppDokumen::selectRaw('YEAR(created_at) as year')->groupBy(DB::Raw('YEAR(created_at)'))->pluck('year');
        return view('pages.dokumen.dokumen', [
            'title' => 'JDIH | Dokumen', 
            'dok' => $getDoc, 
            'getPer' => $getPeraturan, 
            'getStatus' => $getStatus, 
            'getYear'  => $getYear,

        ]);
    }

    public function filterDokumen(Request $request)
    {
        $searchInput = $request->input('search-peraturan');
        $peraturanInput = $request->input('peraturan-input');
        $statusInput = $request->input('status-input');
        $thaunInput = $request->input('tahun-input');
        $opdInput = $request->input('opd-input');

        $queryParameter = [];

        if (!empty($searchInput)) {
            $queryParameter['search-peraturan'] = $searchInput;
        }

        if (!empty($peraturanInput)) {
            $queryParameter['peraturan-input'] = $peraturanInput;
        }

        if (!empty($statusInput)) {
            $queryParameter['status-input'] = $statusInput;
        }

        if (!empty($thaunInput)) {
            $queryParameter['tahun-input'] = $thaunInput;
        }

        if (!empty($opdInput)) {
            $queryParameter['opd-input'] = $opdInput;
        }

        return redirect()->route('dokumen.data', $queryParameter);
    }
}
