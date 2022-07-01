<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

use App\Tutorial;
use App\Teknologi;
use App\User;   

class HalamanController extends Controller
{
    public function tutorial(){
        $tutorials = Tutorial::where('isPublished', 1)->latest()->paginate(12);
        return view('index', compact('tutorials'));
    }

    public function youtube(){
        return view('youtube');
    }

    public function teknologi(){
        $berita = Teknologi::orderBy('id', 'desc')->take(3)->get();
        $postbaru = Teknologi::orderBy('id', 'desc')->take(1)->get();
        $teknologi = Teknologi::where('isPublished', 1)->latest()->paginate(8);
        return view('teknologi', compact('teknologi', 'postbaru', 'berita'));
    }

    public function teknologi_cari(Request $request){
        $berita = Teknologi::orderBy('id', 'desc')->take(1)->get();
        $tutorial = Tutorial::orderBy('id', 'desc')->take(5)->get();
        $lainnya = Teknologi::orderBy('id', 'desc')->take(10)->get();
        if($request->has('search')){
            $teknologi = Teknologi::where('judul', 'LIKE', '%'.$request->search.'%')->orderBy('isPublished', 'asc')->paginate(8);
        }else{
            $teknologi = Teknologi::where('isPublished', 1)->latest()->paginate(8);
        }
        return view('teknologi-cari', compact('teknologi', 'berita', 'tutorial', 'lainnya'));
    }

    //Category HTML
    public function tutorialhtml()
    {
    	$html = Tutorial::where('category_id', 1)->latest()->paginate(8);
    	return view('category/html', ['html' => $html]);
    }

    //Category CSS
    public function tutorialcss()
    {
    	$css = Tutorial::where('category_id', 2)->latest()->paginate(8);
    	return view('category/css', ['css' => $css]);
    }
    
}
