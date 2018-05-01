@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Articles
                        <a href="{{ route('article.create') }}" class="btn btn-primary float-right"> + Add new</a>
                    </h4>
                    
                </div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Arabic Headline</th>
                          <th scope="col">English Headline</th>
                          <th scope="col">French Headline</th>
                          <th scope="col" class="text-right">Actions</th>
                        </tr>
                      </thead>
                        <tbody>
                        @if ($articles->count()) 
                            @foreach($articles as $article)
                                <tr>    
                                    <td>
                                        {{ $article->id }}
                                    </td>
                                    <td>
                                        {{ $article->headline_ar }}
                                    </td>
                                    <td>
                                        {{ $article->headline_en ?? '-' }}
                                    </td>
                                    <td>
                                        {{ $article->headline_fr ?? '-'}}
                                    </td>
                                    <td class="text-right">
                                        <a href="{{ route('article.edit',['id' => $article->id ]) }}" class="btn btn-sm btn-warning">
                                        <i class="fa fa-edit"></i> edit
                                        </a>
                                        <form method="post" action="{{ route('article.destroy',['id' => $article->id ]) }} ">
                                            @method("DELETE")
                                            @csrf
                                        <button class="btn btn-sm btn-danger" type="submit">
                                            <i class="fa fa-trash"></i> delete
                                        </button>
                                        
                                        </form>
                                    </td>
                                </tr>
                            @endforeach 
                        @else 
                            <tr>
                                <td colspan="5" class="text-center">
                                    No Articles
                                </td>
                            </tr>
                        @endif
                        </tbody>
                    </table>
                    {{ $articles->render() }}
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection
