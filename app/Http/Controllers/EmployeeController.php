<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Expense;
use App\Income;
use App\Project;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nbr_employees = Employee::all()->count();
        $nbr_projects = Project::all()->count();
        $sum_expenses = Expense::all()->sum('balance');
        $sum_incomes = Income::all()->sum('balance');

        return view('employee.index', compact('nbr_employees', 'nbr_projects', 'sum_expenses', 'sum_incomes'));
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
            'email' => 'required',
            'address' => 'required',
            'telNo' => 'required',
            'nid' => 'required',
            'position' => 'required',
        ]);

        if ($validator->passes()) {

            $employee = Employee::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'address' => $request->input('address'),
                'tel_no' => $request->input('telNo'),
                'nid' => $request->input('nid'),
                'position' => $request->input('position'),
            ]);
            if ($employee) {
                return redirect()->back()
                    ->with('success', 'Employee saved successful');
            }

            return redirect()->back()
                ->with('error', 'Error');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $employee = Employee::where('id', $id)->first();
        return view('employee.show', compact('employee'));
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
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'telNo' => 'required',
            'nid' => 'required',
            'position' => 'required',
        ]);

        if ($validator->passes()) {
            if (Auth::check()) {
                $employeeUpdate = Employee::where('id', $id)
                    ->update([
                        'name' => $request->input('name'),
                        'email' => $request->input('email'),
                        'address' => $request->input('address'),
                        'tel_no' => $request->input('telNo'),
                        'nid' => $request->input('nid'),
                        'position' => $request->input('position'),
                    ]);

                if ($employeeUpdate) {
                    $employee = Employee::where('id', $id)->first();
                    return redirect()->route('employee.show', ['employee_id' => $employee->id])
                        ->with('success', 'Employe profile updated successful');
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
