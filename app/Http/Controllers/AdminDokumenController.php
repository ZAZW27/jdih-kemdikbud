<?php

namespace App\Http\Controllers;

use App\Models\BppDokumen;

use App\Http\Requests\StoreBeritaRequest;
use App\Http\Requests\UpdateBeritaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class AdminDokumenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $getDokumen = new BppDokumen();
        $dokumen = $getDokumen->latestDocument();

        return view('pages.admin.dokumen.dokumen', [
            'title' => 'JDIH BPP | Admin',
            'active' => 'dokumen',
            'dokumen' => $dokumen,
        ]);
    }

    public function insert(Request $request){
        $dok = new BppDokumen();

        $judul = $request->input('judul');
        $status = $request->input('status');
        $peraturan = $request->input('peraturan');
        $opd = $request->input('opd');
        $keterangan = $request->input('keterangan');   
        
        if ($status != null) {
            // dd($status);
            $dok->status_dok = 'Selesai';
        }
        else{
            // dd($status);
            $dok->status_dok = 'Paraf Koordinasi';
        }

        $dok->OPD = $opd;
        $dok->peraturan = $peraturan;
        $dok->judul_dok = $judul;
        $dok->keterangan_dok = $keterangan;

        $dok->save();

        return redirect()->route('dokumen-baru');
    }

    public function edit($id){
        $detail_dokumen = BppDokumen::where('id', $id)->first();

        return view('pages.admin.dokumen.update', [
            'title' => 'JDIH | Update dokumen', 
            'data' => $detail_dokumen, 
        ]);
    }

    public function update(Request $request)    
    {
        $validatedData = $request->validate([
            'id' => 'required|integer',
            'judul' => 'required|string',
            // 'status' => 'boolean', // Adjust as needed
            'peraturan' => 'required|string',
            'opd' => 'required|string',
            'keterangan' => 'required|string',
        ]);

        $currTimeStamp = now()->toDateTimeString();

        $id = $request->id;

        $dok = BppDokumen::findOrFail($id);

        $judul = $request->input('judul');
        $status = $request->input('status');
        $peraturan = $request->input('peraturan');
        $opd = $request->input('opd');
        $keterangan = $request->input('keterangan');   
        
        if ($status != null) {
            // dd($status);
            $dok->status_dok = 'Selesai';
        }
        else{
            // dd($status);
            $dok->status_dok = 'Paraf Koordinasi';
        }

        $dok->OPD = $opd;
        $dok->peraturan = $peraturan;
        $dok->judul_dok = $judul;
        $dok->keterangan_dok = $keterangan;
        $dok->updated_at = $currTimeStamp;

        
        // dd($validatedData);
        // dd($dok);


        // Save the updated berita
        $dok->save();
        return redirect()->route('getDokumen.data')->with('success', 'Berita updated successfully');
    }

    public function delete($id){
        $dok = BppDokumen::find($id);

        if (!$dok) {
            return "Dokumen dengan id $id tidak ada";
        }

        $dok->delete();

        return redirect()->route('getDokumen.data')->with('success', 'Dokumen telah dihapus');
    }
}
