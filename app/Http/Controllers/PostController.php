<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all(); //aqui guardamos todos los registros que existan
        dd($posts); //muestra en formato j.son todos los registros que traiga la variable
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $host)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $host)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $host)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $host)
    {
        //
    }
}
