<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WisataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wisatas = Wisata::all();
        return view('admin.wisata.index', compact('wisatas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.wisata.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'namaWisata' => ['required'],
            'lokasiWisata' => ['required'],
            'deskripsiWisata' => ['required'],
            'tarifMasuk' => ['required', 'numeric'],
        ]);



        if ($request->file('foto')) {
            $file =  $request->file('foto');
            $tujuan_upload = 'images/wisata';

            $name = str()->slug($data['namaWisata']) . '.' .   $file->getClientOriginalExtension();
            $file->move($tujuan_upload, $name);
        }



        Wisata::create($data);

        return to_route('admin.wisata.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Wisata $wisata)
    {
        return view('admin.wisata.show', compact('wisata'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Wisata $wisata)
    {


        return view('admin.wisata.edit', compact('wisata'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Wisata $wisata)
    {
        $data = $request->validate([
            'namaWisata' => ['required'],
            'lokasiWisata' => ['required'],
            'deskripsiWisata' => ['required'],
            'tarifMasuk' => ['required', 'numeric'],
        ]);

        if ($request->file('foto')) {
            $file =  $request->file('foto');
            $tujuan_upload = 'images/wisata';
            $name = str()->slug($data['namaWisata']) . '.' .   $file->getClientOriginalExtension();
            $file->move($tujuan_upload, $name);
            $data['foto'] = $name;
        }

        $wisata->update($data);
        $wisata->save();

        return to_route('admin.wisata.show', $wisata->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
