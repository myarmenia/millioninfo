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
                <form method="post" action="/create">
                     @csrf
                    <label for="search">EN</label>
                    <input id="EN" type="text" name="en" required>

                    <label for="search">HY</label>
                    <input id="HY" type="text" name="hy" required>

                    <label for="search">RU</label>
                    <input id="RU" type="text" name="ru" required>
                   
                    <input type="submit" name="sent" value="Ավելացնել">
                </form>
                <table class="table">
                    <thead>
                     <tr> 
                      
                         <th scope="col">Names</th>
                         <th scope="col">Edit</th>
                     </tr>
                    </thead>
                    <table class="table">
                        @foreach($user as $info)
                          <thead>
                            
                            <th>{{$info->name}}</th>
                            <th scope="col"><a class="btn btn-primary"href="{{ route('show', $info->id) }}">Edit</a></th>
                            
                          </thead>
                          @endforeach
                       
                    </table>
                </table>
         
                  {{-- <script>

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

                    </script> --}}
                </tbody>
            </table>
            {{-- Pagination --}}
            <div class="d-flex justify-content-center">
               
            </div>
        </div>
    </div>
</div>
</div>
@endsection
