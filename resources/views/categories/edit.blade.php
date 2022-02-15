@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit categories</h2>
        </div>
        <div class="pull-right">
          
        </div>
    </div>
</div>


@if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
       @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>
@endif

<table class="table">
                  <thead>
                    <tr>
                  
                    <div class="form-group">
                      <strong>Name:</strong>
                      {!! Form::text('name', null, array('placeholder' => $user,'class' => 'form-control')) !!}
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                 
                      
                    
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

@endsection