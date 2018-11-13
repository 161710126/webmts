<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\eskul;
use App\fasilitas;
use App\galeri;
use App\guru;
use App\Kategori;
use App\prestasi;
use App\User;
use App\Testimoni;
use App\Kategorigaleri;
use App\Kategori_fasilitas;
use Vinkla\Instagram\Instagram;
class FrontendController extends Controller
{
    public function beranda()
    {   
        $artikels = Artikel::all();
        $galeriss = galeri::paginate(5);
        $testimonis = Testimoni::all();
    	return view('index',compact('artikels','galeriss','testimonis'));
    }
    public function guru()
    {
    	$gurus = guru::all();
    	return view('frontend.guru',compact('gurus'));
    }

    public function eskul()
    {
        $eskuls = eskul::all();
        $prestasis = prestasi::all();
        return view('frontend.eskulpres',compact('eskuls','prestasis'));
    }

     public function prestasi()
    {
        $prestasis = prestasi::all();
        return view('Prestasi.index',compact('prestasis'));
    }

     public function artikel()
    {
        $artikels = Artikel::all();
        return view('blog.home',compact('artikels'));
    }

    public function show(Artikel $artikels)
    {
         $previous = Artikel::where('id', '<', $artikels->id)->orderBy('id', 'desc')->first();
        $next = Artikel::where('id', '>', $artikels->id)->orderBy('id')->first();
        // $artikels = Artikel::findOrFail($id);
        return view('blog.show',compact('artikels','previous','next'));
    }

    // public function artikelkategori(Kategori $kategori)
    // {
    //     $artikels = $kategori->Artikel()->latest()->paginate(5);
    //     return view('blog.blog-home', compact('artikels'));
    // }

    public function fasilitas()
    {
        $kategfasilitas = Kategori_fasilitas::all();
        $fasilitas = fasilitas::all();
        $kategfasil = fasilitas::all();
        return view('frontend.fasilitas',compact('kategfasil','kategfasilitas','fasilitas'));
    }

     public function Testimoni()
    {
        $testimonis = Testimoni::all();
        return view('frontend.about',compact('testimonis'));
    }

    public function galeri()
    {
        $kategori = Kategorigaleri::all();
        $galeriss = Galeri::all();
        $kategorig = galeri::all();
        return view('frontend.galery',compact('kategorig','kategori','galeriss'));
    }

    // public function kategorigaleri(Kategorigaleri $kategori)
    // {
    //     $kategori = $kategori->galeri()->latest()->paginate(5);
    //     return view('Galery.index', compact('kategori'));
    // }

}
