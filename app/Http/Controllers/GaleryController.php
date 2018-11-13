<?php

namespace App\Http\Controllers;

use App\galeri;
// use App\kategori_galeri;
use File;
use Auth;
use Alert;
use App\Kategorigaleri;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $galeriss =galeri::all();
       //  return view('galeri.index',compact('galeriss')); 
         $galeriss =galeri::with('Kategorigaleri')->get();
        return view('galeri.index',compact('galeriss')); 
    }
    //  public function index1()
    // {
    //      $galeris1 =galeri::all();
    //     return view('galeri.index1',compact('galeris1')); 
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $galeris = kategori_galeri::all();
        $galeriss = galeri::all();
        $kategori = Kategorigaleri::all();
        return view('galeri.create',compact('kategori','galeriss')); 
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
            // 'poto' => 'required|',
            'kategori_id' => 'required|'
             // 'kategorigaleri_id' => 'required|'
           
        ]);

        $galeriss = new galeri;
         if ($request->hasFile('poto')){
            $file=$request->file('poto');
            $destinationPath=public_path().'/assets/img/gambarweb/';
            $filename=str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess= $file->move($destinationPath,$filename);
            $galeriss->poto= $filename;
        
        }
        // $galeriss->kategorigaleri_id = $request->kategorigaleri_id;
        $galeriss->kategori_id = $request->kategori_id;
        $galeriss->save();
        return redirect()->route('galeris.index');     
  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function show(galeri $galeri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $galeriss = galeri::findOrFail($id);
         $kategori = Kategorigaleri::all();
        return view('galeri.edit',compact('galeriss','kategori'));   

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        Alert::success('Data successfully Changed','Good Job')->persistent(1300);
         $this->validate($request,[
             'poto' => 'required|',
              'kategori_id' => 'required|'
             
           
        ]);
        $galeriss=galeri::findOrFail($id);
        if ($request->hasFile('poto')) {
            $file = $request->file('poto');
            $destinationPath = public_path().'/assets/img/gambarweb/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
    
        // hapus poto lama, jika ada
        if ($galeriss->poto) {
        $old_poto = $galeriss->poto;
        $filepath = public_path() . DIRECTORY_SEPARATOR . '/assets/img/gambarweb'
        . DIRECTORY_SEPARATOR . $galeriss->poto;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
        // File sudah dihapus/tidak ada
            }
        }
        $galeriss->poto = $filename;
}
        
         // edit upload poto
        $galeriss->kategori_id = $request->kategori_id;
        $galeriss->save();
        return redirect()->route('galeris.index');     
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\galeri  $galeri
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
      {
        Alert::success('Data successfully Deleted','Good Job')->persistent(1300);
         $galeriss = galeri::findOrFail($id);
          if ($galeriss->poto) {
            $old_foto = $galeriss->poto;
            $filepath = public_path() . DIRECTORY_SEPARATOR . 'assets/img/gambarweb/'
            . DIRECTORY_SEPARATOR . $galeriss->poto;
            try {
            File::delete($filepath);
            } catch (FileNotFoundException $e) {
            // File sudah dihapus/tidak ada
            }
            }
        $galeriss->delete();
        return redirect()->route('galeris.index');    }
}
