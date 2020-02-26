<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\PostCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::paginate(15);
        return view('pages.admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $post_categories = PostCategory::all();
        return view('pages.admin.posts.create', compact('post_categories'));
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
        $input = $request->except(['content_fr', 'content_en']);
        foreach ($input as $key => $value) {
            $input[$key] = htmlspecialchars($value);
        }
        $input['content_fr'] = $request->content_fr;
        $input['content_en'] = $request->content_en;
        $input['user_id'] = Auth::id();
        $post = Post::create($input);
        Session::flash('created_post', 'Le post ' . $post->title_fr . ' a été ajouté.');
        return redirect(route('admin.posts.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        $post = Post::findOrFail($id);
        return view('pages.admin.posts.edit', compact('post'));
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
        $post = Post::findOrFail($id);
        $input = $request->except(['content_fr', 'content_en']);
        foreach ($input as $key => $value) {
            $input[$key] = htmlspecialchars($value);
        }
        $input['content_fr'] = $request->content_fr;
        $input['content_en'] = $request->content_en;
        $post->update($input);
        Session::flash('updated_post', 'Le poste ' . $post->title_fr . ' a été modifié.');
        return redirect(route('admin.posts.edit', $id));
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
        $post = Post::findOrFail($id);
        $post->delete();
        Session::flash('deleted_post', 'Le poste ' . $post->title_fr . ' a été supprimé.');
        return redirect(route('admin.posts.index'));
    }
}
