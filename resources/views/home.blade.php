@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <!-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div> -->
                <form method="post" action="/find">
                     @csrf
                    <label for="search">search</label>
                    <input id="search" type="text" name="search" required>
                   
                    <input type="submit" name="sent" value="Որոնում">
                </form>
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nameshellooo</th>
                      <th scope="col">Addresses</th>
                      <th scope="col">Images</th>
                      <th scope="col">types_of_activities</th>
                      <th scope="col">Catigory</th>
                     
                  </tr>
              </thead>
              <tbody>
               @foreach ($employees  as  $value)
               <tr>
                  <th scope="row">{{$value->id}}</th>
                  
                  <td>{{$value->name}}</td>
                  <td>{{$value->address}}</td>
                  <td>{{$value->images}}</td>
                  <td><details>
                                <summary>Մանրամասն</summary>
                               {!! $value->types_of_activities!!}
                            </details>

                     </td>
                  <td><label for="browser">Select Catigory</label>
                   @if($value->catigory)
                   @foreach ($status as  $data)
                     
                      @if($value->catigory == $data->id)
                           <input list="browsers" va  name="browser" value="{{$data->name}}" id="browser" onchange="upadte('{{$value->id}}',this.value)">
                      @endif
                  @endforeach
                  @else
                          <input list="browsers" va  name="browser" value="" id="browser" onchange="upadte('{{$value->id}}',this.value)">
                      @endif
                   
                    <datalist id="browsers">
                    @foreach ($status as  $data)
                      <option value="{{$data->name}}">
                    @endforeach
                      </datalist></td>
                  </tr>
                  @endforeach 
                  <script>

                      function upadte(id,value){

                        $.ajaxSetup({

                            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});$.ajax({type:'POST',url:"{{ '/update'}}",data:{id:id, value:value},success: function(data,id){

                                if(data == "price"){

                                    location.reload();

                                }else{

                                    location.reload();

                                }

                            }

                        });

                        }

                    </script>
                </tbody>
            </table>
            {{-- Pagination --}}
            <div class="d-flex justify-content-center">
                {!! $employees->links() !!}
            </div>
        </div>
    </div>
</div>
</div>
@endsection