<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    public function getAllPost()
    {
        $response=Http::get('https://jsonplaceholder.typicode.com/posts');
        return $response->json();
    }
    public function getPostById($id)
    {
        $post = Http::get('https://jsonplaceholder.typicode.com/posts/'.$id);
        return $post->json();
    }
    public function getPostByUserId($userid)
    {
        $call = Http::get('https://jsonplaceholder.typicode.com/posts/'.$userid);
        return $call->json();
    }
    public function addPost(){
        $post = Http::post('https://jsonplaceholder.typicode.com/posts/',[
            'userId' => 1,
            'title' => 'this is my new post',
            'body' => 'here i am saying that SNK S4 is bizzar'
        ]);
        return $post->json();
    }

    public function updatePost()
    {
        $response = Http::put('https://jsonplaceholder.typicode.com/posts/1',[
            'title' => 'Update title',
            'body' => 'Updated descripyion'
        ]);
        return $response->json();
    }
    public function deletePost($id)
    {
        $response = Http::delete('https://jsonplaceholder.typicode.com/posts/',$id);
        return $response->json();
    }
}
