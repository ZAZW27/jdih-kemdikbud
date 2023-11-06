<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\pengumuman;
use App\Http\Requests\StoreBeritaRequest;
use App\Http\Requests\UpdateBeritaRequest;

class PengumumanController extends Controller
{
    public function index($id)
    {
        // Assuming you want to fetch a specific Berita by its ID
        $detail_pengumuman = Pengumuman::where('id', $id)->first();
    
        // You can also add more conditions as needed
        // For example, if you want to fetch a specific Berita with a specific category
        // $detail_pengumuman = Berita::where('id', $id)->where('category', 'your_category')->first();
    
        if (!$detail_pengumuman) {
            // Handle the case where the Berita with the specified ID is not found
            // You can return a 404 page or some other response.
        }
    
        // Continue with your logic to display the Berita details
        return view('pages.pengumuman.datail_pengumuman', [
            'title' => 'JDIH KEMDIKBUD | Pengumuman',
            'pengumuman' => $detail_pengumuman,
        ]);
    }
}
