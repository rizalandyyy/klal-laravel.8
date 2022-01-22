<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        //Non fluent
        //DB::selet(['table] => 'posts', 'where' => ['id' => 1])

        //Fluent
        //DB::table('posts')->where('id', 1)->get()

        // return view('posts.index');

        // $posts = DB::select('select * from posts where id = :id', ['id' => 1]);

        $id = 1;
        // $posts = DB::table('posts')->where('id', $id)->get();
        // $posts = DB::table('posts')->select('body')->get();
        $posts = DB::table('posts')
        // ->where('created_at', '>', now()
        // ->subDay())
        // ->orWhere('title', 'Prof.')
        // ->whereBetween('id', [1,2])
        // ->inRandomOrder()
        // ->latest()
        // ->get();
        // ->find($id)
        // ->orderBy('created_at', 'desc')
        // ->count();
        // ->first();
        // ->avg('id');
        ->where('id', '=', 2)
        // ->insert([
        //     'title' => 'Hahah',
        //     'body' => 'Body'
        // ]);
        ->update([
            'title' => 'Blar'
        ]);
        dd($posts);
    }
}
