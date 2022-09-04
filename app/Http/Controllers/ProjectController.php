<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class Projectcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::latest()->get();
        
        return view('home',compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
        Movie::create([
            'moviename' => $request->moviename,
            'releasedate' => $request->releasedate,
            'productioncompany' => $request->productioncompany,
            'movietime' => $request->movietime,
            'actor' => $request->actor,
            'actress' => $request->actress,
            'industry' => $request->industry,
            'description' => $request->description,
                         
        ]);
        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$movies = Movie::latest()->get();
        //return view('details',compact('movies'));
        $movie = Movie::find($id);
        return view ('detail',compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie = Movie::find($id);
        
        return view('edit',compact('movie')); 
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
        $movie = Movie::find($id);
        $movie->update([
            'moviename' => $request->moviename,
            'releasedate' => $request->releasedate,
            'productioncompany' => $request->productioncompany,
            'movietime' => $request->movietime,
            'actor' => $request->actor,
            'actress' => $request->actress,
            'industry' => $request->industry,
            'description' => $request->description,
        ]);
        // Movie::update([
        //     'moviename' => $request->moviename,
        //     'releasedate' => $request->releasedate,
        //     'productioncompany' => $request->productioncompany,
        //     'movietime' => $request->movietime,
        //     'actor' => $request->actor,
        //     'actress' => $request->actress,
        //     'industry' => $request->industry,
        //     'description' => $request->description,
                         
        // ]);
        return redirect()->route('index');
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
