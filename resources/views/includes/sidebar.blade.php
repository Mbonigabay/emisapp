<div class="sidebar" data-color="white" data-active-color="danger">
    <!--
  Tip 1: You can change the color of the sidebar using: data-color="white | black"

  -->

    <div class="logo">
        <a href="#" class="simple-text logo-normal">
            Logo goes Here
        </a>
    </div>

    <div class="sidebar-wrapper">
        <ul class="nav">

            <li class="{{Request::is('home') ? 'active' : ''}}">
                <a href="{{action('HomeController@index')}}">
                    <i class="nc-icon nc-chart-bar-32"></i>
                    <p>Dashboard</p>
                </a>
            </li>

            <li class="{{Request::is('expense*') ? 'active' : ''}}">
                <a href="{{action('ExpenseController@index')}}">
                    <i class="nc-icon nc-money-coins"></i>
                    <p>Expenses</p>
                </a>
            </li>

            <li class="{{Request::is('income*') ? 'active' : ''}}">
                <a href="{{action('IncomeController@index')}}">
                    <i class="nc-icon nc-money-coins"></i>
                    <p>Incomes</p>
                </a>
            </li>

            <li class="{{Request::is('employee*') ? 'active' : ''}}">
                <a href="{{action('EmployeeController@index')}}">
                    <i class="nc-icon nc-badge"></i>
                    <p>Employees</p>
                </a>
            </li>
            
            <li class="{{Request::is('client*') ? 'active' : ''}}">
                <a href="{{action('ClientController@index')}}">
                    <i class="nc-icon nc-single-02"></i>
                    <p>Client</p>
                </a>
            </li>

            {{-- <li class="{{Request::is('project*') ? 'active' : ''}}">
                <a href="{{action('ProjectController@index')}}">
                    <i class="nc-icon nc-tile-56"></i>
                    <p>Projects</p>
                </a>
            </li>

            <li class="{{Request::is('payroll*') ? 'active' : ''}}">
                <a href="{{action('PayRollController@index')}}">
                    <i class="nc-icon nc-bank"></i>
                    <p>Payroll</p>
                </a>
            </li> --}}
        </ul>
    </div>
</div>