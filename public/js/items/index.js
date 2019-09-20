// Filter on origins and classes.
/*$.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {

        if (origins.length === 0 &&
            classes.length === 0
            ) {
                return true;
        }

        // Get row of the origin and class.
        var rowOrigins = data[5].split(' ').join('').split(',');
        var rowClasses = data[6].split(' ').join('').split(',');

        for (var i = 0; i < rowOrigins.length; i++) {
            if (origins.indexOf(rowOrigins[i]) !== -1) {
                return true;
            }
        }

        for (var i = 0; i < rowClasses.length; i++) {
            if (classes.indexOf(rowClasses[i]) !== -1) {
                return true;
            }
        }

        return false;
    }
);*/

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
            "visible": true,
            "searchable": true
        }, {
            "targets": 5,
            "orderable": false,
            "visible": false,
            "searchable": true
        }],
        "lengthMenu": [[10, 25, -1], ['10', '25', 'Tout']]
    });

    // User change classes or origins.
    /*$('.classes, .origins').change( function() {

        // Refresh datatable.
        dataTable.draw();
    } );*/
});
