<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$post = DB::select('SELECT * FROM posts ORDER BY crea ted_at DESC');
        //$post = Post::orderBy('title', 'desc')->get();
        //$post = Post::orderBy('title', 'desc')->paginate(1);
        $post = Post::orderBy('created_at', 'desc')->paginate(3);
        return view('posts/index')->with('posts', $post);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Loading a view in posts folder called CREATE
        return view('posts/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:5|max:50 ',
            'body' => 'required |max:50'
        ]);
       //create post
       $post = new Post;
       $post->title = $request->input('title');
       $post->body = $request->input('body');
       $post->save();

       return redirect('/blog')->with('success', 'post created successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$post = DB::select("SELECT* FROM posts WHERE id = '$id'");
        //Loading a view in posts folder called SHOW
        $post = Post::find($id);
        return view('posts/show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts/edit')->with('post', $post);
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|min:5|max:50 ',
            'body' => 'required |max:50'
        ]);
       //create post
       $post =  Post::find($id);
       $post->title = $request->input('title');
       $post->body = $request->input('body');
       $post->save();

       return redirect('/blog')->with('success', 'post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post =  Post::find($id);
        $post->delete();
        return redirect('/blog')->with('success', 'post removed');

    }
}
