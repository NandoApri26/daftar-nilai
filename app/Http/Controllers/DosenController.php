<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use App\Models\ProgramStudi;
use App\Models\Dosen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $fakultas = Fakultas::all();
        $prodi = ProgramStudi::all();
        $dosen = Dosen::all();
        return view('Dosen.index', compact('dosen', 'fakultas', 'prodi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $this->validate(
            $request,
            [
                'nama' => 'required',
                'nidn' => 'required|unique:dosens,nidn|min:11|max:11',
                'fakultas' => 'required',
                'prodi' => 'required',
                'alamat' => 'required|max:100',
                'foto' => 'required'
            ],
            [
                'nama.required' => 'Nama harus diisi',
                'nidn.unique' => 'NIDN sudah terdaftar',
                'nidn.required' => 'NIDN tidak boleh lebih dari 11 karakter',
                'fakultas.required' => 'Fakultas wajib diisi',
                'prodi.required' => 'Program studi wajib diisi',
                'alamat.required' => 'Alamat tidak boleh lebih dari 100 karakter',
                'foto.required' => 'Foto wajib diisi'
            ]
        );

        $img = $request->file('foto'); //Menggambil file dari form
        $filename = time() . "-" . $img->getClientOriginalName(); //mengambil dan mengedit nama file dari form
        $img->move('foto_dosen/', $filename); //proses memasukkan file kedalam direktori laravel
        Dosen::create(
            [
                'nama' => $request->nama,
                'nidn' => $request->nidn,
                'alamat' => $request->alamat,
                'fakultas_id' => $request->fakultas,
                'prodi_id' => $request->prodi,
                'foto' => $filename,
            ]
        );
        return redirect('/Dosen')->with('Success', 'Data berhasil ditambahkan');
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
    public function show(Dosen $dosen)
    {
        return view('Dosen.detail', compact('dosen', 'prodi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dosen $dosen)
    {
        return view('Dosen.update', compact('dosen'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dosen $dosen)
    {
        // $request->validate(
        //     [
        //         'nidn' => 'required|unique:dosens,nidn|min:11|max:11',
        //     ],
        //     [
        //         'nidn.unique' => 'NIDN sudah terdaftar',
        //         'nidn.required' => 'NIDN tidak boleh lebih dari 11 karakter',
        //     ]
        // );      
        if ($request->foto != null) {
            $img = $request->file('foto'); //Menggambil file dari form
            $filename = time() . "-" . $img->getClientOriginalName(); //mengambil dan mengedit nama file dari form
            $img->move('foto_dosen/', $filename); //proses memasukkan file kedalam direktori laravel

            if (file_exists(public_path('foto_dosen/' . $dosen->foto))) {
                unlink(public_path('foto_dosen/' . $dosen->foto));
            }

            Dosen::where('id', $dosen->id)->update(
                [
                    'nama' => $request->nama,
                    'nidn' => $request->nidn,
                    'alamat' => $request->alamat,
                    // 'fakultas_id' => $request->fakultas,
                    'prodi_id' => $request->prodi,
                    'foto' => $filename,
                ]
            );
        } else {
            Dosen::where('id', $dosen->id)->update(
                [
                    'nama' => $request->nama,
                    'nidn' => $request->nidn,
                    'alamat' => $request->alamat,
                    'prodi_id' => $request->prodi,
                ]
            );
        }
        return redirect('/Dosen')->with('Success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dosen $dosen)
    {
        if (file_exists(public_path('foto_dosen/' . $dosen->foto))) {
            $filedeleted = unlink(public_path('foto_dosen/' . $dosen->foto));
            if ($filedeleted) {
                Dosen::destroy('id', $dosen->id);
                return redirect('/Dosen')->with('Success', 'Data berhasil dihapus');
            }
        }
    }
}
