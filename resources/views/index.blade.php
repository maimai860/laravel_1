@extends('layout.post')
<style>

</style>
@section('title', '')

@section('content')
<p>Todo List</p>
  <form action="/" method="POST">
    @csrf
    <input type="text" name="content" >
    <input type="submit" value="追加" >
  </form>
@foreach ($todos as $todo)
{{$todo->content}}
@endforeach
@endsection