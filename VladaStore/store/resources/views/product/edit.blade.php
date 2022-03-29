@extends('layouts.layout')
@section('content')
<div class="container">
    <div class="row">
        <form action="{{ route('product.update', $product->id) }}" method="Post">
            @csrf
            @method('Patch')
            <div class="mb-3">
              <label for="photo" class="form-label">Фото товара</label>
              <input name="photo" class="form-control">
            </div>
            <div class="mb-3">
              <label for="about" class="form-label">Описание</label>
              <textarea name="about" class="form-control"></textarea>
            </div>
            <div class="mb-3">
              <label for="price" class="form-label">Цена</label>
              <input name="price" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary mb-3">Изменить</button>
            <div><a href="{{ route('product.index') }}" class="btn btn-warning">На главную</a></div>
        </form>
    </div>
</div>
@endsection