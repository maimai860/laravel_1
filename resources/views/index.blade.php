@extends('layouts.default')
<style>

</style>
@section('title', 'index.blade.php')

@section('content')
<p>Todo List</p>
  <form action="/" method="POST">
    @csrf
    <input type="text" name="content" >
    <input type="submit" value="追加" >
  </form>

@endsection