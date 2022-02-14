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
                      <th scope="col">Names</th>
                      <th scope="col">Addresses</th>
                      <th scope="col">Images</th>
                      <th scope="col">types_of_activities</th>
                      <th scope="col">Catigory</th>
                     
                  </tr>
              </thead>
              <tbody>
         
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
               
            </div>
        </div>
    </div>
</div>
</div>
@endsection
