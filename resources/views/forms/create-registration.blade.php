@extends('layouts.main')
@section('maincontent')
<form action="/register" method="post">
    {{csrf_field()}}
    <div class="form-group col-lg-6">
        <label for="exampleInputName">Name</label>
        <input class="form-control" type="text" name="name" id="exampleInputName">
    </div>
    <div class="form-group col-lg-6">
        <label for="exampleInputEmail">Email</label>
        <input class="form-control" type="text" name="email" id="exampleInputEmail">
    </div>
    <div class="form-group col-lg-6">
        <label for="exampleInputPassword">Password</label>
        <input class="form-control
" type="password" name="password" id="exampleInputPassword">
    </div>
    <div class="form-group col-lg-6">
        <label for="password_confirmation">Repeat Confirmation</label>
        <input class="form-control" type="password" name="password_confirmation" id="password_confirmation">
    </div>
    <div class="form-group col-lg-6">
        <button type="submit" class="btn btn-primary">Register account</button>
    </div>
</form>
@endsection