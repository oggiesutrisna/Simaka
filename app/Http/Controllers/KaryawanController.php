<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKaryawanRequest;
use App\Http\Requests\UpdateKaryawanRequest;
use App\Models\Karyawan;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawans = Karyawan::orderBy('id', 'DESC')->paginate(5);

        if(request('search')) {
            $karyawans->where('title' . 'like' , '%' . request('search') . '%');
        }

        return view('karyawans.index', compact('karyawans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('karyawans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKaryawanRequest $request)
    {
        Karyawan::create($request->all());
        // fungsi untuk buat upload image
        if($request->hasFile('filepdf')) {
            foreach($request->file('filepdf') as $filepdf) {
                $name = $filepdf->getClientOriginalName();
                $filepdf->move(public_path().'/uploads/', $name);
                $imgdata[] = $name;
            };
            if($request->hasFile('screenshot')) {
                foreach($request->file('screenshot') as $ss) {
                    $namess = $ss->getClientOriginalName();
                    $ss->move(public_path().'/screenshots/', $namess);
                    $imgdatascreenshot[] = $namess;
                }
            }
        }

        return redirect()->route('karyawans.index')->with('success', 'Data Karyawan telah di ditambah ');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function show(Karyawan $karyawan)
    {
        return view('karyawans.show', compact('karyawan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function edit(Karyawan $karyawan)
    {
        return view('karyawans.edit', compact('karyawan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKaryawanRequest $request, Karyawan $karyawan)
    {
        $karyawan->update($request->all());
        return redirect()->route('karyawans.index')->with('success', 'Data Karyawan telah di update');
    }

    /*
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Karyawan $karyawan)
    {
        $karyawan->delete();

        return redirect()->route('karyawans.index')->with('success', 'data karyawan telah di hapus');
    }
}
