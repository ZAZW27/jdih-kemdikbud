<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\BeritaTerkait;
use App\Models\Galeri;

use App\Http\Requests\StoreBeritaRequest;
use App\Http\Requests\UpdateBeritaRequest;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class AdminBeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $getBerita = new berita();
        $berita = $getBerita->latestBerita();

        return view('pages.admin.berita.berita', [
            'title' => 'JDIH BPP | Admin',
            'berita' => $berita,
        ]);
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

        // Update the berita data
        $berita->judul = $request->judul;
        $berita->tema = $request->tema;
        $berita->tanggal = $request->tanggal;
        $berita->isi = $request->isi;
        $berita->updated_at = $currTimeStamp;

        // Handle file upload if a new file is provided
        if ($request->hasFile('gambar')) {
            echo asset('berita/file.txt');
            // dd($berita);
            // $file = $request->file('gambar');
            // $fileName = time() . '_' . $file->getClientOriginalName();
            // $filePath = 'assets/img/berita/' . $fileName;
        
            // // Save the file to the public disk
            // $fileSaved = Storage::disk('public')->put($filePath, file_get_contents($file->getRealPath()));
        
            // if ($fileSaved) {
            //     // Set the file path for the berita model
            //     $berita->gambar_berita = $filePath;
            // } else {
            //     // Log or handle the case where the file save fails
            //     \Log::error('File save failed.');
            // }
        }

        
        // dd($validatedData);
        // dd($berita);


        // Save the updated berita
        $berita->save();
        return redirect()->route('getBerita.data')->with('success', 'Berita updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berita $berita)
    {
        //
    }
}
