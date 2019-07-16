@extends('layout.master')

@section('title','Halaman Single')

@section('konten')
    <h1>Selamat Datang {{$id}}</h1>
    @foreach ($users as $v)
        <li>{{$v->username}}</li>        
    @endforeach


    @if (count($users)>5)
        User Lebih Dari 5
    @else
        User Kurang Dari 5
    @endif

@endsection