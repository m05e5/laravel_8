<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function getAllPost()
    {
        $posts = DB::table('posts')->get();
        return view('posts', compact('posts'));
    }
    public function  addPost()
    {
        return view('add-post');
    }
    public function addPostSubmit(Request $request)
    {
        DB::table('posts')->insert([
            'title' => $request->title,
            'body' => $request->body
            
        ]);
        return back()->with('post_created','post has been created succesfully!');
    }
    public function getPostById($id)
    {
        $post = DB::table('posts')->where('id',$id)->first();
        return view('single-post',compact('post'));
    }
    public function deletePost($id)
    {
        DB::table('posts')->where('id',$id)->delete();
        return back()->with('post_deleted','Post has been deleted successfully');
    }
   
}
