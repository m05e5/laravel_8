<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

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
    public function editPost($id)
    {
        $post = DB::table('posts')->where('id',$id)->first();
        return view('edit-post',compact('post'));

    }
    public function updatePost(Request $request)
    {
        DB::table('posts')->where('id',$request->id)->update([
            'title' => $request->title,
            'body' => $request->body
        ]);
        return back()->with('post_updated','Post has been updatesd successfully');
    }
    public function innerJoinClause()
    {
        $request =  DB::table('users')
            ->join('posts', 'users.id', '=', 'posts.user_id') 
            ->select('users.name', 'posts.title', 'posts.body')
            ->get();
        return $request;
    }

    public function leftJoinClause()
    {
        $result = DB::table('users')
            ->leftjoin('posts', 'users.id', '=', 'posts.user_id')
            ->get();
        return $result;
    }
    public function rightJoinClause()
    {
        $result = DB::table('users')
        ->rightjoin('posts', 'users.id', '=', 'posts.user_id')
        ->get();
        return $result;

    }
    public function getAllPostUsingModel()
    {
        $posts = Post::all();
        return $posts;
    }
   
}
