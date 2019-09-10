@extends('main')
@section('title', 'Champions')
@section('pageTitle', 'Champions')

@section('custom-css')
<link href="{{ URL::asset('/css/datatables.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    @parent
        <div class="row">
            <div class="col-xl-12 col-md-12 col-xs-12">
                <table id="datatable" class="table table-bordered table-striped" width="100%">
                    <thead>
                        <tr class="text-center">
                            <th>Champion</th>
                            <th>Origines</th>
                            <th>Classes</th>
                            <th>Objets</th>
                            <th>Tiers</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($champions as $champion)
                            <tr>
                                <td class="align-middle">
                                    <img class="champions-icon champions-icon-{{ $champion->cost_cost }}" src="/images/champions/{{ $champion->image }}" alt="{{ $champion->name }}" />
                                    {{ $champion->name }}
                                </td>
                                <td class="align-middle">
                                    <span>
                                    @foreach($champion->origins as $origine)
                                        <img class="origins-icon" src="/images/origins/{{ $origine->image }}" alt="{{ $origine->name }}" />
                                        {{ $origine->name }}<br />
                                    @endforeach
                                    </span>
                                </td>
                                <td class="align-middle">
                                    <span>
                                    @foreach($champion->classes as $class)
                                        <img class="classes-icon" src="/images/classes/{{ $class->image }}" alt="{{ $class->name }}" />
                                        {{ $class->name }}<br />
                                    @endforeach
                                    </span>
                                </td>
                                <td>
                                    <div class="d-flex" style="width:300px;">
                                        @foreach($champion->items as $item)
                                        <div>
                                            <div style="margin-left: 56px; margin-bottom:-5px;">
                                                <img class="item-image" src="/images/items/{{ $item->combined_image }}" alt="{{ $item->combined_name }}" width="32" height="32" /></span>
                                            </div>
                                            <div style="margin-left: 32px;">
                                                <img class="tree" src="/images/tree.png" alt="arbre" />
                                            </div>
                                            <div class="d-flex">
                                                <div style="margin-left: 16px;"><img class="item-image" src="/images/items/{{ $item->base1_image }}" alt="{{ $item->base1_name }}" width="32" height="32" /></div>
                                                <div style="margin-left: 48px;"><img class="item-image" src="/images/items/{{ $item->base2_image }}" alt="{{ $item->base2_name }}" width="32" height="32" /></div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <div class="tier-id tier-id-{{ $champion->tier_id}}">
                                        {{ $champion->tier_name }}
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection

@section('custom-js')
<script type="text/javascript" src="{{ URL::asset('/js/datatables.min.js') }}"></script>
<script>
    $(document).ready(function() {
        var dataTable =
        "use strict";
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
                "orderable": false
            }]
            // "lengthMenu": [[6, 12, 18, -1], ['6', '12', '18', 'Tout']]
        });
    });
</script>
@endsection
