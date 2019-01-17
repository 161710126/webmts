<?php

namespace App\Http\Controllers;

use App\Kategorigaleri;
use Illuminate\Http\Request;
use Alert;
use Validator;
class KategorigaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategorigaleri::all();
        // dd($kategori);
        return view('kg.index', compact('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kg.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Alert::success('Data successfully Saved','Good Job')->autoclose(1700);
       $this->validate($request,[
           'nama_kategori' => 'required|max:255'
            //  'content' => 'required|',
            //  // 'galeri' => 'required|max:255',
            // 'kategori_id' => 'required|max:255',
            //  'user_id' => 'required|max:255'
        ]);
        // {
        //     Alert::error('Sorry your data is invalid, Please try again!', 'Oops!')->autoclose("7k");
        //     return back()->withErrors($validation)->withInput();
        // }

        // $request->validate([
        //     'nama_kategori' => 'required|unique:kategoris',
        // ]);

        $kategori = new Kategorigaleri;
        $kategori->nama_kategori = $request->nama_kategori;
        // $kategori->slug = str_slug($request->nama_kategori, '-');
        // dd($kategori);
        $kategori->save();
        // Alert::success('Data successfully saved','Good Job')->autoclose(1500);
        return redirect()->route('kategoris.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori $kategori)
    {
        $kategori = Kategorigaleri::all();
        // dd($kategori);
        return view('kg.show', compact('kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategorigaleri::findOrFail($id);
        return view('kg.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Alert::success('Data successfully Changed','Good Job')->autoclose(1700);
       $this->validate($request,[
           'nama_kategori' => 'required|max:255'
            //  'content' => 'required|',
            //  // 'galeri' => 'required|max:255',
            // 'kategori_id' => 'required|max:255',
            //  'user_id' => 'required|max:255'
        ]);
        $kategori = Kategorigaleri::findOrFail($id);
        $kategori->nama_kategori = $request->nama_kategori;
        // dd($kategori);
        $kategori->save();
        // Alert::success('Data successfully edited','Good Job')->autoclose(1000);
        return redirect()->route('kategoris.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\kategori  $kategori
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alert::success('Data successfully Deleted','Good Job')->autoclose(1700);
        $kategori = Kategorigaleri::findOrFail($id);
        $kategori->delete();
        return redirect()->route('kategoris.index');   

    }
}
