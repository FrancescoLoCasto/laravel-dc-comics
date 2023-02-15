@extends('templete.app')

@section('title', "Create new comic")

@section('principal-content')

@dump($comic)

<form action="{{ route('comics.update', $comic->id)}}" method="POST">
   @method('PUT')
   @csrf
   <div class="mb-3">
      <label class="form-label">
         Title
      </label>
      <input type="text" class="form-control" name="title" value="{{$comic->title}}">
   </div>

   <div class="mb-3">
      <label class="form-label">
         description
      </label>
      <input type="text" class="form-control" name="description" value="{{$comic->description}}">
   </div>

   <div class="mb-3">
      <label class="form-label">
         price
      </label>
      <input type="text" class="form-control" name="price" value="{{$comic->price}}">
   </div>

   <div class="mb-3">
      <label class="form-label">
         thumb
      </label>
      <input type="text" class="form-control" name="thumb" value="{{$comic->thumb}}">
   </div>

   <div class="mb-3">
      <label class="form-label">
         series
      </label>
      <input type="text" class="form-control" name="series" value="{{$comic->series}}">
   </div>

   <div class="mb-3">
      <label class="form-label">
         sale_date
      </label>
      <input type="text" class="form-control" name="sale_date" value="{{$comic->sale_date}}">
   </div>

   <div class="mb-3">
      <label class="form-label">
         type
      </label>
      <input type="text" class="form-control" name="type" value="{{$comic->type}}">
   </div>

      <button type="submit" class="btn btn-warning">Create new Comics!</button>
 </form>

@endsection