<?php

namespace News\Http\Controllers;

use Illuminate\Http\Request;
use News\Category;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $breaking_news = [
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse, ipsum!',
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero est minus consequatur ullam ex obcaecati non voluptatibus. At, corrupti minus.',
            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta quos a veritatis, explicabo assumenda debitis.',
        ];
        $featured = Category::all();
        
        return view('layouts.site',compact('breaking_news','featured'));
    }

    public function getCategory($id)
    {
        $category = Category::findOrFail($id);
        return $category->load('articles');
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
