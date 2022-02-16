
@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Sub Categories</h2>
        </div>
    </div>
</div>
<form method="post" action="/status">
     @csrf
    <label for="en">EN</label>
    <input id="en" type="text" name="en" required>
    <label for="hy">HY</label>
    <input  id="hy" type="text" name="hy" required>
    <label for="ru">RU</label>
    <input id="ru" type="text" name="ru" required>

    <label for="cars">Choose Categories</label>
    <select name="categories_id" id="cars">
        @foreach ($data as $info )
            <option value="{{$info->id}}">{{$info->name}}</option>
        @endforeach
    </select>

    <input type="submit" name="sent" value="Ավելացնել">
</form>



<table class="table table-bordered">
 <tr>
   <th>ID</th>
   <th>categories_id</th>
   <th>Name</th>
   <th>Action</th>
   {{-- <th >Translet json</th>
   <th >Filter</th>
   <th >Action</th> --}}
 </tr>
 @foreach ($data2 as $info2)
    <tr>
    
            <td>{{$info2->id}}</td>
            <td>{{$info2->categories_id}}</td>
            <td>{{$info2->name}}</td>
            <td>
                <a href={{"index/".$info2['id']}}><button type="button" class="btn btn-primary">Edit</button></a>
                <a href={{"statusdelete/".$info2['id']}}><button type="button" class="btn btn-primary">Delete</button></a>
            </td>
    
    </tr>
  @endforeach

</table>
{{-- <div class="pagination-newm">
    {{$status->links()}}
</div> --}}
<p class="text-center text-primary"><small>Webex.am</small></p>
@endsection