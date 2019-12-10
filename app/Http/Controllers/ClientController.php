<?php

namespace App\Http\Controllers;

use App\Client;
use App\Employee;
use App\Expense;
use App\Income;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class ClientController extends Controller
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

        return view('client.index', compact('nbr_employees', 'nbr_projects', 'sum_expenses', 'sum_incomes'));
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
        ]);

        if ($validator->passes()) {

            $client = Client::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'address' => $request->input('address'),
                'tel_no' => $request->input('telNo'),
            ]);
            if ($client) {
                return redirect()->back()
                    ->with('success', 'Client saved successful');
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

        $client = Client::where('id', $id)->first();
        return view('client.show', compact('client'));
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
        ]);

        if ($validator->passes()) {
            if (Auth::check()) {
                $clientUpdate = Client::where('id', $id)
                    ->update([
                        'name' => $request->input('name'),
                        'email' => $request->input('email'),
                        'address' => $request->input('address'),
                        'tel_no' => $request->input('telNo'),
                    ]);

                if ($clientUpdate) {
                    $client = Client::where('id', $id)->first();
                    return redirect()->route('client.show', ['client_id' => $client->id])
                        ->with('success', 'Client profile updated successful');
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
