@extends('layouts.main')
@section('content')
<div>
  <div>{{ $post->id }}. {{ $post->title }}</div>
  <div>{{ $post->content }}</div>
</div>
<div>
  <a href="{{ route('post.index') }}" class="btn btn-primary mb-2">Back</a>
  <div>
    <a href="{{ route('post.edit',  $post->id) }}" class="btn btn-success mb-2">edit</a>
  </div>
  <div>
    <form action="{{ route('post.destroy',  $post->id) }}" method="post">
      @csrf
      @method('delete')
      <input type="submit" class="btn btn-danger mb-2" value="delete">
    </form>
    
  </div>
</div>
@endsection