<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

use App\Teknologi;
use App\Tutorial;

class TeknologiController extends Controller
{

    public function create()
    {
        return view('admin/teknologi_crud/teknologi_create');
    }
    
    public function store(Request $request)
    {   
        $post = Teknologi::create([
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
        return redirect('/segel/teknologi');
    }

    public function show($slug)
    {   
        $teknologi = Teknologi::where('slug', $slug)->firstOrFail();
        $prev = Teknologi::where('id', '<', $teknologi->id)->orderBy('id','desc')->first();
        $next = Teknologi::where('id', '>', $teknologi->id)->orderBy('id')->first();
        $berita = Teknologi::orderBy('id', 'desc')->take(3)->get();
        $tutorial = Tutorial::orderBy('id', 'desc')->take(5)->get();
        $lainnya = Teknologi::orderBy('id', 'desc')->take(10)->get();
        return view('teknologi_show', compact('teknologi', 'prev', 'next', 'berita', 'tutorial', 'lainnya'));
    }

    public function edit($id)
    {
        $teknologi = Teknologi::find($id);
        return view('admin/teknologi_crud/teknologi_edit', compact('teknologi'));
    }

    public function update(Request $request, $id)
    {
        $update = Teknologi::find($id);
        $update->update($request->all());
        Alert::success('Berhasil!', 'Data berhasil diperbarui');
        return redirect('/segel/teknologi');
    }

    public function delete_teknologi($id)
    {
        $teknologi = Teknologi::find($id);
        $teknologi->delete();
        Alert::info('Berhasil!', 'Data disimpan di Trash');
        return redirect('/segel/teknologi');
    }

    public function trash_teknologi()
    {
        $teknologi = Teknologi::onlyTrashed()->get();
        return view('admin/teknologi_crud/teknologi_trash', ['teknologi' => $teknologi]);
    }

    public function kembalikan_teknologi($id)
    {
        $teknologi = Teknologi::onlyTrashed()->where('id',$id);
        $teknologi->restore();
        Alert::success('Berhasil!', 'Data berhasil dikembalikan');
        return redirect('/segel/teknologi/trash');
    }

    public function kembalikan_semua_teknologi()
    {       
        $teknologi = Teknologi::onlyTrashed();
        $teknologi->restore();
        Alert::success('Berhasil!', 'Semua Data berhasil dikembalikan');
        return redirect('/segel/teknologi/trash');
    }

    public function hapus_permanen_teknologi($id)
    {
        $teknologi = Teknologi::onlyTrashed()->where('id',$id);
        $teknologi->forceDelete();
        Alert::success('Berhasil!', 'Data berhasil dihapus');
        return redirect('/segel/teknologi/trash');
    }

    public function hapus_permanen_semua_teknologi()
    {
        $teknologi = Teknologi::onlyTrashed();
        $teknologi->forceDelete();
        Alert::success('Berhasil!', 'Semua Data berhasil dihapus');
        return redirect('/segel/teknologi/trash');
    }

    public function publish($id){
        $post = Teknologi::find($id);

        if($post->isPublished == 0){
            $post->update(['isPublished' => 1]);
        }else{
            $post->update(['isPublished' => 0]);
        }
        return redirect()->back();
    }

}
