@extends('layouts.app')

@section('content')
    <h3>ویرایش فرم</h3>

    @can('update',$post)



        {!! Form::model($post ,['method'=>'PATCH','action'=>['PostsController@update',$post->id]]) !!}
    <div class="form-group">

        {!! Form::label('title' , 'عنوان :'); !!}
        {!! Form::text('title', $post->title, ['class'=>'form-control']); !!}
    </div>

    <div class="form-group">

        {!! Form::label('description' , 'توضیحات :'); !!}
        {!! Form::textarea('description', $post->description, ['class'=>'form-control']); !!}
    </div>

    <div class="form-group">


        {!! Form::submit('بروزرسانی', ['class'=>'btn btn-warning']); !!}
    </div>
    <?php

    ?>
    {!! Form::close() !!}


    {{Form::model($post ,['method'=>'DELETE', 'action'=>['PostsController@destroy',$post->id]])}}
    <div class="form-group">
        {!! Form::submit('حذف', ['class'=>'btn btn-danger']); !!}
    </div>

    {{Form::close()}}
    @elsecannot('update', $post)
        <!-- The Current User Can Create New Post -->
        <div class="alert alert-danger">
        <?='شما دسترسی به این صفحه ندارید برای ایجاد پست ' ?><a href="<?= route('posts.create')?>">کلیک کنید</a>
        </div>
    @endcan
    <br>
    <br>
    <button class="btn btn-warning" onclick="goBack()">Go Back Step</button>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
@endsection