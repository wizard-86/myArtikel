<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
public function index(Request $request)
{
    $search = $request->search;

    $query = Artikel::query();

    if ($search) {

        $query->where(
            'judul',
            'like',
            "%{$search}%"
        );

    }

    $artikels = $query
    ->paginate(6)
    ->withQueryString();

    return view('artikel.index', compact('artikels'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('artikel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
        ],[
    // Custom pesan error (opsional)
    'judul.required' => 'Judul artikel wajib diisi',
    'judul.unique' => 'Judul artikel sudah pernah digunakan',
    'isi.min' => 'Isi artikel minimal 10 karakter',
    'isi.required' => 'isi artikel wajib diisi'
]);

        $path = null;

if ($request->hasFile('gambar')) {

    $path = $request
        ->file('gambar')
        ->store('artikel', 'public');

}
        

        Artikel::create([
        'judul' => $validated['judul'],
        'isi' => $validated['isi'],
        'gambar' => $path
    ]); // Bisa langsung pakai $validated

        return redirect('/artikel');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Artikel $artikel)
    {
        // $artikel = Artikel::find($id);
        return view('artikel.detail',compact('artikel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artikel $artikel)
    {
        // $artikel = Artikel::find($id);
        return view('artikel.edit',compact('artikel'));
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, string $id)
    public function update(Request $request, Artikel $artikel)
    {

         $validated = $request->validate([
        'isi' => 'required|string',
        'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048'
    ],['isi.required' => 'isi artikel wajib diisi']);

         $path = $artikel->gambar;
    if ($request->hasFile('gambar'))
{
        if ($artikel->gambar && Storage::disk('public')->exists($artikel->gambar)) {
        Storage::disk('public')->delete($artikel->gambar);
        }
    $path = $request
            ->file('gambar')
            ->store('artikel', 'public');
}


    $artikel->update([
        'isi' => $request->isi,
        'gambar' => $path
    ]);

    return redirect()->route('artikel.index');
    }

    /**
     * Remove the specified resource from storage.
     */

    // public function destroy(string $id)
    public function destroy(Artikel $artikel)
    {
        // $artikel = Artikel::find($id);
        // $artikel->delete();
        // return redirect('/artikel');

        $artikel->delete();

        return redirect()->route('artikel.index');
    }
}
