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
                          <th scope="col">Headline</th>
                          <th scope="col">Publish Date</th>
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
                                        {{ Carbon\Carbon::now()->diffForHumans() }}                                         
                                    </td>
                                </tr>
                            @endforeach 
                        @else 
                            <tr>
                                <td colspan="4" class="text-center">
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
