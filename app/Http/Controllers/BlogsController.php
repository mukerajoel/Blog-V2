<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Comment;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs.index', ['blogs'=>$blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog = new Blog;
        $blog->title = $request->input('title');
        $blog->body = $request->input('body');
        $blog->save();

        return redirect()->route('index')->with('success','Blog created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blogs = Blog::find($id);
        
        return view('blogs.show', ['blogs'=>$blogs]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('blogs.update', ['blog' => $blog]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request, $id
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blog = Blog::find($id);
        $blog->title = $request->input('title');
        $blog->body = $request->input('body');
        $blog->save();

        return redirect()->route('b.show', $id);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function comment()
    {
        return view('blogs.c.comment');
    }

    /**
    * Comment and save the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request, $id
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function commentSave(Request $request)
   {
       //$comment = Blog::find($id);
       $comment = new Comment;
       $comment->body = $request->input('body');
      // $comment->question_id = $request->input('question_id');
       $comment->save();

       return redirect()->route('home');
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blog::destroy($id);
        return redirect()->route('index');
    }
}
