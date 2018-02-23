@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-info" style="margin-top: 15px;">Go Back</a>
<br><br>
    <h1 style="font-size: 35px;">{{$post->title}}<h1>
    <img style="width:50%;height:50%;" src="/storage/cover_images/{{$post->cover_image}}">
    <br><br>
        <div class="bodysec">
            <p>{!!$post->body!!}</p>
        </div>
        <hr>
        <small style="font-size:17px;">Written on {{$post->created_at}} by {{$post->user->name}}</small>
        <hr>
        @if(!Auth::guest())
            @if(Auth::user()->id == $post->user_id)
                <a href="/posts/{{$post->id}}/edit" class="btn btn-info">Edit</a>

                {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST']) !!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!! Form::close()!!}
            @endif
        @endif
@endsection