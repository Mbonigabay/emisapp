<?php

namespace App\Http\Controllers;

use App\Client;
use App\Employee;
use App\Expense;
use App\Income;
use App\Project;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::all();
        $nbr_employees = Employee::all()->count();
        $nbr_projects = Project::all()->count();
        $sum_expenses = Expense::all()->sum('balance');
        $sum_incomes = Income::all()->sum('balance');

        return view('income.index', compact('clients', 'nbr_employees', 'nbr_projects', 'sum_expenses', 'sum_incomes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'type' => 'required',
            'balance' => 'required',
            'from' => 'required',
            'date_of_transaction' => 'required',
        ]);

        if ($validator->passes()) {

            $income = Income::create([
                'name' => $request->input('name'),
                'type' => $request->input('type'),
                'balance' => $request->input('balance'),
                'from' => $request->input('from'),
                'date_of_transaction' => $request->input('date_of_transaction'),
            ]);
            if ($income) {
                return redirect()->back()
                    ->with('success', 'Income saved successful');
            }
        }
        return redirect()->back()
        ->withErrors($validator);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clients = Client::all();
        $income = Income::where('id', $id)->first();
        return view('income.show', compact('clients', 'income'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $date = Carbon::parse($request->input('date_of_transaction'));
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'type' => 'required',
            'balance' => 'required',
            'from' => 'required',
            'date_of_transaction' => 'required',
        ]);

        if ($validator->passes()) {
            if (Auth::check()) {
                $incomeUpdate = Income::where('id', $id)
                    ->update([
                        'name' => $request->input('name'),
                        'type' => $request->input('type'),
                        'balance' => $request->input('balance'),
                        'from' => $request->input('from'),
                        'date_of_transaction' => $date->format('Y-m-d H:i:s'),
                    ]);

                if ($incomeUpdate) {
                    $income = Income::where('id', $id)->first();
                    return redirect()->route('income.show', ['income_id' => $income->id])
                        ->with('success', 'Income profile updated successful');
                }
            }
        }

        return back()
            ->withErrors($validator)
            ->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
