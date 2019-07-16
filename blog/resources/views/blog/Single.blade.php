@extends('layout.master')

@section('title','Halaman Single')

@section('konten')
    <h1>Selamat Datang</h1>
    @foreach ($blogs_detail as $v)
        <li>{{$v->title}}</li>
        <p>{{$v->description}}</p>        
    @endforeach
@endsection