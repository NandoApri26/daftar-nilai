<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dosen = Dosen::all();
        return view('Dosen.index', compact('dosen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $this->validate($request,
            [
                'nama' => 'required',
                'nidn' => 'required|min:11|max:11',
                'alamat' => 'required|max:100',
                'foto' => 'required'
            ],
            [
                'nama.required' => 'Nama harus diisi',
                'nidn.required' => 'NIDN tidak boleh lebih dari 11 karakter',
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
                'foto' => $filename,
            ]
        );
        return redirect('/Dosen')->with('success', 'Berhasil ditambah');
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
        return view('Dosen.detail', compact('dosen'));
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
        if ($request->foto != null) {
            $img = $request->file('foto'); //Menggambil file dari form
            $filename = time() . "-" . $img->getClientOriginalName(); //mengambil dan mengedit nama file dari form
            $img->move('foto_dosen/', $filename); //proses memasukkan file kedalam direktori laravel
            
            Dosen::where('id', $dosen->id)->update(
                [
                    'nama' => $request->nama,
                    'nidn' => $request->nidn,
                    'alamat' => $request->alamat,
                    'foto' => $filename,
                ]
            );
        } else {
            Dosen::where('id', $dosen->id)->update(
                [
                    'nama' => $request->nama,
                    'nidn' => $request->nidn,
                    'alamat' => $request->alamat
                ]
            );
        }
        return redirect('/Dosen');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dosen $dosen)
    {
        Dosen::destroy('id', $dosen->id);
        return redirect('/Dosen')->with('Success', true);
    }
}
