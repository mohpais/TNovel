<?php

// use Illuminate\Support\Facades\DB;   
namespace App\Http\Controllers;
use \App\Novel;
use \App\Chapter;
use \App\Tag;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home()
    {
        $novel = Novel::orderBy('id','DESC')->take(5)->get();
        $chapter = Chapter::orderBy('id','DESC')->take(8)->get();
        return view('index', compact('chapter','novel'));
        // return view('index');
    }

    public function novel($slug)
    {
        $novel = Novel::where('slug', '=', $slug)->first();
        // echo $novel; die;
        $count = Chapter::where('novel_id',$novel->id)->count();
        $chapter = Chapter::where('novel_id',$novel->id)->orderBy('created_at', 'DESC')->get();
        return view('singleNovel',compact('novel','chapter','count'));
    }

    public function chapter($slug)
    {
        $chapter = chapter::where('slug', '=', $slug)->first();
        $getChapter = $chapter->novel_id;
        
        $prev_id = Chapter::where('id', '<', $chapter->id)->where('novel_id', '=', $getChapter)->max('id');
        $prevGet = Chapter::where('novel_id', '=', $getChapter)->where('id','=', $prev_id)->first();
        // $prev = $prevGet->slug;

        $next_id = Chapter::where('id', '>', $chapter->id)->where('novel_id', '=', $getChapter)->min('id');
        $nextGet = Chapter::where('novel_id', '=', $getChapter)->where('id','=', $next_id)->first();
        // $next = $nextGet->slug;

        return view('readNovel', ['chapter' => $chapter])->with('prevGet', $prevGet)->with('nextGet', $nextGet);
    }

    public function listNovel(Request $request)
    {
        $tag = Tag::all();
        $total = Novel::count();
        $novel = Novel::latest('created_at')->paginate(9);
        return view('list')->with('novel', $novel)->with('total', $total)->with('tag', $tag);
    }

    public function request()
    {
        return view('request');
    }
}
