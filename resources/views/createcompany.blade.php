
@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Creating companis</h2>
        </div>
    </div>
</div>
<form method="post" action="/createcompany">
     @csrf
    <label for="name">Name</label>
    <input class="form-control" id="name" type="text" name="name" required >
    <label for="website_url">Website_url</label>
    <input class="form-control" id="website_url" type="text" name="website_url" required>
    <label for="Director">Director</label>
    <input class="form-control" id="Director" type="text" name="Director" required>
    <label for="facebook_url">facebook url</label>
    <input class="form-control" id="facebook_url" type="text" name="facebook_url" required>
    <label for="instagram_url">instagram url</label>
    <input class="form-control" id="instagram_url" type="text" name="instagram_url" required>

    <!-- <label for="cars">Choose Categories</label>
    <select name="categories_id" id="cars">
    </select> -->
    <p></p>

    <input type="submit" name="sent" value="Ավելացնել">
</form>





<p class="text-center text-primary"><small>Webex.am</small></p>
@endsection