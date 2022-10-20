<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorearticleRequest;
use App\Http\Requests\UpdatearticleRequest;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorearticleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorearticleRequest $request)
    {
        //
    }

    public function article(Request $request)
    {
        //  $user = $user -> get('id');
        // $user = DB::table('users')->select('id');
        // $user = $user -> get();
         $user = Auth::user()->name;

             $article = new article;
             $article->titre = request('titre');
             $article->article = request('article');
             $article->media = request('media');
             $article->user_name = $user;
     
             $article-> save();
         return view ('article');
        // return redirect()->route('article');
    }

    public function look (Request $request)
    {
        //
        $user=Auth::user();

        $article = DB::table('articles')->select('id','titre','article','media','user_name','created_at');
        $article = $article -> get();

        return view ('article', compact('article'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatearticleRequest  $request
     * @param  \App\Models\article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatearticleRequest $request, article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(article $article)
    {
        //
    }
}
