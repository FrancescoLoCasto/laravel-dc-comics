<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
</head>
<body>
   

   @foreach ($comics as $comic)
   <tbody>
       <tr>
           <td>{{ $comic->id }}</td>
           <td>{{ $comic->title }}</td>
           <td>{{ $comic->price }}</td>
           <td>{{ $comic->sale_date }}</td>
       </tr>
   </tbody>
   @endforeach
</body>
</html>