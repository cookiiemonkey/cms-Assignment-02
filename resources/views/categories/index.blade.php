@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categories</div>

                <div class="card-body">
                    <ul class="list-group">
                        @foreach ($categories as $category)
                            <li class="list-group-item">
                                {{$category->name}}
                                
                                <a href="/categories/{{$category->id}}/delete" class="btn btn-danger float-right mx-2">Delete</a>
                                <a href="/categories/{{$category->id}}/edit" class="btn btn-primary float-right">Edit</a>

                            </li>
                        @endforeach
                    </ul>
                    
                    <a href="/categories/new" class="btn btn-primary my-2">Add Category</a>
                </div>

            </div>
            

        </div>
    </div>
</div>
    
@endsection