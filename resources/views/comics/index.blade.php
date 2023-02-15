
@extends('templete.app')


@section('principal-content')


   <div class="col-12 ms-5">
      <a href="{{route('comics.create')}}" class="btn btn-danger p-1">Create new Comics!</a>
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
                  <a class="btn btn-warning" href="{{route('comics.edit',$comic->id)}}">Edit comics</a>
               </td>
               <td>
                  <form action="{{route('comics.destroy', $comic->id)}}" method="POST" >
                     @csrf
                     @method('DELETE')
                     <button class="btn btn-danger">
                        Delete comics!
                     </button>
                  </form>
               </td>
            </tr>
      </tbody>
      @endforeach 

@endsection