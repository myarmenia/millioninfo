@extends('layouts.app')


@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Edit</title>
</head>

<body>
 

    <div class="container">  
    
      <form id="contact" action="{{url('edit')}}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$info->id}}">
    
        <h3>Edit Page</h3>
    
        <h4></h4>
    
        <fieldset>
            <input type="text" class="form-control" name="id"  tabindex="1" value="{{$info->id}}">
        </fieldset>
     
        <fieldset>
          <input class="form-control" name="hello" value="{{$info->name}}" tabindex="5">
            
          
        </fieldset>
   
        <fieldset>
          <button  type="submit"  id="contact-submit" data-submit="...Sending">Submit</button>
        </fieldset>

		
      </form>
	 	<form>
        	<input type="button" value="Go back!" onclick="history.back()">
        </form>

    </div>

</body>
</html>
@endsection