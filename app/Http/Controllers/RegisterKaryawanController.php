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

        if ($request->hasFile('filepdf')) {
            $fileupload = $request->file('filepdf');
            $extension = $fileupload->getClientOriginalName();
            $filename = time().'.'.$extension;
            // $fileupload->storeAs('uploads/img/', $filename);
            $path = $request->file('filepdf')->storeAs('public/uploads', $filename);
        } else {
            $filename = 'uploadregular.jpg';
        }

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
}
