<?php

namespace App\Http\Controllers;

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
        $peraturan = $getPeraturan->latestPeraturan(10);

        return view('pages.admin.peraturan.peraturan', [
            'title' => 'JDIH BPP | Admin',
            'active' => 'peraturan',
            'peraturan' => $peraturan,
        ]);
    }

    public function insert(Request $request){
        $berita = new BErita();

        $judul = $request->input('judul');
        $tema = $request->input('tema');
        $isi = $request->input('isi');
        $tanggal = $request->input('tanggal');
        $gambar = $request->file('gambar');   
        
        if ($request->hasfile('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalName();
            $filename = time() . '_' . str_replace(' ', '_', $extension);
            $file->move('assets/img/berita', $filename);

            // MASUKKAN BARANG
            $berita->gambar_berita = $filename;
            $berita->judul = $judul;
            $berita->tema = $tema;
            $berita->isi = $isi;
            $berita->tanggal = $tanggal;
            $berita->dilihat = 0;
            $berita->tautan = 'null';
            // dd($filename);
        }
        else{
            $seeData = [
                $judul, $tema, $isi, $tanggal, $gambar
            ];

            dd($seeDataa);
        }

        $berita->save();

        return redirect()->route('berita-baru');
    }

    public function edit($id){
        $detail_berita = Berita::where('id', $id)->first();

        return view('pages.admin.berita.update', [
            'title' => 'JDIH | Update berita', 
            'berita' => $detail_berita, 
        ]);
    }

    public function update(Request $request)    
    {
        $validatedData = $request->validate([
            'id' => 'required|integer',
            'judul' => 'required|string',
            'gambar' => 'image|mimes:jpeg,png,jpg,svg', // Adjust as needed
            'tema' => 'required|string',
            'tanggal' => 'required|date',
            'isi' => 'required|string',
        ]);
        $currTimeStamp = now()->toDateTimeString();

        $id = $request->id;

        $berita = Berita::findOrFail($id);

        // Handle file upload if a new file is provided
        if ($request->hasfile('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            // $file->move('uplloads/berita', $filename);
            $file->move('assets/img/berita', $filename);

            // MASUKKAN BARANG
            $berita->gambar_berita = $filename;
        }
        $berita->judul = $request->judul;
        $berita->tema = $request->tema;
        $berita->tanggal = $request->tanggal;
        $berita->isi = $request->isi;
        $berita->updated_at = $currTimeStamp;

        
        // dd($validatedData);
        // dd($berita);


        // Save the updated berita
        $berita->save();
        return redirect()->route('getBerita.data')->with('success', 'Berita updated successfully');
    }

    public function delete($id){
        $berita = Berita::find($id);

        if (!$berita) {
            return "Berita dengan id $id tidak ada";
        }

        $berita->delete();

        return redirect()->route('getBerita.data')->with('success', 'berita telah dihapus');
    }
}
