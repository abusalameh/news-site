<?php

namespace News\Http\Controllers;

use News\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::paginate(10);

        return view('categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name_ar' => 'required|min:3',
            'name_en' => 'required|min:3',
            'name_fr' => 'required|min:3',
        ]);

        $category = Category::create($request->only(['name_ar','name_en','name_fr']));
        $request->session()->flash('status', 'Saved successfully');

        return redirect()->route('category.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \News\Category  $Category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Category::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \News\Category  $Category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category =  Category::findOrFail($id);
        return view('categories.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \News\Category  $Category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          $this->validate($request,[
            'name_ar' => 'required|min:3',
            'name_en' => 'required|min:3',
            'name_fr' => 'required|min:3',
          ]);

          $category = Category::findOrFail($id);

          $category->update($request->only(['name_ar', 'name_en','name_fr']));
          $request->session()->flash('status', 'Record Updated successfully!');
          return redirect()->route('category.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \News\Category  $Category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        if ($category->articles->count()) {
            $category->articles->each->delete();
        }
        $category->delete();
        $request->session()->flash('status', 'Record Deleted successfully!');
        return redirect()->route('category.index');

    }
}
