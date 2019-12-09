@extends('layouts.app')

@section('content')

@include('includes.panels')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title float-left"> Expenses</h4>

                <button type="button" class="float-right btn-sm btn btn-primary" data-toggle="modal"
                    data-target="#exampleModal">
                    Add Expenses
                </button>


            </div>
            <div class="card-body">
                <div class="">
                    <table class="table" id="incomeTable">
                        <thead class=" text-primary">
                            <tr>
                                <th>ID</th>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Type
                                </th>
                                <th>
                                    $
                                </th>
                                <th>
                                    From
                                </th>
                                <th>
                                    Date
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
                <h5 class="modal-title" id="exampleModalLabel">Add Expense</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                    <form method="post" action="{{ action('IncomeController@store')}}">
                            {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Type</label>
                                <select class="custom-select" id="inputGroupSelect01" name="type">
                                    <option selected>Choose...</option>
                                    <option value="Travel">Travel</option>
                                    <option value="Equipement">Equipement</option>
                                    <option value="Misc">Misc</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label for="exampleInputEmail1">From</label>
                                <select class="custom-select" id="inputGroupSelect01" name="from">
                                    <option selected>Choose...</option>
                                    @foreach ($clients as $client)
                                    <option value="{{$client->id}}">{{$client->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Date</label>
                                <input name="date_of_transaction" type="date" class="form-control" placeholder="Company" value="Chet">
                            </div>
                        </div>

                    </div>
                    <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Balance</label>
                                    <input name="balance" type="text" class="form-control" placeholder="Balance ...." >
                                </div>
                            </div>
    
                        </div>
                    {{-- <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Upload a file</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01"
                                        aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose
                                        file</label>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>About Expenses</label>
                                <textarea
                                  name="name"  class="form-control textarea">Oh so, your weak rhyme You doubt I'll bother, reading into it</textarea>
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