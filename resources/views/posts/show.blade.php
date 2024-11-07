@extends('layouts.app')
@section('content')
<a href="/posts" class="btn btn-primary">Back</a>
    <h1>{{$post->title}}</h1>
    @if(!Auth::guest())
    {{-- or can use this @if(Auth::user() == $post->user) --}}
        @if(Auth::user()->id == $post->user_id)
        <div class="d-flex flex-row-reverse">
            <div class="p-2">
                <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
            </div>
            <div class="p-2">
                {!!Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}
            </div>
          </div>
            
        @endif
    @endif
  
    <div class="text-center">
         <img src="/storage/cover_images/{{$post->cover_image}}" class="rounded" alt="responsive image">
    </div>
    <div class="p-3">
        {!!$post->body!!}
    </div>
    <hr>
    <small class="p-3">Written on {{$post->created_at}}</small>
@endsection