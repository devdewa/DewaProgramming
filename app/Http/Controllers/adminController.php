<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Tutorial;
use App\Teknologi;
use App\User;

class adminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function tutorial(Request $request){
        if($request->has('search')){
            $tutorials = Tutorial::where('user_id', Auth::user()->id)->where('judul', 'LIKE', '%'.$request->search.'%')->orderBy('isPublished', 'asc')->paginate(8);
        }else{
            $tutorials = Tutorial::where('user_id', Auth::user()->id)->orderBy('isPublished', 'asc')->paginate(5);
        }
        return view('admin.home', compact('tutorials'));
    }

    public function teknologi(Request $request){
        if($request->has('search')){
            $teknologi = Teknologi::where('user_id', Auth::user()->id)->where('judul', 'LIKE', '%'.$request->search.'%')->orderBy('isPublished', 'asc')->paginate(8);
        }else{
            $teknologi = Teknologi::where('user_id', Auth::user()->id)->orderBy('isPublished', 'asc')->paginate(5);
        }
        return view('admin.teknologi', compact('teknologi'));
    }

    public function sosmed(){
        return view('admin.sosmed');
    }
    
}
