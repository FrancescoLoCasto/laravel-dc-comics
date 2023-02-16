@extends('templete.app')

@section('title', "Create new comic")

@section('principal-content')


<form action="{{ route('comics.store')}}" method="POST">
   @csrf

   @if ($errors->any())
      <div class="alert alert-warning">
         <ul>
            @foreach ($errors->all() as $error)
                  <li>
                     {{$error}}
                  </li>
            @endforeach
         </ul>
      </div>
   @endif


   <div class="mb-3">
      <label class="form-label">
         Title
      </label>
      <input type="text" class="form-control" name="title" value="{{ old('title') }}">
   </div>

   <div class="mb-3">
      <label class="form-label">
         description
      </label>
      <input type="text" class="form-control" name="description" value="{{ old('description') }}">
   </div>

   <div class="mb-3">
      <label class="form-label">
         price
      </label>
      <input type="text" class="form-control" name="price" value="{{ old('price') }}">
   </div>

   <div class="mb-3">
      <label class="form-label">
         thumb
      </label>
      <input type="text" class="form-control" name="thumb"value="{{ old('thumb') }}">
   </div>

   <div class="mb-3">
      <label class="form-label">
         series
      </label>
      <input type="text" class="form-control" name="series" value="{{ old('series') }}">
   </div>

   <div class="mb-3">
      <label class="form-label">
         sale_date
      </label>
      <input type="text" class="form-control" name="sale_date" value="{{ old('sale_date') }}">
   </div>

   <div class="mb-3">
      <label class="form-label">
         type
      </label>
      <input type="text" class="form-control" name="type" value="{{ old('type') }}">
   </div>

      <button type="submit" class="btn btn-warning">Create new Comics!</button>
 </form>

@endsection