<?php

namespace App\Http\Controllers;

use Hash;
use Session;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class UserController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $users = new User;
        $users->name = request('pseudo');
        $users->email = request('email');
        $users->password = Hash::make(request('mdp'));

        $users-> save();
        //dd($request);
        return view ('/inscription');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    public function login(Request $request)
    {
       //
       $name = DB::table('users')->select('id','name','email','password');
       $name = $name -> get();

       
       $request->validate([
           'name'=> 'required',
           'password'=> 'required',
        ]);
        $connexion = $request->only('name', 'password');
        if (Auth::attempt($connexion)) {
            // $name = $request->session()->all();
            $name = Auth::user();
            // return redirect()->route('accueil', compact('name'));
            // ->withSuccess('/acceuil');
            return view ('acceuil',  compact('name'));
        }
        return redirect()->back()->with([
            'message' => 'utilisateur ou mot de passe erroner'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function get_all_user()
    {
        $name = DB::table('users')->select('id','name','email','password');
        $name = $name -> get();

        return (compact('name'));
    }
}
