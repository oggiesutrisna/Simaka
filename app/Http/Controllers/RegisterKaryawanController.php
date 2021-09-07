<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegisterKaryawanRequest;
use App\Http\Requests\UpdateRegisterKaryawanRequest;
use App\Models\RegisterKaryawan;


class RegisterKaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registerkaryawans = RegisterKaryawan::orderBy('id', 'DESC')->paginate(5);

        if(request('search')) {
            $registerkaryawans->where('name' . 'like' , '%' . request('search') . '%');
        }

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
        RegisterKaryawan::create($request->all());

        return redirect()->route('validations.index')->with('success', 'Data anda telah dikirimkan, mohon ditunggu info selanjutnya');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('registerkaryawans.show', compact('registerkaryawans'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(RegisterKaryawan $registerkaryawans)
    {
        return view('registerkaryawans.edit', compact('registerkaryawans'));
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
        return redirect()->route('registerkaryawans.index')->with('success', 'data calon karyawan telah di update');
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

    public function uploadpdf(RegisterKaryawan $registerkaryawan) {

    }
}
