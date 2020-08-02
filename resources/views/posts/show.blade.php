@extends('layouts.app')

@section('content')

   <h2><a href = "{{route('posts.edit',[$post->id])}}">{{$post->title }}</a></h2>
   <h4>{{$post->description}}</h4>
   <h3>بازدید : {{$post->count_view}}</h3>
   <br>
   <a href = "{{route('posts.edit',[$post->id])}}"><button class="btn btn-primary" onclick="goBack()">Edit</button></a>
   <button class="btn btn-warning" onclick="goBack()">Go Back Step  &gt;</button>

   <script>
       function goBack() {
           window.history.back();
       }
   </script>

@endsection