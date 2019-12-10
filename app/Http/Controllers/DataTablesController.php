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
        return DataTables::of(Employee::query())
        ->editColumn('name', function ($employee) {
            $name =  '<a style="color:black; text-decoration:none" href="/employee/' . $employee->id . '">' . $employee->name . '</a>';
            return $name;
        })
        ->rawColumns(['name'])
        ->make(true);
    }

    public function getClients()
    {
        return DataTables::of(Client::query())
        ->editColumn('name', function ($client) {
            $name =  '<a style="color:black; text-decoration:none" href="/client/' . $client->id . '">' . $client->name . '</a>';
            return $name;
        })
        ->rawColumns(['name'])
        ->make(true);
    }

    public function getExpenses()
    {

        return DataTables::of(Expense::query())
            ->editColumn('name', function ($expense) {
                $name =  '<a style="color:black; text-decoration:none" href="/expense/' . $expense->id . '">' . $expense->name . '</a>';
                return $name;
            })
            ->rawColumns(['name'])
            ->editColumn('done_by', function ($expense) {
                $employeeName = $expense->employee()->first()->name;
                return $employeeName;
            })
            ->make(true);
    }

    public function getIncomes()
    {
        return DataTables::of(Income::query())
            ->editColumn('name', function ($income) {
                $name =  '<a style="color:black; text-decoration:none" href="/income/' . $income->id . '">' . $income->name . '</a>';
                return $name;
            })
            ->rawColumns(['name'])
            ->editColumn('from', function ($income) {
                $clientName = $income->client()->first()->name;
                return $clientName;
            })
            ->make(true);
    }
}
