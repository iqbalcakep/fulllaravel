@extends('layout.master')
@section('title',"Edit Data")
@section('konten')
<h1>Form Editor</h1>
<form method="post" action="/blog/{{$blogs['id']}}">
        <input type="hidden" name="_method" value="PUT">
        <input type="text" name="title" value="{{$blogs['title']}}"><br>
        <textarea name="description" id="" cols="30" rows="10">{{$blogs['description']}}</textarea><br>
        {{ csrf_field() }}
        <input type="submit" value="Update">
    </form>
@endsection