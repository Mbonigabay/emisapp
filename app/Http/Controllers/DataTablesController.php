<?php

namespace App\Http\Controllers;

use App\Client;
use App\Employee;
use App\Expense;
use App\Income;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class DataTablesController extends Controller
{
    public function getEmployees()
    {
        return DataTables::of(Employee::query())->make(true);
    }

    public function getClients()
    {
        return DataTables::of(Client::query())->make(true);
    }

    public function getExpenses()
    {

        return DataTables::of(Expense::query())
            ->editColumn('done_by', function ($expense) {
                $employeeName = $expense->employee()->first()->name;        
                return $employeeName;
            })
            ->make(true);
    }

    public function getIncomes()
    {
        return DataTables::of(Income::query())
        ->editColumn('from', function ($income) {
            $clientName = $income->client()->first()->name;        
            return $clientName;
        })
        ->make(true);
    }
}
