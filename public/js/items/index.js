// Filter on origins and classes.
$.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {

        if (itemSelected === 0) {
            return true;
        }

        // Get row of the origin and class.
        var rowItemsId = data[4].split(' ').join('').split(',').map(Number);
        console.log(rowItemsId);

        if (rowItemsId.indexOf(itemSelected) !== -1) {
            return true;
        }

        return false;
    }
);

$(document).ready(function() {
    "use strict";
    dataTable =
    $('#datatable').DataTable( {
        "info": false,
        "responsive": true,
        "language": {
            "url": "/js/datatables-fr.json"
        },
        "columnDefs": [{
            "targets": 0,
            "width": "90px",
            "orderable": false,
            "searchable": false
        }, {
            "targets": 1,
            "width": "250px",
            "orderable": true,
            "searchable": true
        }, {
            "targets": 2,
            "orderable": false,
            "searchable": false
        }, {
            "targets": 3,
            "orderable": true,
            "searchable": false
        }, {
            "targets": 4,
            "orderable": false,
            "visible": false,
            "searchable": true
        }, {
            "targets": 5,
            "orderable": false,
            "visible": false,
            "searchable": true
        }],
        "lengthMenu": [[10, 25, -1], ['10', '25', 'Tout']]
    });

    $('.container-item').click( function() {
        // Remove & Add active class.
        $('.container-item').removeClass('active');
        $(this).addClass('active');

        // Get item selected.
        itemSelected = $(this).data().id;

        // Refresh datatable.
        dataTable.draw();
    } );
} );
