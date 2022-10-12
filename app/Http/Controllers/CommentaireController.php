<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorecommentaireRequest;
use App\Http\Requests\UpdatecommentaireRequest;
use App\Models\commentaire;

class CommentaireController extends Controller
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
     * @param  \App\Http\Requests\StorecommentaireRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecommentaireRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function show(commentaire $commentaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function edit(commentaire $commentaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecommentaireRequest  $request
     * @param  \App\Models\commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecommentaireRequest $request, commentaire $commentaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\commentaire  $commentaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(commentaire $commentaire)
    {
        //
    }
}
