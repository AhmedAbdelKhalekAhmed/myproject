<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts= post::all();
        $posts= post::orderBy('created_at','decs')->paginate(3);
        return view('posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $post= new \App\Post;
        $post->subject=$request->get('subject');
        $post->firstname=$request->get('firstname');
        $post->lastname=$request->get('lastname');
        $post->body=$request->get('body');
        
        $post->save();
        
        return redirect('posts')->with('success', 'Information has been added');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post= post::find($id);
        return view('posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post = \App\Post::find($id);
        return view('posts.edit')->with('post',$post);;
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
        //
        $post=  \App\Post::find($id);
        $post->subject=$request->get('subject');
        $post->firstname=$request->get('firstname');
        $post->lastname=$request->get('lastname');
        $post->body=$request->get('body');
        
        $post->save();
        
        return redirect('posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post = \App\Post::find($id);
        $post->delete();
        return redirect('posts')->with('success','Information has been  deleted');
    }
}
