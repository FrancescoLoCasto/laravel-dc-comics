@extends('templete.app')

@section('principal-content')

<div class="container">
   <div class="row">
      <div class="col-4 text-center ">
         <div class="card my-card">
            <img class="img-fluid" src="{{$comic->thumb}}" alt="">
            <h2>
               {{ $comic->title }}
            </h2>
            <h4>Serie:{{ $comic->series }}</h4>
            <h4>{{ $comic->description }}</h4>
         </div>
      </div>
   </div>
</div>

@endsection