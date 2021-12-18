<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateRegisterKaryawanRequest;
use App\Models\RegisterKaryawan;
use Illuminate\Http\Request;

// model yang digunakan adalah model RegisterKaryawan.php
// fungsi controller agar bisa membuat, mengubah, menghapus, dan menampilkan

class RegisterKaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // menampilkan isi dari data yang sudah dibuat dengan menampilkan tabel
    public function index(Request $request)
    {
        $registerkaryawans = RegisterKaryawan::orderBy('id', 'DESC')->paginate(10);
        return view('registerkaryawans.index', compact('registerkaryawans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    // fungsi untuk menampilkan view create (membuat)
    public function create()
    {
        return view('registerkaryawans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // fungsi untuk perintah menyimpan ke database
    // fungsi store menggunakan validasi agar data yang akan dimasukkan sudah benar sesuai dengan prosedur dari index.blade.php
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama'              => 'required|max:255 ',
            'ttl'               => 'required|max:255 ',
            'gender'            => 'required|max:255 ',
            'posisi'            => 'required|max:255 ',
            'email'             => 'required|max:255 ',
            'alamat'            => 'required|max:255 ',
            'filepdf'           => 'required|image|mimes:pdf,jpg,jpeg|max:2048',
            'screenshot'        => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'fotodiri'          => 'required|mimes:pdf,jpg,jpeg|max:2048',
            'notelp'            => 'required|max:255 ',
            'pend_terakhir'     => 'required|max:255',
            'bio'               => 'required|max:255',
            'waktu'             => 'required|max:255',
            'tempat'            => 'max:255',
            'jadwal'            => 'max:255',
            'salary'            => 'required|max:255',
            'dapatinformasi'    => 'required|max:255',
        ]);

        // fungsi saat attach file,
        // di fungsi ini ada 3
        // screenshot tampilan, filepdf, dan foto diri
        // setelah diisi oleh user, semua attachment pindah ke folder masing masing,
        // agar bisa ditampilkan saat admin melihat attachment menu di bagian show.
        // untuk bisa menggunakan attachment dan bisa ditampilkan, di laravel perlu generate command "php artisan storage:link"

        if ($request->file('filepdf')) {
            $validatedData['filepdf'] = $request->file('filepdf')->store('images');
        }
        if ($request->file('screenshot')) {
            $validatedData['screenshot'] = $request->file('screenshot')->store('screenshot');
        }
        if ($request->file('fotodiri')) {
            $validatedData['fotodiri'] = $request->file('fotodiri')->store('fotodiri');
        }

        RegisterKaryawan::create($validatedData);
        return redirect()->route('validate')->with('success', 'Data anda telah dikirimkan, mohon ditunggu info selanjutnya');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // fungsi menampilkan data
    public function show(RegisterKaryawan $registerkaryawan)
    {
        return view('registerkaryawans.show', compact('registerkaryawan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // fungsi untuk edit, dengan menampilkan satu tabel yang akan di tampilkan
    public function edit(RegisterKaryawan $registerkaryawan)
    {
        return view('registerkaryawans.edit', compact('registerkaryawan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // fungsi untuk update atau fungsi mengubah data
    public function update(UpdateRegisterKaryawanRequest $request, RegisterKaryawan $registerkaryawan)
    {
        $registerkaryawan->update($request->all());
        return redirect()->route('registerkaryawans.edit', $registerkaryawan->id)->with('success', 'data calon karyawan telah di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // fungsi untuk menghapus data
    public function destroy(RegisterKaryawan $registerkaryawan)
    {
        $registerkaryawan->delete();
        return redirect()->route('registerkaryawans.index')->with('success', 'data karyawan telah di hapus');
    }
}
