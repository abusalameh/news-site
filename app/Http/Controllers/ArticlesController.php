<?php

namespace News\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use News\Article;
use News\Category;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::paginate(10);
        
        return view('articles.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $languages = ['Arabic', 'English', 'French'];
        return view('articles.create',compact('categories','languages'));
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
            'headline_ar' => 'required|min:10',
            'text_ar' => 'required|min:10',
            'image' => 'required|file',
            'state' => 'required',
            'category_id' => 'required|',
        ]);
        
        $article = new Article;
        $article->headline_ar = $request->input('headline_ar');
        $article->headline_en = $request->input('headline_en',null);
        $article->headline_fr = $request->input('headline_fr',null);
        $article->summary_ar = $request->input('summary_ar',null);
        $article->summary_en = $request->input('summary_en',null);
        $article->summary_fr = $request->input('summary_fr',null);
        $article->text_ar = $request->input('text_ar');
        $article->text_en = $request->input('text_en',null);
        $article->text_fr = $request->input('text_fr',null);
        $article->deleted_at = $request->input('deleted_at',null);
        $article->state = $request->input('state');
        $article->category_id = $request->input('category_id');
        $article->author_id = auth()->id();
        if ($request->hasFile('image')) {
                $imageName = time().'.'.request()->image->getClientOriginalExtension();
                request()->image->move(public_path('uploads'), $imageName);
                $article->image =  $imageName;
        } else {
            $article->image = null;
        }
        if ($article->save()) {
            

            $request->session()->flash('status', 'Article Created Successfully!');
            return redirect()->route('article.index');    
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \News\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \News\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        $categories = Category::all();
        $languages = ['Arabic', 'English', 'French'];
        return view('articles.edit',compact('article','categories','languages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \News\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'headline_ar' => 'required|min:10',
            'text_ar' => 'required|min:10',
            'image' => 'file',
            'state' => 'required',
            'category_id' => 'required',
        ]);
        
        $article = Article::findOrFail($id);
        $article->headline_ar = $request->input('headline_ar');
        $article->headline_en = $request->input('headline_en',null);
        $article->headline_fr = $request->input('headline_fr',null);
        $article->summary_ar = $request->input('summary_ar',null);
        $article->summary_en = $request->input('summary_en',null);
        $article->summary_fr = $request->input('summary_fr',null);
        $article->text_ar = $request->input('text_ar');
        $article->text_en = $request->input('text_en',null);
        $article->text_fr = $request->input('text_fr',null);
        $article->deleted_at = $request->input('deleted_at',null);
        $article->state = $request->input('state');
        $article->category_id = $request->input('category_id');
        $article->author_id = auth()->id();
        if ($request->hasFile('image')) {
                $imageName = time().'.'.request()->image->getClientOriginalExtension();
                request()->image->move(public_path('uploads'), $imageName);
                $article->image =  $imageName;
        } else {
            $article->image = $article->image ?? null;
        }
        if ($article->save()) {
            $request->session()->flash('status', 'Article Updated successfully');
            return redirect()->route('article.index');    
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \News\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        if ($article->delete()) {
            $request->session()->flash('status', 'Article Deleted successfully');
            return redirect()->route('article.index');
        }
    }
}
