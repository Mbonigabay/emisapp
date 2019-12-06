@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-body ">
                <div class="row">
                    <div class="col-5 col-md-4">
                        <div class="icon-big text-center icon-warning">
                            <i class="nc-icon nc-single-02 text-warning"></i>
                        </div>
                    </div>
                    <div class="col-7 col-md-8">
                        <div class="numbers">
                            <p class="card-category">Employees</p>
                            <p class="card-title">10
                            </p>
                            <p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer ">
                <hr>
                <div class="stats">
                    <i class="fa fa-refresh"></i> Update Now
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-body ">
                <div class="row">
                    <div class="col-5 col-md-4">
                        <div class="icon-big text-center icon-warning">
                            <i class="nc-icon nc-money-coins text-success"></i>
                        </div>
                    </div>
                    <div class="col-7 col-md-8">
                        <div class="numbers">
                            <p class="card-category">Revenue</p>
                            <p class="card-title">$ 1,345
                            </p>
                            <p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer ">
                <hr>
                <div class="stats">
                    <i class="fa fa-calendar-o"></i> Last day
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-body ">
                <div class="row">
                    <div class="col-5 col-md-4">
                        <div class="icon-big text-center icon-warning">
                            <i class="nc-icon nc-money-coins text-danger"></i>
                        </div>
                    </div>
                    <div class="col-7 col-md-8">
                        <div class="numbers">
                            <p class="card-category">Expenses</p>
                            <p class="card-title">2300
                            </p>
                            <p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer ">
                <hr>
                <div class="stats">
                    <i class="fa fa-refresh"></i> Update Now
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card card-stats">
            <div class="card-body ">
                <div class="row">
                    <div class="col-5 col-md-4">
                        <div class="icon-big text-center icon-warning">
                            <i class="nc-icon nc-tile-56 text-primary"></i>
                        </div>
                    </div>
                    <div class="col-7 col-md-8">
                        <div class="numbers">
                            <p class="card-category">Projects</p>
                            <p class="card-title">3
                            </p>
                            <p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer ">
                <hr>
                <div class="stats">
                    <i class="fa fa-refresh"></i> Update now
                </div>
            </div>
        </div>
    </div>
</div>

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
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <tr>
                                <th>
                                    Date
                                </th>
                                <th>
                                    Type
                                </th>
                                <th>
                                    Description
                                </th>
                                <th class="text-right">
                                    Balance $
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    22-03-2019 05:30
                                </td>
                                <td>
                                    <a href="./type/show.html" class="link"> Travel</a>
                                </td>
                                <td>
                                    <a href="show.html" class="link"> Kigali to Nyamata</a>
                                </td>
                                <td class="text-right">
                                    $36,738
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    22-03-2019 05:30
                                </td>
                                <td>
                                    Travel
                                </td>
                                <td>
                                    Kigali to Nyamata
                                </td>
                                <td class="text-right">
                                    $36,738
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    22-03-2019 05:30
                                </td>
                                <td>
                                    Travel
                                </td>
                                <td>
                                    Kigali to Nyamata
                                </td>
                                <td class="text-right">
                                    $36,738
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    22-03-2019 05:30
                                </td>
                                <td>
                                    Travel
                                </td>
                                <td>
                                    Kigali to Nyamata
                                </td>
                                <td class="text-right">
                                    $36,738
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    22-03-2019 05:30
                                </td>
                                <td>
                                    Travel
                                </td>
                                <td>
                                    Kigali to Nyamata
                                </td>
                                <td class="text-right">
                                    $36,738
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    22-03-2019 05:30
                                </td>
                                <td>
                                    Travel
                                </td>
                                <td>
                                    Kigali to Nyamata
                                </td>
                                <td class="text-right">
                                    $36,738
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Expense</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form _lpchecked="1">
                    <div class="row">
                        <div class="col-md-6 pr-1">
                            <div class="form-group">
                                <label>Type</label>
                                <select class="custom-select" id="inputGroupSelect01">
                                        <option selected>Choose...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                      </select>
                            </div>
                        </div>
                        <div class="col-md-6 pl-1">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Done By</label>
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Date</label>
                                <input type="date" class="form-control" placeholder="Company"
                                    value="Chet">
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Upload a file</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input"
                                        id="inputGroupFile01"
                                        aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose
                                        file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>About Expenses</label>
                                <textarea
                                    class="form-control textarea">Oh so, your weak rhyme You doubt I'll bother, reading into it</textarea>
                            </div>
                        </div>
                    </div>

                </form>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary btn-sm">Add
                    Expenses</button>
            </div>
        </div>
    </div>
</div>

@endsection