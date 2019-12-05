// Datatables
$(function() {
    $('#myTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: '/users',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
        ]
    });
});

$(function() {
    $('#myTable2').DataTable({
        processing: true,
        serverSide: true,
        ajax: '/users',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
        ]
    });
});