@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Filters</h2>
        </div>
    </div>
</div>
<form method="post" action="/fiteradd">
     @csrf
    <label for="en">EN</label>
    <input id="en" type="text" name="en" required>
    <label for="hy">HY</label>
    <input id="hy" type="text" name="hy" required>
    <label for="ru">RU</label>
    <input id="ru" type="text" name="ru" required>
    <input type="submit" name="sent" value="Ավելացնել">
</form>



<table class="table table-bordered">
 <tr>
   <th>No</th>
   <th>Name</th>
   <th>Translet json</th>
   <th>Action</th>
 </tr>
 @foreach ($filter as $data)
  <tr>
    <td>{{ $data->id }}</td>
    <td>{{ $data->name }}</td>
    <td>
    <?php
    $k=json_decode($data->filter);
    echo "en:".$k->en."    ";
    echo "hy:".$k->hy."    "; 
    echo "ru:".$k->ru."    ";
    ?>
    </td>
    <td>
       <a class="btn btn-info" href="filterdelete/{{$data->id}}">Delete</a>
    </td>
  </tr>
 @endforeach
</table>
<p class="text-center text-primary"><small>Webex.am</small></p>
@endsection