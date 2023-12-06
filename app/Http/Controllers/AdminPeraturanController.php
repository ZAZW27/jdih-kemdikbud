<?php

namespace App\Http\Controllers;

use App\Models\BppProdukHukum;
use App\Models\Peraturan;

use App\Http\Requests\StoreBeritaRequest;
use App\Http\Requests\UpdateBeritaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class AdminPeraturanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $getPeraturan = new Peraturan();
        $peraturan = $getPeraturan->getProdukHukum(10);

        return view('pages.admin.peraturan.peraturan', [
            'title' => 'JDIH BPP | Admin',
            'active' => 'peraturan',
            'peraturan' => $peraturan,
        ]);
    }

    public function inputForm(){
        $peraturan = new Peraturan();
        $groupJenis = $peraturan->LatestPeraturan()->groupBy('id_jenis')->pluck('0.jenis_peraturan', '0.id_jenis');
        $groupTahun = DB::table('tahun_branch')->orderBy('tahun', 'desc')->get();
        $groupStatus = DB::table('status_branch')->orderBy('id', 'asc')->get();

        return view('pages.admin.peraturan.insert', [
            'title' => 'JDIH BPP | Peraturan',
            'groupJenis' => $groupJenis,
            'groupTahun' => $groupTahun,
            'groupStatus' => $groupStatus,
        ]);
    }

    public function insert(Request $request){
        $peraturan = new BppProdukHukum();

    
        $judul = $request->input('judul');
        $tipe_dok = $request->input('tipe_dok');
        $subjek = $request->input('subjek');
        $tipe_subjek = $request->input('tipe_subjek');
        $jenis_subjek = $request->input('jenis_subjek');
        $nama_peng = $request->input('nama_peng');
        $tipe_peng = $request->input('tipe_peng');
        $jenis_peng = $request->input('jenis_peng');
        $nomor_per = $request->input('nomor_per');
        $jenis_per = $request->input('jenis_per');
        $tahun_per = $request->input('tahun_per');
        $tempat_penetapan = $request->input('tempat_penetapan');
        $tanggal_penetapan = $request->input('tanggal_penetapan');
        $tanggal_pengundangan = $request->input('tanggal_pengundangan');
        $status = $request->input('status');
        $bahasa = $request->input('bahasa');
        $catatan = $request->input('catatan');
        $sumber = $request->input('sumber');
    
        $peraturan->tipe_dokumen = $tipe_dok;
        $peraturan->judul = $judul;
        $peraturan->nama_pengarang = $nama_peng;
        $peraturan->tipe_pengarang = $tipe_peng;
        $peraturan->jenis_pengarang = $jenis_peng;
        $peraturan->nomor_peraturan = $nomor_per;
        $peraturan->id_jenis_peraturan = $jenis_per;
        $peraturan->tempat_penetapan = $tempat_penetapan;
        $peraturan->tanggal_penetapan = $tanggal_penetapan;
        $peraturan->tanggal_pengundangan = $tanggal_pengundangan;
        $peraturan->id_tahun_peraturan = $tahun_per;
        $peraturan->sumber = $sumber;
        $peraturan->subjek = $subjek;
        $peraturan->tipe_subjek = $tipe_subjek;
        $peraturan->jenis_subjek = $jenis_subjek;
        $peraturan->id_status_peraturan = $status;
        $peraturan->catatan = $catatan;
        $peraturan->bahasa = $bahasa;
        $peraturan->dilihat = '0';
        $peraturan->diunduh = '0';

        if (!$request->file('file')){
            $peraturan->file = 'TIdak ada';
        }else {
            $peraturan->file = $request->file('file');
        }

        

        $peraturan->save();

        return redirect()->route('getPeraturan.data');
    }

    public function edit($id){
        $detail_pereaturan = BppProdukHukum::where('id', $id)->first();
        $peraturan = new Peraturan();
        $groupJenis = $peraturan->LatestPeraturan()->groupBy('id_jenis')->pluck('0.jenis_peraturan', '0.id_jenis');
        $groupTahun = DB::table('tahun_branch')->orderBy('tahun', 'desc')->get();
        $groupStatus = DB::table('status_branch')->orderBy('id', 'asc')->get();

        return view('pages.admin.peraturan.update', [
            'title' => 'JDIH | Update peraturan', 
            'data' => $detail_pereaturan, 
            'groupJenis' => $groupJenis,
            'groupTahun' => $groupTahun,
            'groupStatus' => $groupStatus,
        ]);
    }

    public function update(Request $request)    
    {
        $validatedData = $request->validate([
            'id' => 'required|integer',
            'judul' => 'required|string',
            'tipe_dok' => 'required|string',
            'subjek' => 'required|string',
            'tipe_subjek' => 'required|string',
            'jenis_subjek' => 'required|string',
            'nama_peng' => 'required|string',
            'tipe_peng' => 'required|string',
            'jenis_peng' => 'required|string',
            'nomor_per' => 'required|string',
            'jenis_per' => 'required|string',
            'tahun_per' => 'required|string',
            'tempat_penetapan' => 'required|string',
            'tanggal_penetapan' => 'required|string',
            'tanggal_pengundangan' => 'required|string',
            'status' => 'required|string',
            'bahasa' => 'required|string',
            'sumber' => 'required|string',
            'catatan' => 'required|string',
        ]);

        // dd($validatedData);
        $currTimeStamp = now()->toDateTimeString();

        $id = $request->id;

        $peraturan = BppProdukHukum::findOrFail($id);

        $peraturan->judul = $request->judul;
        $peraturan->tipe_dokumen = $request->tipe_dok;
        $peraturan->subjek = $request->subjek;
        $peraturan->tipe_subjek = $request->tipe_subjek;
        $peraturan->jenis_subjek = $request->jenis_subjek;
        $peraturan->nama_pengarang = $request->nama_peng;
        $peraturan->tipe_pengarang = $request->tipe_peng;
        $peraturan->jenis_pengarang = $request->jenis_peng;
        $peraturan->nomor_peraturan = $request->nomor_per;
        $peraturan->id_jenis_peraturan = $request->jenis_per;
        $peraturan->id_tahun_peraturan = $request->tahun_per;
        $peraturan->tempat_penetapan = $request->tempat_penetapan;
        $peraturan->tanggal_penetapan = $request->tanggal_penetapan;
        $peraturan->tanggal_pengundangan = $request->tanggal_pengundangan;
        $peraturan->id_status_peraturan = $request->status;
        $peraturan->bahasa = $request->bahasa;
        $peraturan->sumber = $request->sumber;
        $peraturan->catatan = $request->catatan;

        // Save the updated berita
        $peraturan->save();
        return redirect()->route('getPeraturan.data')->with('success', 'Berita updated successfully');
    }

    public function delete($id){
        $peraturan = BppProdukHukum::find($id);

        if (!$peraturan) {
            return "Peraturan dengan id $id tidak ada";
        }

        $peraturan->delete();

        return redirect()->route('getPeraturan.data')->with('success', 'berita telah dihapus');
    }
}
