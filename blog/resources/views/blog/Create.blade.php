@extends('layout.master')
@section('title',"Tambah Data")
@section('konten')
<h1>Form Editor</h1>
@if(count($errors)>0)
    @foreach ($errors->all() as $r )
        <li>{{$r}}</li>
    @endforeach
@endif
<form method="post" action="/blog">
        <input type="text" name="title" placeholder="Title"><br>
        <textarea name="description" id="" cols="30" placeholder="Description" rows="10"></textarea><br>
        {{ csrf_field() }}
        <input type="submit" value="Tambah">
    </form>
@endsection