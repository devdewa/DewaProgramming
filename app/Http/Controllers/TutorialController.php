<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

use App\Tutorial;
use App\Category;

class TutorialController extends Controller
{

    public function category(){
    	return $this->hasMany('App\Category');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/tutorial/crud/tutorial_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $post = Tutorial::create([
            'user_id' => $request->user_id,
            'judul' => $request->judul,
            'slug' => str_slug($request->judul, '-'),
            'category' => $request->category,
            'slug_tag' => str_slug($request->category, '-'),
            'deskripsi' => $request->deskripsi,
            'body' => $request->body,
        ]);
        if($request->hasFile('photo'))
        {
            $request->file('photo')->move('images/post_images/', $request->file('photo')->getClientOriginalName());
            $post->photo = $request->file('photo')->getClientOriginalName();
            $post->save();
        }

        if(isset($_POST['publish'])){
            $post->isPublished = 1;
            $post->save();
        }
        Alert::success('Berhasil!', 'Data berhasil ditambahkan');
        return redirect('/segel/tutorial');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $tutorial = Tutorial::where('slug', $slug)->firstOrFail();
        $html = Tutorial::where('category_id', 1)->latest()->paginate(5);
        $css = Tutorial::where('category_id', 2)->latest()->paginate(5);
        $prev = Tutorial::where('id', '<', $tutorial->id)->orderBy('id','desc')->first();
        $next = Tutorial::where('id', '>', $tutorial->id)->orderBy('id')->first();
        return view('tutorial_show', compact('tutorial', 'html', 'css', 'prev', 'next'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tutorial = Tutorial::find($id);
        return view('admin/tutorial/crud/tutorial_edit', compact('tutorial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = Tutorial::find($id);
        $update->update($request->all());
        Alert::success('Berhasil!', 'Data berhasil diperbarui');
        return redirect('/segel/tutorial');
    }
    
    public function delete_tutorial($id)
    {
        $tutorial = Tutorial::find($id);
        $tutorial->delete();
        Alert::info('Berhasil!', 'Data disimpan di Trash');
        return redirect('/segel/tutorial');
    }

    public function trash_tutorial()
    {
        $tutorial = Tutorial::onlyTrashed()->get();
        return view('admin/tutorial/crud/tutorial_trash', ['tutorial' => $tutorial]);
    }

    public function kembalikan_tutorial($id)
    {
        $tutorial = Tutorial::onlyTrashed()->where('id',$id);
        $tutorial->restore();
        Alert::success('Berhasil!', 'Data berhasil dikembalikan');
        return redirect('/segel/tutorial/trash');
    }

    public function kembalikan_semua_tutorial()
    {       
        $tutorial = Tutorial::onlyTrashed();
        $tutorial->restore();
        Alert::success('Berhasil!', 'Semua Data berhasil dikembalikan');
        return redirect('/segel/tutorial/trash');
    }

    public function hapus_permanen_tutorial($id)
    {
        $tutorial = Tutorial::onlyTrashed()->where('id',$id);
        $tutorial->forceDelete();
        Alert::success('Berhasil!', 'Data berhasil dihapus');
        return redirect('/segel/tutorial/trash');
    }

    public function hapus_permanen_semua_tutorial()
    {
        $tutorial = Tutorial::onlyTrashed();
        $tutorial->forceDelete();
        Alert::success('Berhasil!', 'Semua Data berhasil dihapus');
        return redirect('/segel/tutorial/trash');
    }

    public function publish($id){
        $post = Tutorial::find($id);

        if($post->isPublished == 0){
            $post->update(['isPublished' => 1]);
        }else{
            $post->update(['isPublished' => 0]);
        }
        return redirect()->back();
    }

}
