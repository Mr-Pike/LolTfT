@extends('main')
@section('title', 'Objets')
@section('pageTitle', 'Objets')

@section('custom-css')
<link href="{{ URL::asset('/css/datatables.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    @parent
        <div class="row">
            <div class="col-xl-12 col-md-12 col-xs-12">
                <div class="d-flex container-item-global">
                    <div data-id="0" class="p-2 flex-fill text-center container-item active">
                        <img class="item-image-lg" src="/images/items/All.png" alt="Tous les objets" title="Tous les objets" />
                    </div>
                    @foreach($items as $item)
                        @if($item->item1_id == null && $item->item2_id == null)
                            <div data-id="{{ $item->id }}" class="p-2 flex-fill text-center container-item">
                                <img class="item-image-lg" src="/images/items/{{ $item->image }}" alt="{{ $item->name }}" title="{{ $item->name }}" />
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-xl-12 col-md-12 col-xs-12">
                <table id="datatable" class="table table-bordered table-striped" width="100%">
                    <thead>
                        <tr class="text-center">
                            <th>Objets bases</th>
                            <th>Objet combiné</th>
                            <th>Champions</th>
                            <th>Tiers</th>
                            <th class="d-none">Id objet base</th>
                            <th class="d-none">Nom des champions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($items as $item)
                            @if($item->item1_id != null && $item->item2_id != null)
                                <tr>
                                    <td class="align-middle text-sm-center text-md-center text-lg-left text-xl-left">
                                        <img class="item-image" src="/images/items/{{ $item->item1_image }}" alt="{{ $item->item1_name }}" width="32" height="32">
                                        + <img class="item-image" src="/images/items/{{ $item->item2_image }}" alt="{{ $item->item2_name }}" width="32" height="32">
                                    </td>
                                    <td class="align-middle text-sm-center text-md-center text-lg-left text-xl-left">
                                        <img class="item-image" src="/images/items/{{ $item->image }}" alt="{{ $item->name }}" width="32" height="32">&nbsp;&nbsp;{{ $item->name }}
                                    </td>
                                    <td class="align-middle text-sm-center text-md-center text-lg-left text-xl-left">
                                        @if($item->champions != null)
                                            @foreach($item->champions as $champion)
                                                <img class="champions-icon champions-icon-{{ $champion->cost_cost }}" src="/images/champions/{{ $champion->image }}" alt="{{ $champion->name }}" />
                                            @endforeach
                                        @endif
                                    </td>
                                    <td>
                                        <div class="tier-id tier-id-{{ $item->tier_id}}">
                                            {{ $item->tier_name }}
                                        </div>
                                    </td>
                                    <td class="d-none">
                                            {{ $item->item1_id }},{{ $item->item2_id }}
                                    </td>
                                    <td class="d-none">
                                        @if($item->champions != null)
                                            @foreach($item->champions as $champion)
                                                {{ $champion->name }}
                                            @endforeach
                                        @endif
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection

@section('custom-js')
<script type="text/javascript" src="{{ URL::asset('/js/datatables.min.js') }}"></script>
<script type="text/javascript">
    var dataTable = "";
    var itemSelected = 0;
</script>
<script type="text/javascript" src="{{ URL::asset('/js/items/index.js') }}"></script>
@endsection
