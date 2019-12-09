<?php

namespace App\Http\Controllers;

use App\Charts\LatestEmployee;
use App\Employee;
use App\Expense;
use App\Income;
use App\Project;

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

        $nbr_employees = Employee::all()->count();
        $nbr_projects = Project::all()->count();
        $sum_expenses = Expense::all()->sum('balance');
        $sum_incomes = Income::all()->sum('balance');


        $today_users = Employee::whereDate('created_at', today())->count();
        $yesterday_users = Employee::whereDate('created_at', today()->subDays(1))->count();
        $users_2_days_ago = Employee::whereDate('created_at', today()->subDays(2))->count();

        $chart = new LatestEmployee;
        $chart->labels(['2 days ago', 'Yesterday', 'Today']);
        $chart->dataset('My dataset', 'bar', [$users_2_days_ago, $yesterday_users, $today_users])->color('#000');
        // $chart->options(['responsive'=> false], $overwrite = true);
        // $chart->width(10);
        // $chart->height(100);
        // $chart = new LatestEmployee;
        // $chart->labels(['One', 'Two', 'Three']);
        // $chart->dataset('My dataset 1', 'bar', [1, 2, 3])->color('#000');


        return view('home', compact('employees', 'chart', 'expense', 'nbr_employees', 'nbr_projects', 'sum_expenses', 'sum_incomes'));
    }
}
