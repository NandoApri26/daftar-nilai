<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Fakultas;
use App\Models\ProgramStudi;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fakultas = Fakultas::all();
        $prodi = ProgramStudi::all();
        $mahasiswa = Mahasiswa::all();
        return view('Mahasiswa.index', compact('mahasiswa', 'fakultas', 'prodi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // $mahasiswa = Mahasiswa::all();
        // return view('Mahasiswa.create', compact('mahasiswa'));

        $img = $request->file('foto'); //Menggambil file dari form
        $filename = time() . "-" . $img->getClientOriginalName(); //mengambil dan mengedit nama file dari form
        $img->move('foto_mahasiswa/', $filename); //proses memasukkan file kedalam direktori laravel
        Mahasiswa::create(
            [
                'nama' => $request->nama,
                'nim' => $request->nim,
                'angkatan' => $request->angkatan,
                'fakultas_id' => $request->fakultas,
                'prodi_id' => $request->prodi,
                'kelas' => $request->kelas,
                'foto' => $filename,
            ]
        );
        return redirect('/Mahasiswa')->with('Success', 'Data mahasiswa berhasil ditambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        return view('Mahasiswa.detail', compact('mahasiswa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
