<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/beranda', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

 Route::get('logout','\App\Http\Controller\Auth\LoginController@logout');

Route::group(['prefix'=>'admin','middleware'=>['auth','role:admin']],function(){
	   Route::get('/home', 'HomeController@index')->name('home');
       Route::resource('gurus', 'GuruController');
	   Route::resource('eskuls', 'EskulController');
       Route::resource('fasilitas','FasilitasController');
       Route::resource('prestasis','PrestasiController');
       Route::resource('artikels','ArtikelController');
       Route::resource('kategori','KategoriController');
       Route::resource('galeris','GaleryController');
       Route::resource('users', 'UserController');
       Route::resource('testimonis','TestimoniController');
       Route::resource('kategoris','KategorigaleriController');
       Route::resource('kontaks','ContactController');
       Route::resource('kategorisfasilitas','KategoriFasilitasController');

});

Route::get('contact-us', 'ContactUSController@contactUS');
Route::post('contact-us', ['as'=>'contactus.store','uses'=>'ContactUSController@contactUSPost']);


//Frontend
Route::resource('index','FrontendController');
Route::get('/galeri','FrontendController@galeri')->name('galeri');
Route::get('/guru','FrontendController@guru')->name('guru');
Route::get('/eskulprestasi','FrontendController@eskul')->name('eskul');
Route::get('/beranda','FrontendController@beranda')->name('beranda');
Route::get('/fasilitas','FrontendController@fasilitas')->name('fasilitas');
Route::get('/blog','FrontendController@artikel');
Route::get('/blog/{artikels}','FrontendController@show')->name('blog');
Route::get('blog/kategori/{kategori}', 'FrontendController@artikelkategori');
Route::get('/about','FrontendController@Testimoni')->name('Testimoni');
// Route::get('/galeri/kategori/{kategorigaleri}', 'FrontendController@kategorigaleri');



Route::get('/contact', function () {
    return view('frontend.contact');
});
// Route::get('/about', function () {
//     return view('About.index');
// });