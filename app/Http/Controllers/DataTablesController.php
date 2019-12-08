<?php

namespace App\Http\Controllers;

use App\Client;
use App\Employee;
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
}
