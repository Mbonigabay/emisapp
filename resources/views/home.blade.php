@extends('layouts.app')

@section('content')
@include('includes.panels')
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> Last Expenses</h4>
            </div>
            <div class="card-body">
                <div class="">
                    <table class="table" id="expenseTable2">
                        <thead class=" text-primary">
                            <tr>
                                <th>
                                    ID
                                </th>
                                <th>
                                    Expense
                                </th>
                                <th>
                                    $
                                </th>

                            </tr>
                        </thead>

                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> Last Revenue</h4>
            </div>
            <div class="card-body">
                <div class="">
                    <table class="table" id="incomeTable2">
                        <thead class=" text-primary">
                            <tr>
                                <th>ID</th>
                                <th>
                                    Revenue
                                </th>
                                <th>
                                    $
                                </th>

                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card ">
            <div class="card-header ">
                <h5 class="card-title">Users Behavior</h5>
                <p class="card-category">24 Hours performance</p>
            </div>
            <div class="card-body ">
                <div class="content">
                    {!! $chart->container() !!}
                </div>
            </div>
            <div class="card-footer ">
                <hr>
                <div class="stats">
                    <i class="fa fa-history"></i> Updated 3 minutes ago
                </div>
            </div>
        </div>
    </div>
</div>

@endsection