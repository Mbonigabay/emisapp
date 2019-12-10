<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Expense;
use App\Income;
use App\Project;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::all();
        $nbr_employees = Employee::all()->count();
        $nbr_projects = Project::all()->count();
        $sum_expenses = Expense::all()->sum('balance');
        $sum_incomes = Income::all()->sum('balance');

        return view('expense.index', compact('employees', 'nbr_employees', 'nbr_projects', 'sum_expenses', 'sum_incomes'));
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
            'done_by' => 'required',
            'date_of_transaction' => 'required',
        ]);

        if ($validator->passes()) {

            $expense = Expense::create([
                'name' => $request->input('name'),
                'type' => $request->input('type'),
                'balance' => $request->input('balance'),
                'done_by' => $request->input('done_by'),
                'date_of_transaction' => $request->input('date_of_transaction'),
            ]);
            if ($expense) {
                return redirect()->back()
                    ->with('success', 'Expense saved successful');
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

        $employees = Employee::all();
        $expense = Expense::where('id', $id)->first();
        
        return view('expense.show', compact('expense', 'employees'));
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
            'done_by' => 'required',
            'date_of_transaction' => 'required',
        ]);

        if ($validator->passes()) {
            if (Auth::check()) {
                $expenseUpdate = Expense::where('id', $id)
                    ->update([
                        'name' => $request->input('name'),
                        'type' => $request->input('type'),
                        'balance' => $request->input('balance'),
                        'done_by' => $request->input('done_by'),
                        'date_of_transaction' => $date->format('Y-m-d H:i:s'),
                    ]);

                if ($expenseUpdate) {
                    $expense = Expense::where('id', $id)->first();
                    return redirect()->route('expense.show', ['expense_id' => $expense->id])
                        ->with('success', 'Expense profile updated successful');
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
