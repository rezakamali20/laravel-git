@extends('layouts.app')

@section('content')


    @if($errors->any())

            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    {{ $error}}<br>

                @endforeach
            </div>

    @endif

    {!! Form::open(['method'=>'post','action'=>'PostsController@store', 'files'=>true]) !!}
    <div class="form-group">

        {!! Form::label('title' , 'عنوان :'); !!}
        {!! Form::text('title', null, ['class'=>'form-control']); !!}
    </div>

    <div class="form-group">

        {!! Form::label('description' , 'توضیحات :'); !!}
        {!! Form::textarea('description', null, ['class'=>'form-control']); !!}
    </div>

    <div class="form-group">

        {!! Form::label('file' , 'تصویر اصلی :'); !!}
        {!! Form::file('file', ['class'=>'form-control']); !!}
    </div>


    <div class="form-group">


        {!! Form::submit('ذخیره', ['class'=>'btn btn-primary']); !!}
    </div>
    <?php

    ?>
    {!! Form::close() !!}



@endsection