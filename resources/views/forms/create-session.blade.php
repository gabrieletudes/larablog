@extends('layouts.main')
@section('maincontent')
<form action="/login" method="post">
    {{csrf_field()}}
    <div class="form-group col-lg-6">
        <label for="exampleInputEmail">Email</label>
        <input class="form-control" type="text" name="email" id="exampleInputEmail">
    </div>
    <div class="form-group col-lg-6">
        <label for="exampleInputPassword">Password</label>
        <input class="form-control" type="password" name="password" id="exampleInputPassword">
    </div>
    <div class="form-group col-lg-6">
        <button type="submit" class="btn btn-primary">Login</button>
        <a href="/register" class="btn btn-outline-primary">Create an account</a>
    </div>
</form>
@endsection