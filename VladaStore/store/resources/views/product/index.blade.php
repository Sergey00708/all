@extends('layouts.layout')
@section('content')
<div class="container">
@foreach ($products as $product)
    <div><a href="{{ route('product.show', $product->id) }}"> {{ $product->photo}}</a></div>
    <div> {{ $product->about }}</div>
    <div> {{ $product->price }}</div>
@endforeach
<div class="conteiner mb-3">
    <a href="{{ route('product.create') }}" class="btn btn-primary">Добавить товар</a>
</div>
</div>
@endsection
