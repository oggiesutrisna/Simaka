<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegisterKaryawanRequest;
use App\Http\Requests\UpdateRegisterKaryawanRequest;
use App\Models\RegisterKaryawan;
use Illuminate\Support\Facades\Storage;


class RegisterKaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(RegisterKaryawan $request)
    {
        $registerkaryawans = RegisterKaryawan::orderBy('id', 'DESC')->paginate(15);

        return view('registerkaryawans.index', compact('registerkaryawans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
    public function store(StoreRegisterKaryawanRequest $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255 ',
            'ttl' => 'required|max:255 ',
            'gender' => 'required|max:255 ',
            'posisi' => 'required|max:255 ',
            'email' => 'required|max:255 ',
            'alamat' => 'required|max:255 ',
            'filepdf' => 'required|image|mimes:pdf,jpg,jpeg|max:2048',
            'screenshot' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'fotodiri' => 'required|mimes:pdf,jpg,jpeg|max:2048',
            'notelp' => 'required|max:255 ',
            'pend_terakhir' => 'required|max:255',
            'bio' => 'required|max:255',
            'tempat' => 'max:255',
            'salary' => 'required|max:255',
            'dapatinformasi' => 'required|max:255',
        ]);

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
    public function update(UpdateRegisterKaryawanRequest $request, RegisterKaryawan $registerkaryawan)
    {
        $registerkaryawan->update($request->all());
        return redirect()->route('registerkaryawans.show', $registerkaryawan->id)->with('success', 'data calon karyawan telah di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegisterKaryawan $registerkaryawan)
    {
        $registerkaryawan->delete();
        return redirect()->route('registerkaryawans.index')->with('success', 'data karyawan telah di hapus');
    }
}
