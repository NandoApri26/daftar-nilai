<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use App\Models\Fakultas;
use App\Models\ProgramStudi;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fakultas = Fakultas::all();
        $prodi = ProgramStudi::all();
        $mataKuliah = MataKuliah::all();
        return view('MataKuliah.index', compact('mataKuliah', 'fakultas', 'prodi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $this->validate(
            $request,
            [
                'kodeMK' => 'required|unique:mata_kulias,kode_mk|min:4|max:11',
                'mata_kuliah' => 'required',
                'fakultas' => 'required',
                'prodi' => 'required'
            ],
            [
                'kodeMK.required' => 'Kode MK tidak boleh kurang dari 4 angka dan lebih dari 11',
                'kodeMK.unique' => 'Kode MK sudah terdaftar',
                'mata_kuliah' => 'Masukkan nama mata kuliah',
                'fakultas.required' => 'Fakultas wajib diisi',
                'prodi.required' => 'Program studi wajib diisi',
            ]
        );
        MataKuliah::create(
            [
                'kode_mk' => $request->kodeMK,
                'mata_kuliah' => $request->mata_kuliah,
                'fakultas_id' => $request->fakultas,
                'prodi_id' => $request->prodi,
            ]
        );
        return redirect('/MataKuliah')->with('Success', 'Mata Kuliah berhasil ditambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MataKuliah $mataKuliah)
    {
        return view('MataKuliah.update', compact('mataKuliah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MataKuliah $mataKuliah)
    {
        // $request->validate(
        //     [
        //         'kodeMK' => 'required|unique:mata_kulias,kode_mk|min:4|max:11',
        //     ]
        // );
        MataKuliah::where('id', $mataKuliah->id)->update(
            [
                'kode_mk' => $request->kodeMK,
                'mata_kuliah' => $request->mata_kuliah,
                // 'fakultas_id' => $request->fakultas,
                'prodi_id' => $request->prodi,
            ],
            [
                'kodeMK.required' => 'Kode MK tidak boleh kurang dari 4 angka dan lebih dari 11',
                'kodeMK.unique' => 'Kode MK sudah terdaftar',
            ]
        );
        return redirect('/MataKuliah')->with('Success', 'Mata Kuliah berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MataKuliah $mataKuliah)
    {
        MataKuliah::destroy('id', $mataKuliah->id);
        return redirect('/MataKuliah')->with('Success', 'Mata Kuliah berhasil dihapus');
    }
}
