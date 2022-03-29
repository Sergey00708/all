@extends('layouts.admin')
@section('AdminPanel')
<div>
    <a href="{{ route('admin.post.edit', $post->id) }}" class="btn btn-success mb-3">Update</a>
</div>
<form action="{{ route('admin.post.destroy',  $post->id)}}" method="POST">
    @csrf
    @method('delete')
    <input type="submit" class="btn btn-danger mb-2" value="delete">
</form>
@endsection
@section('content')
<div>{{ $post->id }}.{{ $post->title }}</div> 
<div>{{ $post->content }}</div>
@endsection