<?php

namespace App\Http\Controllers;

use App\Artikel;
use App\Galeri;
use App\Kategori;
use App\User;
use App\FIle;
use Alert;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $Request)
    {
       
         $artikels =Artikel::with('user')->get();
        return view('artikel.index',compact('artikels')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      // $galeris = Galeri::all();
      $users = User::all();
       $kategori = Kategori::all();
        return view('artikel.create',compact('users','kategori')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Alert::success('Data successfully Saved','Good Job')->persistent(1300);
       $this->validate($request,[
            'judul' => 'required|max:255',
             'content' => 'required',
             // 'galeri' => 'required|max:255',
             'user_id' => 'required|max:255',
              'kategori_id' => 'required|max:255'
    
        ]);

        $artikels = new Artikel;
        $artikels->judul = $request->judul;
        $artikels->content = $request->content;
        if ($request->hasFile('gambar')){
            $file=$request->file('gambar');
            $destinationPath=public_path().'/assets/img/gambargaleri/';
            $filename=str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess= $file->move($destinationPath,$filename);
            $artikels->gambar= $filename;
        }
        $artikels->user_id = $request->user_id;
        $artikels->kategori_id = $request->kategori_id;
         $artikels->slug =str_slug($request->judul, '-');

        $artikels->save();
        return redirect()->route('artikels.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artikels = Artikel::findOrFail($id);
        // $galeris = Galeri::all();
        $users = User::all();
         $kategori = Kategori::all();
        $selectedes = Artikel::findOrFail($id)->user_id;
        $selectedes = Artikel::findOrFail($id)->kategori_id;
         // $selectedes = Artikel::findOrFail($id)->galeri;
        return view('artikel.edit',compact('artikels','users','kategori','selectusers','selectkategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Alert::success('Data successfully Changed','Good Job')->persistent(1300);
       $this->validate($request,[
           'judul' => 'required|max:255',
             'content' => 'required|',
             // 'galeri' => 'required|max:255',
            'kategori_id' => 'required|max:255',
             'user_id' => 'required|max:255'
        ]);
        $artikels = Artikel::findOrFail($id);
        $artikels->judul = $request->judul;
        $artikels->content = $request->content;
        // $artikels->galeri = $request->galeri;
       
          if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $destinationPath = public_path().'/assets/img/gambargaleri/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
    
        // hapus gambar lama, jika ada
        // if ($artikels->gambar) {
        // $old_gambar = $artikels->gambar;
        // $filepath = public_path() . DIRECTORY_SEPARATOR . '/assets/img/gambargaleri'
        // . DIRECTORY_SEPARATOR . $artikels->gambar;
        //     try {
        //     File::delete($filepath);
        //     } catch (FileNotFoundException $e) {
        // // File sudah dihapus/tidak ada
        //     }
        // }
        $artikels->gambar = $filename;
}
         $artikels->kategori_id = $request->kategori_id;
         $artikels->user_id = $request->user_id;

         $artikels->slug =str_slug($request->judul, '-');
        $artikels->save();
        return redirect()->route('artikels.index');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        Alert::success('Data successfully Deleted','Good Job')->persistent(1300);
        $artikels = Artikel::findOrFail($id);

         // if ($artikels->gambar) {
         //    $old_gambar = $artikels->gambar;
         //    $filepath = public_path() . DIRECTORY_SEPARATOR . 'assets/img/gambargaleri/'
         //    . DIRECTORY_SEPARATOR . $artikels->gambar;
         //    try {
         //    File::delete($filepath);
         //    } catch (FileNotFoundException $e) {
         //    // File sudah dihapus/tidak ada
         //    }
         //    }

        $artikels->delete();
        return redirect()->route('artikels.index');    
    }
}
