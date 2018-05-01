@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Categories
                    <a href="{{ route('category.create') }}" class="btn btn-primary float-right"> 
                    <i class="fas fa-plus"></i>
                    Add new
                    </a>
                </div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" id="message">
                            <i class="fa fa-check"></i> {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Name</th>
                          <th scope="col" class="text-right">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        @if ($categories->count())
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }} </td>
                                    <td class="text-right">
                                        <a href="{{ route('category.show',['id' => $category->id ]) }}" class="btn btn-sm btn-primary">
                                        <i class="fa fa-search"></i> view
                                        </a>
                                        <a href="{{ route('category.edit',['id' => $category->id ]) }}" class="btn btn-sm btn-warning">
                                        <i class="fa fa-edit"></i> edit
                                        </a>
                                        <a href="{{ route('category.destroy',['id' => $category->id ]) }}" class="btn btn-sm btn-danger">
                                        <i class="fa fa-trash"></i> delete
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @else 
                            <tr>
                                <td colspan="3" class="text-center">
                                    No Data
                                </td>
                            </tr>
                        @endif
                      </tbody>
                    </table>
                    {{ $categories->render() }}
                </div>
            </div>
        </div>
        
    </div>
</div>
@endsection
