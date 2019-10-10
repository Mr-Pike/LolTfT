// Filter on origins and classes.
$.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {
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
            "targets": 3,
            "orderable": false
        }, {
            "targets": 4,
            "orderable": true
        }, {
            "targets": 5,
            "orderable": false,
            "visible": false
        }, {
            "targets": 6,
            "orderable": false,
            "visible": false
        }],
        "lengthMenu": [[10, 25, -1], ['10', '25', 'Tout']]
    });
    refreshClassesOrigins();

    // User change classes or origins.
    $('.classes, .origins').change(refreshClassesOrigins);

    // Show / Hide items base.
    $('#showItemBase').change( function () {
        $('.tree-container').hide();
        if ($(this).is(':checked')) {
            $('.tree-container').show();
        }
    } );

    // Check/Uncheck all origins.
    $('#origin-0').change( function () {
        $('.origins').prop('checked', $(this).is(':checked'));
        refreshClassesOrigins();
    });

    // Check/Uncheck all classes.
    $('#class-0').change( function () {
        $('.classes').prop('checked', $(this).is(':checked'));
        refreshClassesOrigins();
    });


    function refreshClassesOrigins() {
        // Get classes checked.
        classes = [];
        $('.classes:checked').each( function() {
            classes.push($(this).val());
        } );

        // Get origins checked.
        origins = [];
        $('.origins:checked').each( function() {
            origins.push($(this).val());
        } );

        $('#class-0').prop('checked', (classes.length == $('.classes').length));
        $('#origin-0').prop('checked', (origins.length == $('.origins').length));

        // Refresh datatable.
        dataTable.draw();
    }
});
