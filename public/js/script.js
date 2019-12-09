// Employee Datatables
$(function() {
    $('#employeeTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: '/dt/employees',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'address', name: 'address' },
            { data: 'tel_no', name: 'tel_no' },
            { data: 'position', name: 'position' },

        ]
    });
});

// Client Datatables
$(function() {
    $('#clientTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: '/dt/clients',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'address', name: 'address' },
            { data: 'tel_no', name: 'tel_no' },

        ]
    });
});

// Expense Datatables
$(function() {
    $('#expenseTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: '/dt/expenses',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'type', name: 'type' },
            { data: 'balance', name: 'balance' },
            { data: 'done_by', name: 'done_by' },
            { data: 'date_of_transaction', name: 'date_of_transaction' },
        ]
    });
});

$(function() {
    $('#expenseTable2').DataTable({
        processing: true,
        serverSide: true,
        ajax: '/dt/expenses',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'balance', name: 'balance' },
        ]
    });
});

// Income Datatables
$(function() {
    $('#incomeTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: '/dt/incomes',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'type', name: 'type' },
            { data: 'balance', name: 'balance' },
            { data: 'from', name: 'from' },
            { data: 'date_of_transaction', name: 'date_of_transaction' },
        ]
    });
});

$(function() {
    $('#incomeTable2').DataTable({
        processing: true,
        serverSide: true,
        ajax: '/dt/incomes',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'balance', name: 'balance' },
        ]
    });
});
