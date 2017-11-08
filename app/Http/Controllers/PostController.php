<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //Adds a single post
    public  function addPost(Request $request) {
        var_dump($request->post_type);
        if($request->post_type == 'text'){
            DB::table('posts')->insert(
                ['created_at' => Carbon::now()->format('Y-m-d H:i:s'),'type' => 'text','title' => $request->title, 'body' => $request->body]
            );
        }
        if($request->post_type == 'video'){
            DB::table('posts')->insert(
                ['created_at' => Carbon::now()->format('Y-m-d H:i:s'),'type' => 'video','title' => $request->title, 'video_url' => $request->video_url]
            );
        }
        if($request->post_type == 'video'){
            DB::table('posts')->insert(
                ['created_at' => Carbon::now()->format('Y-m-d H:i:s'),'type' => 'picture','title' => $request->title, 'image_path' => '//path']
            );
        }

        return redirect('/');
    }

    //Gets multiple posts
    public  function getPosts() {
        $posts = DB::table('posts')->get();
        return view('posts')->with('posts', $posts);
    }
}
