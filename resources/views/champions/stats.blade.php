@extends('main')
@section('title', 'Statistiques')
@section('pageTitle', 'Statistiques')

@section('custom-css')
<link href="{{ URL::asset('/css/datatables.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    @parent
    {{ csrf_field() }}
        <div class="row">
            <div class="col-xl-12 col-md-12 col-xs-12">
                <table id="datatable" class="table table-bordered table-striped" width="100%">
                    <thead>
                        <tr>
                            <th>Champion</th>
                            <th>DPS</th>
                            <th>Vitesse d'attaque</th>
                            <th>Dommage</th>
                            <th>Portée</th>
                            <th>PV</th>
                            <th>Mana</th>
                            <th>Armure</th>
                            <th>RM</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
@endsection

@section('custom-js')
<script type="text/javascript" src="{{ URL::asset('/js/datatables.min.js') }}"></script>
<script>
    $(document).ready(function() {
        var csrf = $('meta[name="csrf-token"]').attr('content');
        var url = "{{ route('champions.dataStats', '1') }}";
        var dataTable =
        "use strict";
        $('#datatable').DataTable( {
            'processing': true,
            'serverSide': true,
            'ajax': {
                'data' : { '_token': csrf },
                'type': 'POST',
                'url': url
            },
            'columns': [
                { 'data': 'name', 'name': 'name', 'defaultContent': '' },
                { 'data': 'dps', 'name': 'dps', 'defaultContent': '' },
                { 'data': 'attack_speed', 'name': 'attack_speed', 'defaultContent': '' },
                { 'data': 'damage', 'name': 'damage', 'defaultContent': '' },
                { 'data': 'range', 'name': 'range', 'defaultContent': '' },
                { 'data': 'health', 'name': 'health', 'defaultContent': '' },
                { 'data': 'mana', 'name': 'mana', 'defaultContent': '' },
                { 'data': 'armor', 'name': 'armor', 'defaultContent': '' },
                { 'data': 'magic_resistance', 'name': 'magic_resistance', 'defaultContent': '' }
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
    });
</script>
@endsection
