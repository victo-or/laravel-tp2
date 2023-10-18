<?php

namespace App\Http\Controllers;

use App\Models\ForumPost;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use PDF;
//use Barryvdh\DomPDF\Facade as PDF;

class ForumPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //SELECT * FROM `forum_posts` 
        $posts = ForumPost::orderBy('created_at', 'desc')
            ->paginate(5);
        return view('forum.index', ['posts'=>$posts]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forum.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:100',
            'title_fr' => 'required|string|max:100',
            'body' => 'required|string',
            'body_fr' => 'required|string'
        ]);
 
        $newPost = ForumPost::create([
            'title' => $request->title,
            'body' => $request->body,
            'title_fr' => $request->title_fr,
            'body_fr' => $request->body_fr,
            'user_id' => Auth::user()->id
        ]);
        
        return redirect(route('forum.index'))->withSuccess(trans('lang.text_data_insert'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ForumPost  $forumPost
     * @return \Illuminate\Http\Response
     */
    public function show(ForumPost $forumPost)
    {
                
        return view('forum.show', ['forumPost' => $forumPost]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ForumPost  $forumPost
     * @return \Illuminate\Http\Response
     */
    public function edit(ForumPost $forumPost)
    {
        return view('forum.edit', ['forumPost' => $forumPost]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ForumPost  $forumPost
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ForumPost $forumPost)
    {
        // Vérifier si l'utilisateur actuel est l'auteur
        if (Auth::user()->id !== $forumPost->user_id) {
            // L'utilisateur n'est pas autorisé, renvoyez un message d'erreur ou redirigez-le.
            return redirect()->route('forum.index')->withError(trans('lang.text_not_authorized'));
        }

        $request->validate([
            'title' => 'required|string|max:100',
            'title_fr' => 'nullable|string|max:100',
            'body' => 'required|string',
            'body_fr' => 'nullable|string'
        ]);
       
        $forumPost->update([
            'title' => $request->title,
            'body' => $request->body,
            'title_fr' => $request->title_fr,
            'body_fr' => $request->body_fr,
        ]);
        
        return redirect(route('forum.show', $forumPost->id))->withSuccess(trans('lang.text_data_update'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ForumPost  $forumPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(ForumPost $forumPost)
    {
        // Vérifier si l'utilisateur actuel est l'auteur
        if (Auth::user()->id !== $forumPost->user_id) {
            // L'utilisateur n'est pas autorisé, renvoyez un message d'erreur ou redirigez-le.
            return redirect()->route('forum.index')->withError(trans('lang.text_not_authorized'));
        }
        
        //return $forumPost;
        $forumPost->delete();

        return redirect(route('forum.index'))->withSuccess(trans('lang.text_data_delete'));
    }

    public function page(){
        $forumPost = ForumPost::Select()
                    ->paginate(5);

        return view('forum.page', ['forumPosts' => $forumPost]);
    }

}

