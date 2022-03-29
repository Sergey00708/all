@extends('layouts.main')
@section('content')
<div>
  <form action="{{ route('post.store') }}" method="POST">
   @csrf 
    <div class="form-group mb-3">
      <label for="title">Title</label>
      <input value="{{ old('title') }}" type="text" name="title" class="form-control" id="title" placeholder="Title">
       @error('title')
        <p class="text-danger" >{{ $message }}</p> 
       @enderror
    </div>
    <div class="form-group mb-3">
      <label for="content">Content</label>
      <textarea class="form-control" name="content" id="Content" placeholder="Content"> {{ old('content') }}</textarea>
      @error('content')
        <p class="text-danger" >{{ $message }}</p>  
      @enderror
    </div>
    <div class="form-group mb-3">
      <label for="image">Image</label>
      <input value="{{ old('image') }}" type="text" name="image" class="form-control" id="image" placeholder="image">
      @error('image')
        <p class="text-danger" >{{ $message }}</p>  
      @enderror
    </div>
    <div class="form-group mb-3">
      <label for="likes">likes</label>
      <input value="{{ old('likes') }}" type="text" name="likes" class="form-control" id="likes" placeholder="likes">
      @error('likes')
        <p class="text-danger" >{{ $message }}</p>  
      @enderror
    </div>
    <div class="form-group mb-3">
      <label for="category">Category</label>
      <select class="form-control" id="category" name="category_id"> 
        @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->title }}</option>
        @endforeach
      </select>  
    </div>
    <div class="form-group mb-3">
    <label for="tags">Tags</label>
    <select class="form-select" multiple aria-label="multiple select example" id="tags" name="tags[]">
     @foreach ($tags as $tag)
     <option value="{{ $tag->id }}">{{ $tag->title }}</option>
     @endforeach 
    </select>
    </div>
      <button type="submit" class="btn btn-primary">Create</button>
  </form>
</div>
@endsection