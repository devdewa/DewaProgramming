<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

use App\Category;

class CategoryController extends Controller
{
    //Category
    public function category(Request $request)
    {
        $category = DB::table('category')->paginate(7);
    	return view('admin/tutorial/category/category', ['category' => $category]);
    }

    public function tambah_category()
    {
    	return view('admin/tutorial/category/category_tambah');
    }

    public function store_category(Request $request)
    {
    	$this->validate($request,[
            'category' => 'required'
    	]);
 
        category::create([
            'category' => $request->category,
            'slug' => str_slug($request->category, '-'),
    	]);
        Alert::success('Berhasil!', 'Data berhasil disimpan');
    	return redirect('/segel/category');
    }

    public function edit_category($id)
    {
        $category = category::find($id);
        return view('admin/tutorial/category/category_edit', ['category' => $category]);
    }

    public function update_category($id, Request $request)
    {
        $this->validate($request,[
            'category' => 'required'
        ]);
    
        $category = category::find($id);
        $category->category = $request->category;
        $category->slug = $request->slug;
        $category->save();
        Alert::success('Berhasil!', 'Data berhasil diperbarui');
        return redirect('/segel/category');
    }

    public function delete_category($id)
    {
        category::destroy($id);
        Alert::success('Berhasil!', 'Data berhasil dihapus');
        return redirect()->back();
    }

}
