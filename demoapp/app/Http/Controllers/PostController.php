<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function viewSinglePost(Post $post){
        return view('single-post',['post'=>$post]);
    }
    public function showCreateForm(){
        return view('create-post');
    }
    public function storeNewForm(Request $request){
        $incomingFields = $request->validate([
            'title'=>'required',
            'body'=>'required',
        ]);
        $incomingFields['title']=strip_tags($incomingFields['title']);
        $incomingFields['body']=strip_tags($incomingFields['body']);
        $incomingFields['user_id']=auth()->id();

        $newPost=Post::create($incomingFields); //Laravel will make the SQL statement to write the incoming fields to the actual database
        return redirect("/post/{$newPost->id}")->with('success', "Your new post is now visible");
    }
}
