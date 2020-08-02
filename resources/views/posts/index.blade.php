@extends('layouts.app')

@section('content')
<ul>
    @foreach($posts as $post)
         <li>
             <img height="50" class="img-responsive" src="{{ $post->path}}" alt="">&nbsp;&nbsp;
             <a href = "{{route('posts.show',[$post->id])}}">{{$post->title }}</a>
             <span style="float: right;">{{$post->user->name}} ==} </span>
         </li>

    @endforeach
</ul>
@endsection