@extends('layouts.app')
@section('content')
    <h1>Create Post</h1>
        <form action="{{ route('posts.store') }}" method="POST" enctype = 'multipart/form-data'>
            @csrf
            <!-- Your form fields here -->
            <div class="form-group">
                {{Form::label('title','Title')}}
                {{Form::text('title','',['class' => 'form-control', 'placeholder' => 'Title'])}}
            </div>
            &nbsp;  
            <div class="form-group">
                {{Form::label('body','Body')}}
                {{Form::textarea('body','',['id' => 'article-ckeditor','class' => 'form-control', 'placeholder' => 'Body'])}}
            </div>
            <div class="form-group">
                {{Form::file('cover_image')}}
            </div>
            <button class="btn btn-primary" type="submit">Create Post</button>
        </form>
@endsection