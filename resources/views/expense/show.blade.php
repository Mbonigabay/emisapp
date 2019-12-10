@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card">

            <img src="{{asset('img/damir-bosnjak.jpg')}}" class="card-img-top" data-toggle="modal"
                data-target="#exampleModal" alt="...">

            <div class="card-body">

                <p class="description text-center">
                    Proof of expense
                    <br> No diggity
                    <br> I wanna bag it up"
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card card-user">
            <div class="card-header">
                <h5 class="card-title">Edit Expense</h5>
            </div>
            <div class="card-body">
                <form method="post" action="{{ action('ExpenseController@update', $expense->id)}}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Type</label>
                                <select class="custom-select" id="inputGroupSelect01" name="type">
                                    <option selected>{{$expense->type}}</option>
                                    <option value="Travel">Travel</option>
                                    <option value="Equipement">Equipement</option>
                                    <option value="Misc">Misc</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Done By</label>
                                <select class="custom-select" id="inputGroupSelect01" name="done_by">
                                    <option value="{{$expense->employee()->first()->id}}" selected>{{$expense->employee()->first()->name}}</option>
                                    @foreach ($employees as $employee)
                                    <option value="{{$employee->id}}">{{$employee->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Date</label>
                                <input value="{{$expense->date_of_transaction}}" name="date_of_transaction" type="text"
                                    class="form-control">
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Balance</label>
                                <input name="balance" type="text" class="form-control" value="{{$expense->balance}}">
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
                                <textarea name="name" class="form-control textarea">{{$expense->name}}</textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm float-right">Edit
                        Expenses</button>
                </form>
            </div>
        </div>
    </div>


    <!-- Image Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <img src="{{asset('img/damir-bosnjak.jpg')}}">
                </div>

            </div>
        </div>
    </div>
</div>



@endsection