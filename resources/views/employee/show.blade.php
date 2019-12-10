@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-4">
        <div class="card card-user">
            <div class="image">
                <img src="{{asset('img/damir-bosnjak.jpg')}}" alt="...">
            </div>
            <div class="card-body">
                <div class="author">
                    <a href="#">
                        <img class="avatar border-gray" src="{{asset('img/mike.jpg')}}" alt="...">
                        <h5 class="title">{{$employee->name}}</h5>
                    </a>
                    <p class="description">
                        {{$employee->email}}
                    </p>
                </div>
                <p class="description text-center">
                    "I like the way you work it
                    <br> No diggity
                    <br> I wanna bag it up"
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card card-user">
            <div class="card-header">
                <h5 class="card-title">Edit Profile</h5>
            </div>
            <div class="card-body">
                <form method="post" action="{{ action('EmployeeController@update', $employee->id)}}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label for="Name">Name</label>
                                <input name="name" type="text" class="form-control" value="{{$employee->name}}">
                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label for="Email">Email</label>
                                <input name="email" type="email" class="form-control" value="{{$employee->email}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input name="address" type="text" class="form-control" value="{{$employee->address}}">
                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label for="telNo">Tel. No.</label>
                                <input name="telNo" type="text" class="form-control" value="{{$employee->tel_no}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="nid">National ID</label>
                                <input name="nid" type="text" class="form-control" value="{{$employee->nid}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="position">Position</label>
                                <input name="position" type="text" class="form-control" value="{{$employee->position}}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="update ml-auto mr-auto">
                            <button type="submit" class="btn btn-primary btn-round">Update Profile</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>

@endsection