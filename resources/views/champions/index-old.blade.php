@extends('main')
@section('title', 'Champions')
@section('pageTitle', 'Champions')

@section('custom-css')
<link href="{{ URL::asset('/css/datatables.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    @parent
    <table id="datatable" class="table table-bordered">
        <thead>
            <tr class="text-center">
                <th>Champion</th>
                <th>Origines</th>
                <th>Classes</th>
                <th>Objets</th>
            </tr>
        </thead>
        <tbody>
            @foreach($champions as $champion)
                <tr>
                    <td class="align-middle">
                        <img class="champions-icon champions-icon-{{ $champion->cost->cost }}" src="/images/champions/{{ $champion->image }}" alt="{{ $champion->name }}" />
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
                        <div class="d-flex">
                            @foreach($champion->items as $item)
                            <div>
                                <div style="margin-left: 56px; margin-bottom:-5px;">
                                    <img class="image" style="border:1px solid #785a28;" src="/images/items/{{ $item->image }}" alt="{{ $item->name }}" width="32" height="32" /></span>
                                </div>
                                <div style="margin-left: 32px;">
                                    <img class="tree" src="/images/tree.png" alt="arbre" />
                                </div>
                                <div class="d-flex">
                                    <div style="margin-left: 16px;"><img class="image" style="border:1px solid #785a28;" src="/images/items/{{ $items[$item->item1_id]->image }}" alt="OSEF" width="32" height="32" /></div>
                                    <div style="margin-left: 48px;"><img class="image" style="border:1px solid #785a28;" src="/images/items/{{ $items[$item->item2_id]->image }}" alt="OSEF" width="32" height="32" /></div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('custom-js')
<script type="text/javascript" src="{{ URL::asset('/js/datatables.min.js') }}"></script>
<script>
    $(document).ready(function() {
        var url =
        "use strict";
        $('#datatable').DataTable( {
            "language": {
                "url": "/js/datatables-fr.json"
            }
        } );
    });
</script>
@endsection
