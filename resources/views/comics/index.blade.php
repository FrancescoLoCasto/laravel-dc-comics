
@extends('templete.app')


@section('principal-content')


   <div class="col-12">
      <a href="{{route('create.create')}}" class="btn btn-danger">Create new Comics!</a>
   </div>

   <table class="table">
      <thead>
            <tr>
               <th scope="col">Id</th>
               <th scope="col">Title</th>
               <th scope="col">Price</th>
               <th scope="col">Sale Date</th>
            </tr>
      </thead>

      @foreach ($comics as $comic)
      <tbody>
            <tr>
               <td>{{ $comic->id }} </td>
               <td>{{ $comic->title }}</td>
               <td>{{ $comic->price }}</td>
               <td>{{ $comic->sale_date }}</td>
               <td>
                  <a class="btn btn-primary" href="{{route('comics.show',$comic->id)}}">Reveal comics</a>
               </td>

            </tr>
      </tbody>
      @endforeach 

@endsection