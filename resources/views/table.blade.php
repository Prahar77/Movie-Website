<html>

   <head>
      <title>HTML Table Header</title>
      <h1> All data Table</h1>
   </head>
	
   <body>
      <table border = "1">
         <tr>
            <th>Id</th>
            <th>Movie Name</th>
            <th>Release Date</th>
            <th>Production Company</th>
            <th>Movie time</th>
            <th>Lead Actor</th>
            <th>Lead Actress</th>
            <th>Industry</th>
            <th>Created at</th>
         </tr>

         @foreach($movies as $key => $movie)
         <tr>
            <td>{{$key+1}}</td>
            <td>{{$movie->moviename}}</td>
            <td>{{$movie->releasedate}}</td>
            <td>{{$movie->productioncompany}}</td>
            <td>{{$movie->movietime}}</td>
            <td>{{$movie->leadactor}}</td>
            <td>{{$movie->leadactress}}</td>
            <td>{{$movie->industry}}</td>
            <td>{{$movie->leadactress}}</td>
            <td>{{$movie->created_at}}</td>
         </tr>
         @endforeach
         
         
      </table>

   </body>
   
</html>