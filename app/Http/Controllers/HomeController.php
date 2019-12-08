<?php

namespace App\Http\Controllers;

use App\Charts\LatestEmployee;
use App\Employee;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $employees = Employee::all();


        $today_users = Employee::whereDate('created_at', today())->count();
        $yesterday_users = Employee::whereDate('created_at', today()->subDays(1))->count();
        $users_2_days_ago = Employee::whereDate('created_at', today()->subDays(2))->count();

        $chart = new LatestEmployee;
        $chart->labels(['2 days ago', 'Yesterday', 'Today']);
        $chart->dataset('My dataset', 'line', [$users_2_days_ago, $yesterday_users, $today_users])->color('#000');

        // $chart = new LatestEmployee;
        // $chart->labels(['One', 'Two', 'Three']);
        // $chart->dataset('My dataset 1', 'bar', [1, 2, 3])->color('#000');


        return view('home', compact('employees', 'chart'));
    }
}
