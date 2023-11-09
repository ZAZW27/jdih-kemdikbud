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
    public function showPeraturan(Request $request){

        $searchInput = $request->input('search-peraturan');

        $peraturan = new Peraturan();

        $peraturanData = Peraturan::with(['getNomor', 'getJenis', 'getSubjek', 'getTahun', 'getStatus'])
        ->when($searchInput, function($query) use ($searchInput) {
            $query->where(function($subQuery) use ($searchInput) {
                $subQuery->orWhere('judul_peraturan', 'like', '%' . $searchInput . '%');
            });
        })->get();

        return view('pages.produk-hukum.peraturan', [
            'title' => 'Peraturan | JDIH BPK',
            'peraturanData' => $peraturanData,
            
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
