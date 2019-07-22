@extends('layout.master')
@section('title',"Tambah Data")
@section('konten')
<h1>Form Editor</h1>
<form method="post" action="/blog">
        <input type="text" name="title" placeholder="Title"><br>
        <textarea name="description" id="" cols="30" placeholder="Description" rows="10"></textarea><br>
        {{ csrf_field() }}
        <input type="submit" value="Tambah">
    </form>
@endsection