@extends('layouts.layout')
@section('content')
<div class="container mb-3">  
    <div> {{ $product->photo}}</div>  
    <div> {{ $product->about }}</div>
    <div> {{ $product->price }}</div>
    <a href="{{ route('product.edit', $product->id) }}" class="btn btn-success mb-3">Изменить товар</a>
    <div>
        <a href="{{ route('product.index') }}" class="btn btn-primary mb-3">На главную</a>
    </div>
    <form action="{{ route('product.destroy',  $product->id) }}" method="post">
        @csrf
        @method('delete')
        <input type="submit" class="btn btn-danger mb-2" value="Удалить товар">
      </form>
</div> 
@endsection