@extends('templete.app')

@section('title', "Create new comic")

@section('principal-content')


<form action="{{ route('comics.update', $comic->id)}}" method="POST">
   @method('PUT')
   @csrf
   <div class="mb-3">
      <label class="form-label">
         Title
      </label>
      <input type="text" class="form-control" name="title" value="{{old('title') ?? $comic->title}}">
   </div>

   <div class="mb-3">
      <label class="form-label">
         description
      </label>
      <input type="text" class="form-control" name="description" value="{{old('description') ?? $comic->description}}">
   </div>

   <div class="mb-3">
      <label class="form-label">
         price
      </label>
      <input type="text" class="form-control" name="price" value="{{old('price') ?? $comic->price}}">
   </div>

   <div class="mb-3">
      <label class="form-label">
         thumb
      </label>
      <input type="text" class="form-control" name="thumb" value="{{old('thumb') ?? $comic->thumb}}">
   </div>

   <div class="mb-3">
      <label class="form-label">
         series
      </label>
      <input type="text" class="form-control" name="series" value="{{old('series') ?? $comic->series}}">
   </div>

   <div class="mb-3">
      <label class="form-label">
         sale_date
      </label>
      <input type="text" class="form-control" name="sale_date" value="{{old('sale_date') ?? $comic->sale_date}}">
   </div>

   <div class="mb-3">
      <label class="form-label">
         type
      </label>
      <input type="text" class="form-control" name="type" value="{{old('type') ?? $comic->type}}">
   </div>

      <button type="submit" class="btn btn-warning">Edit your Comics!</button>
 </form>

@endsection