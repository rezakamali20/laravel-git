@extends('layouts.app')

@section('content')
    @if(count($people))
        <ul>
            <h2>
        @foreach($people as $person)


            <li>{{$person}}</li>


        @endforeach
            </h2>
        </ul>
    @endif


@endsection


@section('footer')
<p>اینجا فوتر کانتکتن است</p>
@endsection

