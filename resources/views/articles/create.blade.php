@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Create  New Article
                        <a href="{{ route('article.index') }}" class="btn btn-primary float-right">
                            <i class="fa fa-arrow-left"></i>
                            Back
                        </a>
                    </h4>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @include('articles.partials.nav',['languages' => $languages])
                    <div class="container">
                        <form class="form" method="POST" enctype="" action="{{ route('article.store') }}" >
                            @include('articles.partials.form', ['categories' => $categories])
                            <div class="form-group row mb-0">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-success" id="form_submit">
                                        <i class="fa fa-check" id="submit"></i>
                                        <i class="fa fa-spin fa-spinner hidden" id="loading"></i>
                                        {{ __('Save') }}
                                    </button>

                                    <a class="btn btn-light" href="{{ route('article.index') }}">
                                        <i class="fa fa-times"></i>
                                        {{ __('Cancel') }}
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    
@endsection
