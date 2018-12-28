@extends('layouts.helloapp')

@section('title', 'Booard.Add')

@section('menubar')
    @parent
    投稿ページ
@endsection

@section('content')
    <table>
    <form action="/board/add" method="post">
        {{ csrf_field() }}
        <tr><th>person id: </th><td><input type="number" name="person_id"></td></tr>
        <tr><th>title: </th><td><input type="text" name="title" value="{{old('mail')}}"></td></tr>
        <tr><th>message: </th><td><input type="text" name="message" value="{{old('age')}}"></td></tr>
        <tr><th></th><td><input type="submit" value="send"></td></tr>
    </form>
    </table>
@endsection

@section('footer')
copyright 2018 urax.
@endsection
