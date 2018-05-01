@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Create New Category
                    <a href="{{ route('category.index') }}" class="btn btn-primary float-right">
                       <i class="fa fa-arrow-left"></i> Back
                    </a>
                </div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('category.store') }}" id="create_category">
                        @csrf

                        @include('categories.form')
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary" id="form_submit">
                                    <i class="fa fa-check" id="submit"></i>
                                    <i class="fa fa-spin fa-spinner hidden" id="loading"></i>
                                    {{ __('Save') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('category.index') }}">
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
    <script>
        $(document).ready(function(){
            
            $('#create_category').submit(function(e) {
            // e.preventDefault();
            $('button#form_submit').attr('disabled',true);
            $('#submit').addClass('hidden');
            $('#loading').removeClass('hidden');
            setTimeout(function(){
                return true;
            }, 1000)
            // return true;
            // $(this).submit();
        });
        });
    </script>
@endsection
