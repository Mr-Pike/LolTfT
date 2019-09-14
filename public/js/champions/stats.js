$(document).ready(function() {
    "use strict";

    var className = 'text-right align-middle';

    // Datatable.
    var dataTable = $('#datatable').DataTable( {
        'processing': true,
        'serverSide': true,
        'ajax': {
            'data' : { '_token': csrf },
            'type': 'POST',
            'url': url
        },
        'columns': [
            { 'data': 'name', 'name': 'name', 'defaultContent': '', 'render': function(data, type, row) {
              return '<img class="champions-icon champions-icon-' + row.cost_id + '" src="/images/champions/' + row.image + '" alt="' + row.name + '" />' + row.name;
            } },
            { 'data': 'dps', 'name': 'dps', 'defaultContent': '', 'className': className },
            { 'data': 'attack_speed', 'name': 'attack_speed', 'defaultContent': '', 'className': className },
            { 'data': 'damage', 'name': 'damage', 'defaultContent': '', 'className': className },
            { 'data': 'range', 'name': 'range', 'defaultContent': '', 'className': className },
            { 'data': 'health', 'name': 'health', 'defaultContent': '', 'className': className },
            { 'data': 'mana', 'name': 'mana', 'defaultContent': '', 'className': className },
            { 'data': 'armor', 'name': 'armor', 'defaultContent': '', 'className': className },
            { 'data': 'magic_resistance', 'name': 'magic_resistance', 'defaultContent': '', 'className': className }
        ],
        "info": false,
        "responsive": true,
        "language": {
            "url": "/js/datatables-fr.json"
        },
        "columnDefs": [{
                "targets": 'no-sort',
                "orderable": false,
                "searchable": false
        }],
        "lengthMenu": [[6, 12, 18, -1], ['6', '12', '18', 'Tout']]
    });

    // User change level_id.
    $('#level_id').change(reloadDatatable);

    // Reload datatable.
    function reloadDatatable() {
        var levelId = $('#level_id').val();
        var nextUrl = new URL(levelId, url);

        // Reload.
        dataTable.ajax.url(nextUrl.href).load();
    }
});
