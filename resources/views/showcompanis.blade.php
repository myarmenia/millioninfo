
@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>All Companis</h2>
            <a class="btn btn-primary" href="{{ route('createcompany') }}">Create</a>
        </div>
    </div>
</div>

            <table class="table">
                    <thead>
                        <tr> 
                            <th scope="col">Names</th>
                            <th scope="col">Edit</th>
                        </tr>
                    </thead>

                        <table class="table">
                        @foreach($compani as $info)
                          <thead>
                            <th>{{$info->name}}</th>
                          </thead>
                          @endforeach
                        </table>
                <tbody>
            </table>



            <div class="pagination-newm">
                {{$compani->links()}}

            </div> 

<p class="text-center text-primary"><small>Webex.am</small></p>
@endsection