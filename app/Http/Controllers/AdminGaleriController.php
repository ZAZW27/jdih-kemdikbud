<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\BeritaTerkait;
use App\Models\Galeri;

use App\Http\Requests\StoreBeritaRequest;
use App\Http\Requests\UpdateBeritaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class AdminGaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $getGallery = new Galeri();
        $gallery = $getGallery->latestGaleri();

        return view('pages.admin.galeri.galeri', [
            'title' => 'JDIH BPP | Admin',
            'active' => 'gallery',
            'galeri' => $gallery,
        ]);
    }

    public function insert(Request $request){
        $galeri = new Galeri();

        $judul = $request->input('judul');
        $exerpt = $request->input('exerpt');
        $gambar = $request->file('gambar');

        if ($request->hasfile('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalName();
            $filename = time() . '_' . str_replace(' ', '_', $extension);
            $file->move('assets/img/galeri', $filename);

            // MASUKKAN BARANG
            $galeri->gambar = $filename;
            $galeri->judul = $judul;
            $galeri->exerpt = $exerpt;
            // dd($filename);
        }
        else{
            $seeData = [
                $judul, $exerpt, $gambar
            ];

            dd($seeDataa);
        }

        $galeri->save();

        return redirect()->route('getGaleri.data');
    }

    public function edit($id){
        $detail_galeri = Galeri::where('id', $id)->first();

        return view('pages.admin.galeri.update', [
            'title' => 'JDIH | Update Galeri', 
            'active' => 'Gallery', 
            'data' => $detail_galeri, 
        ]);
    }

    public function update(Request $request)    
    {
        $validatedData = $request->validate([
            'id' => 'required|integer',
            'judul' => 'required|string',
            'exerpt' => 'required|string',
            'gambar' => 'image|mimes:jpeg,png,jpg,svg', // Adjust as needed
        ]);
        $currTimeStamp = now()->toDateTimeString();

        $id = $request->id;

        $galeri = Galeri::findOrFail($id);

        // Handle file upload if a new file is provided
        if ($request->hasfile('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            // $file->move('uplloads/berita', $filename);
            $file->move('assets/img/galeri', $filename);

            // MASUKKAN BARANG
            $galeri->gambar = $filename;
        }

        $galeri->judul = $request->input('judul');
        $galeri->exerpt = $request->input('exerpt');
        
        // dd($validatedData);
        // dd($galeri);


        // Save the updated berita
        $galeri->save();
        return redirect()->route('getGaleri.data')->with('success', 'Berita updated successfully');
    }

    public function delete($id){
        $galeri = Galeri::find($id);

        if (!$galeri) {
            return "Galeri dengan id $id tidak ada";
        }

        $galeri->delete();

        return redirect()->route('getGaleri.data')->with('success', 'berita telah dihapus');
    }
}
