@extends('layouts.main')
@section('content')
<div>
  <form action="{{ route('post.update',  $post->id) }}" method="POST">
   @csrf
   @method('patch')
    <div class="mb-3">
      <label for="title">Title</label>
      <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{ $post->title }}">
    </div>
    <div class="mb-3">
      <label for="content">Content</label>
      <textarea class="form-control" name="content" id="Content" placeholder="Content">{{ $post->content }}</textarea>
    </div>
    <div class="mb-3">
      <label for="image">Image</label>
      <input type="text" name="image" class="form-control" id="image"  value="{{ $post->image }}" placeholder="image">
    </div>
    <div class="mb-3">
      <label for="likes">likes</label>
      <input type="text" name="likes" class="form-control" id="image" value="{{ $post->image }}" placeholder="likes">
    </div>
    <div class="form-group mb-3">
      <label for="category">Category</label>
      <select class="form-control" id="category" name="category_id"> 
        @foreach ($categories as $category)
      <option 
        {{ $category->id === $post->category->id ? 'selected' : '' }}
        value="{{ $category->id }}">{{ $category->title }}
      </option>
        @endforeach
      </select>  
    </div>
    <div class="form-group mb-3">
      <label for="tags">Tags</label>
      <select class="form-select" multiple aria-label="multiple select example" id="tags" name="tags[]">
       @foreach ($tags as $tag)
       <option 
       @foreach ($post->tags as $posttag)
       {{ $tag->id === $posttag->id ? 'selected' : '' }}
       @endforeach
       value="{{ $tag->id }}">{{ $tag->title }}</option>
       @endforeach 
      </select>
      </div>
      <button type="submit" class="btn btn-primary">update</button>
  </form>
</div>
@endsection