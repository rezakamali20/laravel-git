@extends('layouts.app')
@section('content')
    <div dir="rtl">
        <h1>به صفحه ی ویو خوش آمدین.........</h1>
        <h2>ایدی این ویو برابراست با : {{$id}}</h2>
        <h2>ام کاربری این ویو برابراست با : {{$name}}</h2>
        <h2>پسورد این ویو برابراست با : {{$password}}</h2>
    </div>
@endsection

@section('footer')
    <p dir="rtl">اینجا فوتر است</p>
    @endsection
