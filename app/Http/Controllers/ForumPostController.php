<?php

namespace App\Http\Controllers;

use App\Models\ForumPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $posts = ForumPost::all();
        return view('forum.index', ['posts'=>$posts]);

        // if(Auth::check()){
        //     $posts = ForumPost::all();
        //     return view('forum.index', ['posts'=>$posts]);
        // }else{
        //     return redirect(route('login'));
        // }
        
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
            'title_fr' => 'nullable|string|max:100',
            'body' => 'required|string',
            'body_fr' => 'nullable|string'
        ]);
        //return $request;
        //insert into forum_posts(title, body) values (?, ?);
        //return $newData = select * from forum_post where id = lastInsertedId
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
        //$forumPost = SELECT * FROM `forum_posts` WHERE id = $forumPost;
        //$stmt = $connex->prepare(SELECT * FROM `forum_posts` WHERE id = ?)
        //$stmt->execute(array(10));
        //$stmt-fetch();
        /*   $query = ForumPost::select()
                ->join('users', 'user_id', '=','users.id')
                ->where('forum_posts.id', 1)
                //->orderby('title')
                ->get();*/
                
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
        $request->validate([
            'title' => 'required|string|max:100',
            'title_fr' => 'nullable|string|max:100',
            'body' => 'required|string',
            'body_fr' => 'nullable|string'
        ]);
        //return $request;
        //return $forumPost;
       
        $forumPost->update([
            'title' => $request->title,
            'body' => $request->body,
            'title_fr' => $request->title_fr,
            'body_fr' => $request->body_fr,
        ]);
        
        return redirect(route('forum.show', $forumPost->id))->withSuccess('Donnée mise à jour');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ForumPost  $forumPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(ForumPost $forumPost)
    {
        //return $forumPost;
        $forumPost->delete();

        return redirect(route('forum.index'))->withSuccess('Donnée effacée');
    }
    public function query(){
    //SELECT
    //select * from forum_posts;
       // $query = ForumPost::all();
       // $query = $query[0];

       //$query = ForumPost::select()->get();
       //$query = ForumPost::select()->first();

       /*$query = ForumPost::select('title', 'body')
                ->orderby('title', 'desc')
                ->get();
        */

        //WHERE
        //SELECT * FROM forum_posts WHERE id = 1;

        /*$query = ForumPost::select()
                ->where('id','=', 1)
                ->get();
         afficher la donnee = $query[0]->id
        */
        /*$query = ForumPost::select()
                ->where('id','=', 1)
                ->first();
        afficher la donnee = $query->id
        */
        /*
        WHERE PK
        $query = ForumPost::find(1);
        afficher la donnee = $query->id
        */
        /*
        $query = ForumPost::select()
                ->where('user_id','!=', 1)
                ->get();
        */
        //AND
        /*$query = ForumPost::select()
                ->where('user_id','!=', 1)
                ->where('title', 'Amet aliquam sequi aut et.')
                ->get();
        */
        /*
        $query = ForumPost::select()
                ->where('user_id','!=', 1)
                ->where('title', 'like','Am%')
                ->get();
        */
        //OR
        /*$query = ForumPost::select()
                ->where('user_id', 1)
                ->orwhere('id',2)
                ->get();
        */

        //JOIN INNER
        $query = ForumPost::select()
                ->join('users', 'user_id', '=','users.id')
                ->where('forum_posts.id', 1)
                //->orderby('title')
                ->get();
        
        //OUTER INNER   
        /*$query = ForumPost::select()
            ->rightJoin('users', 'user_id', '=','users.id')
            ->get();
        */

        //Aggregation function : Max, Min, Avg, Count, Sum

        /*$query = ForumPost::count('id');*/

        /*$query = ForumPost::select()
        ->where('user_id', 1)
        ->count();
        */

        //raw queries

        // SELECT count(*) as forums, user_id FROM forum_posts group by user_id

        /*$query = ForumPost::select(DB::raw('count(*) as forums'), 'user_id')
                ->groupBy('user_id')
                ->get();
        */

        return $query;
    }

    public function page(){
        $forumPost = ForumPost::Select()
                    ->paginate(5);

        return view('forum.page', ['forumPosts' => $forumPost]);
    }

    // public function showPDF(ForumPost $forumPost){
    //     //return $forumPost;

    //     $pdf = PDF::loadView('forum.show-pdf', ['forumPost' => $forumPost]);
    //     //return $pdf->download('pdfname.pdf');
    //     return $pdf->stream('pdfname.pdf');
    // }

}

