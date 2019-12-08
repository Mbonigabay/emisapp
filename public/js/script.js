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