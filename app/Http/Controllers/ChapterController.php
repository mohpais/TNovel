<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chapter;
use \App\Novel;
class ChapterController extends Controller
{
    public function show($slug)
    {
        $novel = Novel::where('slug','=', $slug)->first();
        $chapter_novel = Chapter::where('novel_id', '=', $novel->id)->latest('created_at')->paginate(5);
        return view('author.chapter.index', compact('novel'), ['chapter_novel' => $chapter_novel]);
    }

    public function post($id)
    {
        $novel = \App\Novel::find($id);
        $data = Chapter::where('novel_id', $id)->get();
        return view('author.chapter.create', compact('data', 'novel'));
    }

    public function create(Request $request)
    {   
        $chapter = new Chapter;
        $chapter->novel_id = $request->novel_id;
        $chapter->author = $request->author;
        $chapter->judul = $request->judul;
        $chapter->chapter = $request->chapter;
        $chapter->slug = str_slug($chapter->judul.'-Chapter-'.$chapter->chapter);
        $chapter->description = $request->description;

        $chapter->save();

        // $chapter =Chapter::create($request->all());
        return redirect('/novel')->with('success', 'Data Berhasil di Input');
    }

    public function edit($id)
    {
        $chapter = Chapter::find($id);
        return view('author.chapter.edit', ['chapter' => $chapter]);
    }

    public function update(Request $request, $id)
    {
        $chapter = Chapter::find($id);
        $chapter->id = $request->id;
        $chapter->novel_id = $request->novel_id;
        $chapter->author = $request->author;
        $chapter->judul = $request->judul;
        $chapter->chapter = $request->chapter;
        $chapter->slug = str_slug($chapter->judul.'-Chapter-'.$chapter->chapter);
        $chapter->description = $request->description;
        $chapter->update();
        return redirect()->back()->with('success', 'Data Berhasil di Update');
    }

    public function destroy($id)
    {
        $chapter = Chapter::find($id);
        $chapter->delete();
        return redirect('/novel')->with('success', 'Data Berhasil di Hapus');
    }
}
