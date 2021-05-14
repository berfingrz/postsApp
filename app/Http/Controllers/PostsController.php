<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function getAllPosts()
    {
        $posts = DB::table('posts')->get();
        return view('posts',compact('posts'));
    }

    public function addPost()
    {
        return view('add-post');
    }

    public function addPostSubmit(Request $req)
    {
        DB::table('posts')->insert([
            'name' => $req->title,
            'post' => $req->post
        ]);

        return back()->with('post_created','Post is created successfully...');
    }

    public function getPostById($id)
    {
        $post = DB::table('posts')->where('id',$id)->first();
        return view('single-post',compact('post'));
    }

    public function deletePost($id)
    {
        DB::table('posts')->where('id', $id)->delete();
        return back()->with('post_deleted','Post is deleted successfully...');
    }

    public function editPost($id)
    {
        $post = DB::table('posts')->where('id',$id)->first();
        return view('edit-post', compact('post'));
    }

    public function updatePostSubmit(Request $req)
    {
        DB::table('posts')->where('id',$req->id)->update([
            'name' => $req->title,
            'post' => $req->post
        ]);
        return back()->with('post_updated','Post is updated successfully...');
    }
}
