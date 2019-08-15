<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Novel;  

class NovelController extends Controller
{
    public function index()
    {
        $data_novel = Novel::latest('id')->paginate(5);
        return view('author.index', ['data_novel' => $data_novel]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpeg,jpg,png,svg|max:2048',
        ]);

        // $novel = Novel::create($request->all());
        $novel = new Novel;
        $novel->nama = $request->nama;
        $novel->slug = str_slug($novel->nama);
        $novel->tipe = $request->tipe;
        $novel->penulis = $request->penulis;
        $novel->sinopsis = $request->sinopsis;
        $novel->status = $request->status;
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $destinationPath = public_path('images/post');
            $file->move($destinationPath, $fileName);
            $novel->gambar = $fileName;
        }

        $novel->save();
        // if($request->hasFile('gambar')){
        //     $request->file('gambar')->move('images/post/', $request->file('gambar')->getClientOriginalName());
        //     $novel->gambar = $request->file('gambar')->getClientOriginalName();
        //     $novel->save(); 
        // }
        return redirect('/novel')->with('success', 'Data Berhasil di Input');
    }

    public function edit($id)
    {
        $novel = Novel::find($id);
        return view('author.edit', ['novel' => $novel]);
    }

    public function update(Request $request, $id)
    {
        $novel = Novel::find($id);
        $novel->update($request->all());
        if($request->hasFile('gambar')){
            $request->file('gambar')->move('images/post/', $request->file('gambar')->getClientOriginalName());
            $novel->gambar = $request->file('gambar')->getClientOriginalName();
            $novel->save(); 
        }
        return redirect('/novel')->with('success', 'Data Berhasil di Update');
    }

    public function destroy($id)
    {
        $novel = Novel::find($id);
        $novel->delete();
        return redirect('/novel')->with('success', 'Data Berhasil di Hapus');
    }
}
