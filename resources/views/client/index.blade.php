@extends('layouts.app')

@section('content')

@include('includes.panels')

<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title float-left"> Clients</h4>
    
                    <button type="button" class="float-right btn-sm btn btn-primary" data-toggle="modal"
                        data-target="#exampleModal">
                        New Client
                    </button>
    
    
                </div>
                <div class="card-body">
                    <div class="">
                        <table class="table" id="clientTable">
                            <thead class=" text-primary">
                                <tr>
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        Name
                                    </th>
    
                                    <th>
                                        Address
                                    </th>
                                    <th>
                                        Tel. No.
                                    </th>
                                </tr>
                            </thead>
    
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Client</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
    
                        <form method="post" action="{{ action('ClientController@store')}}">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-6 pr-1">
                                        <div class="form-group">
                                            <label for="Name">Name</label>
                                            <input name="name" type="text" class="form-control" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6 pl-1">
                                        <div class="form-group">
                                            <label for="Email">Email</label>
                                            <input name="email" type="email" class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 pr-1">
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <input name="address" type="text" class="form-control" placeholder="Address">
                                        </div>
                                    </div>
                                    <div class="col-md-6 pl-1">
                                        <div class="form-group">
                                            <label for="telNo">Tel. No.</label>
                                            <input name="telNo" type="text" class="form-control" placeholder="Tel. No.">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm float-right">Add
                                    Expenses</button>
            
                            </form>
            
                        
                </div>
            </div>
        </div>
    </div>

@endsection