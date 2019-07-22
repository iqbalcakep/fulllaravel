@extends('layout.master')
@section('title',"Tambah Data")
@section('konten')
<h1>Form Tambah</h1>
<form method="post" action="/blog">
        <input type="text" name="title" value="{{old('title')}}" placeholder="Title"><br>
        @if ($errors->has('title'))
            {{$errors->first("title")}}
        @endif<br>
        <textarea name="description" id="" cols="30" placeholder="Description" rows="10">{{old('description')}}</textarea><br>
        @if ($errors->has('description'))
            {{$errors->first("description")}}
        @endif<br>
        {{ csrf_field() }}
        <input type="submit" value="Tambah">
    </form>
@endsection