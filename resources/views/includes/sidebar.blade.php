<div class="sidebar" data-color="white">
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

                <li class="active">
                    <a href="{{action('HomeController@index')}}">
                        <i class="nc-icon nc-chart-bar-32"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li>
                    <a href="{{action('ExpenseController@index')}}">
                        <i class="nc-icon nc-money-coins"></i>
                        <p>Expenses</p>
                    </a>
                </li>

                <li>
                        <a href="{{action('IncomeController@index')}}">
                            <i class="nc-icon nc-money-coins"></i>
                            <p>Incomes</p>
                        </a>
                    </li>

                <li>
                    <a href="{{action('ProjectController@index')}}">
                        <i class="nc-icon nc-tile-56"></i>
                        <p>Projects</p>
                    </a>
                </li>
                <li>
                    <a href="{{action('EmployeeController@index')}}">
                        <i class="nc-icon nc-single-02"></i>
                        <p>Employees</p>
                    </a>
                </li>
                <li>
                    <a href="./payroll/index.html">
                        <i class="nc-icon nc-bank"></i>
                        <p>Payroll</p>
                    </a>
                </li>
                <li>
                        <a href="{{action('ClientController@index')}}">
                            <i class="nc-icon nc-bank"></i>
                            <p>Client</p>
                        </a>
                    </li>

            </ul>
        </div>
    </div>