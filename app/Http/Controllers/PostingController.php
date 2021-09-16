<?php

namespace App\Http\Controllers;

use App\Models\Posting;
use Illuminate\Http\Request;

class PostingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postings = Posting::latest();
        return view('postings.index', compact('postings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('postings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedPost = $request->validate([
            'judul' => 'required|max:255',
            'deskripsi' => 'required|max:255',
            'tempat' => 'required|max:255',
            'kategori' => 'required|max:255',
            'photo' => 'required|max:255',
        ]);
        if($request->file('photo')) {
            $validatedPost['photo'] = $request->file('photo')->store('fotoposting');
        }
        return redirect()->route('postings.index')->with('success', 'data lowongan sudah terposting');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Posting $postings)
    {
        return view('postings.show', compact('postings'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Posting $postings)
    {
        return view('postings.edit', compact('postings'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Posting $postings)
    {
        $request->validate([
            'judul' => 'required|max:255',
            'deskripsi' => 'required|max:255',
            'tempat' => 'required|max:255',
            'kategori' => 'required|max:255',
            'photo' => 'required|max:255',
        ]);
        $postings->update($request->all());
        return redirect()->route('postings.index', $postings->id)->with('success', 'data open recruitment telah di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Posting $postings)
    {
        $postings->delete();
        return redirect()->route('postings.index')->with('success', 'data postingan telah di hapus');
    }
}
