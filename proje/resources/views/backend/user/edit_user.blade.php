@extends('backend.layouts.app')
@section('content')

<div class="content-wrapper">

<section class="content">
    <div class="row">
        <div class="col-lg-1">

        </div>
        <div class="col lg 10">
            <div class="card"><!--Card Start-->
            <div class="card-header">
                <h5 class="card-title">
                    Edit User
                </h5>
        </div>
        <div class="card-body">
            <form role="form" action="{{URL::to('/update-user/'.$edit->id)}}" method="post">
                @csrf
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label"> Username </label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" placeholder="Enter your name" value="{{$edit->name}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label"> E-mail </label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="email" placeholder="Enter your e-mail address" value="{{$edit->email}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label"> Password </label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="password" placeholder="Enter your password" value="{{$edit->password}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label"> User Role Type </label>
                    <div class="col-sm-10">
                        <select class="form-control" id="exampleFormControlSelect1" name="role" required>
                            <option value="Admin"{{'Admin' == $edit->role ? 'selected' : ''}}> Admin </option>
                            <option value="Customer"{{'Customer' == $edit->role ? 'selected' : ''}}> Customer </option>
                        </select>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-info"> Submit </button>
                </div>
            </form>
        </div>
    </div>
</section>


</div>