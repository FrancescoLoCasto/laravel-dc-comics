
@extends('templete.app')


@section('principal-content')

   <div class="container-fluid bg-primary p-4">
      <div class="row">
         <div class="col-12  text-center">
            <a href="{{route('comics.create')}}" class="btn btn-danger p-1">Create new Comics!</a>
         </div>
      </div>
   </div>


   <table class="table table-success">
      <thead>
            <tr>
               <th scope="col">Id</th>
               <th scope="col">Title</th>
               <th scope="col">Price</th>
               <th scope="col">Sale Date</th>
               <th scope="col"></th>
               <th scope="col"></th>
               
            </tr>
      </thead>

      @foreach ($comics as $comic)
      <tbody>
            <tr>
               <td> <h1>{{ $comic->id }}</h1></td>
               <td><h3>{{ $comic->title }}</h3></td>
               <td><h4>{{ $comic->price }}</h4></td>
               <td><h4>{{ $comic->sale_date }}</h4></td>
               <td>
                  <a class="btn btn-primary" href="{{route('comics.show',$comic->id)}}">Reveal comics</a>
                  <a class="btn btn-warning" href="{{route('comics.edit',$comic->id)}}">Edit comics</a>
               </td>
               <td>
                  <form action="{{route('comics.destroy', $comic->id)}}" method="POST" >
                     @csrf
                     @method('DELETE')
                     <button class="btn btn-danger p-1">
                        Delete comics!
                     </button>
                  </form>
               </td>
            </tr>
      </tbody>
      @endforeach 

@endsection