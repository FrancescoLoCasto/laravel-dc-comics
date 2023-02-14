
@extends('templete.app')


@section('principal-content')



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
                  <a class="btn" href="{{routes('comics.show',$comic->id)}}">Reveal comics</a>
               </td>

            </tr>
      </tbody>
      @endforeach 

@endsection