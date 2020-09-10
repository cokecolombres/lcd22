<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Post;
use App\User;
use App\Tag;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories= Category::orderBy('name', 'ASC')->paginate(10);
        $last_posts= Post::orderBy('created_at', 'DESC')->with('category')->paginate(12);
        $last_categories= Category::orderBy('created_at', 'DESC')->paginate(10);
        return view('welcome', compact('categories', 'last_posts', 'last_categories'));
    //    return view('front.category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Funcion para mostrar la
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();
        $user_post = Post::where('user_id',$post->user_id)->where('id', '!=', $post->id)->paginate(4);
        $related_posts = Post::where('category_id',$post->category_id)->where('id','!=',$post->id)->paginate(6);
        return view('front.blog.show', compact('post','user_post','related_posts'));
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
    }
}
