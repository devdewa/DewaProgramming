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

Auth::routes([

]);



Route::get('/', 'HalamanController@tutorial');
Route::get('/youtube', 'HalamanController@youtube');
Route::get('/teknologi', 'HalamanController@teknologi');
Route::get('/teknologi-cari', 'HalamanController@teknologi_cari')->name('teknologi');
Route::get('/adityawarman-dewa-putra', function () {
    return view('portfolio');
});



//Category 
Route::get('/tutorial/html', 'HalamanController@tutorialhtml');

Route::get('/tutorial/css', 'HalamanController@tutorialcss');

Route::get('/tutorial/javascript', function () {
    return view('category/javascript');
});

Route::get('/tutorial/bootstrap', function () {
    return view('category/bootstrap');
});

Route::get('/tutorial/semua-tutorial', function () {
    return view('category/semua-tutorial');
});



//Footer
Route::get('/about', function () {
    return view('footer/about');
});

Route::get('/contact', function () {
    return view('footer/contact');
});

Route::get('/disclaimer', function () {
    return view('footer/disclaimer');
});

Route::get('/privacy-policy', function () {
    return view('footer/privacy-policy');
});

Route::get('/terms-and-conditions', function () {
    return view('footer/terms-and-conditions');
});



Route::group(['prefix'], function () {
    Route::get('/segel/tutorial', 'adminController@tutorial')->name('segel');
    Route::get('/segel/teknologi', 'adminController@teknologi')->name('segel');
    Route::get('/sosmed', 'adminController@sosmed');

    //TUTORIAL
        // Post CRUD
        Route::resource('tutorial', 'TutorialController');
        Route::get('/segel/tutorial/publish/{id}', 'TutorialController@publish');
        //Hapus Crud 
        Route::get('/segel/tutorial/hapus/{id}', 'TutorialController@delete_tutorial');
        //Recyle 
        Route::get('/segel/tutorial/trash', 'TutorialController@trash_tutorial');
        Route::get('/segel/tutorial/kembalikan/{id}', 'TutorialController@kembalikan_tutorial');
        Route::get('/segel/tutorial/kembalikan_semua', 'TutorialController@kembalikan_semua_tutorial');
        Route::get('/segel/tutorial/hapus_permanen/{id}', 'TutorialController@hapus_permanen_tutorial');
        Route::get('/segel/tutorial/hapus_permanen_semua', 'TutorialController@hapus_permanen_semua_tutorial');

    //TEKNOLOGI
        // Post CRUD
        Route::resource('tech', 'TeknologiController');
        Route::get('/segel/teknologi/publish/{id}', 'TeknologiController@publish');
        //Hapus Crud 
        Route::get('/segel/teknologi/hapus/{id}', 'TeknologiController@delete_teknologi');
        //Recyle 
        Route::get('/segel/teknologi/trash', 'TeknologiController@trash_teknologi');
        Route::get('/segel/teknologi/kembalikan/{id}', 'TeknologiController@kembalikan_teknologi');
        Route::get('/segel/teknologi/kembalikan_semua', 'TeknologiController@kembalikan_semua_teknologi');
        Route::get('/segel/teknologi/hapus_permanen/{id}', 'TeknologiController@hapus_permanen_teknologi');
        Route::get('/segel/teknologi/hapus_permanen_semua', 'TeknologiController@hapus_permanen_semua_teknologi');    
});



Route::group(['middleware' => ['auth']], function () {
    ///// Halaman Default Crud 
    Route::get('/segel/category', 'CategoryController@category');

    // Tutorial
            //Tambah Crud
            Route::get('/segel/category/tambah', 'CategoryController@tambah_category');
            Route::post('/segel/category/store', 'CategoryController@store_category');
            //Edit Crud
            Route::get('/segel/category/edit/{id}', 'CategoryController@edit_category');
            //Update Crud
            Route::put('/segel/category/update/{id}', 'CategoryController@update_category');
            //Hapus Crud 
            Route::get('/segel/category/hapus/{id}', 'CategoryController@delete_category');
});