<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/form.css')}}">
</head>

    <body>
    <h1>Edit Movie Details</h1>
        <section>
        <form class="row g-3" method="post" action="{{route('update',$movie->id)}}">
            <input type="hidden" name="method" value="PUT">
        @csrf
        <div class="block"></block>
        <!-- <div></div> -->
        <fieldset>
        <div class= "formfont">
        <div class="col-md-12">
            <label for="moviename" class="form-label">Movie Name</label>
            <input type="text" class="form-control" id="moviename" name="moviename" value="{{$movie->moviename}}">
        </div>
        <div class="col-md-12">
            <label for="releasedate" class="form-label">Release Date</label>
            <input type="date" class="form-control" id="releasedate" name= "releasedate" >
        </div>
        <div class="col-12">
            <label for="productioncompany" class="form-label">Production company</label>
            <input type="text" class="form-control" id="productioncompany" name= "productioncompany" value="">
        </div>
        <div class="col-12">
            <label for="movietime" class="form-label">Movie time</label>
            <input type="text" class="form-control" id="movietime" placeholder="2.5 hours" name= "movietime">
        </div>
        <div class="col-md-12">
            <label for="actor" class="form-label">Lead Actor</label>
            <input type="text" class="form-control" id="actor" name = "actor">
        </div>
        <div class="col-md-12">
            <label for="actress" class="form-label">Lead Actress</label>
            <input type="text" class="form-control" id="actress" name= "actress">
        </div>
        <div class="col-md-4">
            <label for="industry" class="form-label">Industry</label>
            <select id="industry" class="form-select" name="industry">
            <option selected>Choose...</option>
            <option>Bollywood</option>
            <option>Tamil</option>
            <option>Telegu</option>
            <option>Kannada</option>
            </select>
        </div>
        <div class="col">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" maxlength="500"></textarea>           
        </div>
        <br>
        </fieldset>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        </form>
        </section>
        
    </body>
</html>
