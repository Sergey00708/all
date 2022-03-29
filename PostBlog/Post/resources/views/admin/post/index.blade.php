@extends('layouts.admin')
@section('AdminPanel')
<div>
  <a href="{{ route('admin.post.create') }}" class="btn btn-success mb-3 ">Add one</a>
</div> 
@endsection
@section('content')
@foreach($posts as $post)
<div><a href="{{ route('admin.post.show', $post->id) }}">{{$post->id}}. {{$post->title}}</a></div>
@endforeach
<div>
{{ $posts->links() }}
</div>
@endsection