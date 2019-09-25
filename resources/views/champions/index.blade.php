@extends('main')
@section('title', 'Champions')
@section('pageTitle', 'Champions')

@section('custom-css')
<link href="{{ URL::asset('/css/datatables.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    @parent
        <div class="row">
            <div class="col-xl-6 col-md-6 col-xs-12">
                <div class="card">
                    <!--<div class="card-header">Origines</div>-->
                    <div class="card-body scroll-card">
                        <div class="custom-control custom-checkbox checkbox-lg">
                            <input id="origin-0"  type="checkbox" class="custom-control-input" checked>
                            <label class="custom-control-label" for="origin-0">
                                Toutes les origines
                            </label>
                        </div>
                        @foreach ($origins as $origin)
                            <div class="custom-control custom-checkbox checkbox-lg">
                                <input class="custom-control-input origins" type="checkbox" id="origin-{{ $origin->id }}" value="{{ $origin->id }}" checked>
                                <label class="custom-control-label" for="origin-{{ $origin->id }}">
                                    <img class="origins-icon" src="/images/origins/{{ $origin->image }}" alt="{{ $origin->name }}" /> {{ $origin->name }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-md-6 col-xs-12">
                <div class="card">
                    <!--<div class="card-header">Classes</div>-->
                    <div class="card-body scroll-card">
                        <div class="custom-control custom-checkbox checkbox-lg">
                            <input id="class-0"  type="checkbox" class="custom-control-input" checked>
                            <label class="custom-control-label" for="class-0">
                                Toutes les classes
                            </label>
                        </div>
                        @foreach ($classes as $class)
                            <div class="custom-control custom-checkbox checkbox-lg">
                                <input class="custom-control-input classes" type="checkbox" id="class-{{ $class->id }}" value="{{ $class->id }}" checked>
                                <label class="custom-control-label" for="class-{{ $class->id }}">
                                    <img class="classes-icon" src="/images/classes/{{ $class->image }}" alt="{{ $class->name }}" /> {{ $class->name }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-md-12 col-xs-12">
                <div class="custom-control custom-checkbox checkbox-lg">
                    <input class="custom-control-input" type="checkbox" value="{{ $origin->id }}" id="showItemBase" checked>
                    <label class="custom-control-label" for="showItemBase">
                        Afficher les objets de base
                    </label>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-xl-12 col-md-12 col-xs-12">
                <table id="datatable" class="table table-bordered table-striped" width="100%">
                    <thead>
                        <tr class="text-center">
                            <th>Champion</th>
                            <th>Origines</th>
                            <th>Classes</th>
                            <th>Objets</th>
                            <th>Tiers</th>
                            <th class="d-none">Origins id</th>
                            <th class="d-none">Classes id</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($champions as $champion)
                            <tr>
                                <td class="align-middle text-sm-center text-md-center text-lg-left text-xl-left">
                                    <img class="champions-icon champions-icon-{{ $champion->cost_cost }}" src="/images/champions/{{ $champion->image }}" alt="{{ $champion->name }}" />
                                    <span class="d-none d-xl-inline d-lg-line">{{ $champion->name }}</span>
                                </td>
                                <td class="align-middle text-sm-center text-md-center text-lg-left text-xl-left">
                                    @foreach($champion->origins as $origin)
                                        <img class="origins-icon" src="/images/origins/{{ $origin->image }}" alt="{{ $origin->name }}" />
                                        <span class="d-none d-xl-inline d-lg-line">{{ $origin->name }}<br /></span>
                                    @endforeach
                                </td>
                                <td class="align-middle text-sm-center text-md-center text-lg-left text-xl-left">
                                    @foreach($champion->classes as $class)
                                        <img class="classes-icon" src="/images/classes/{{ $class->image }}" alt="{{ $class->name }}" />
                                        <span class="d-none d-xl-inline d-lg-line">{{ $class->name }}<br /></span>
                                    @endforeach
                                </td>
                                <td>
                                    <div class="d-flex" style="align-items: center; justify-content: center;">
                                        @foreach($champion->items as $item)
                                            @if($item->recommended)
                                                <div>
                                                    <div style="margin-left: 40px; margin-bottom:-5px;">
                                                        <img class="item-image" src="/images/items/{{ $item->combined_image }}" alt="{{ $item->combined_name }}" width="32" height="32" /></span>
                                                    </div>
                                                    <div class="tree-container" style="margin-left: 28px;">
                                                        <img class="tree" src="/images/tree.png" alt="arbre" />
                                                    </div>
                                                    <div class="tree-container d-flex">
                                                        <div style="margin-left: 12px;"><img class="tree-container item-image" src="/images/items/{{ $item->base1_image }}" alt="{{ $item->base1_name }}" width="32" height="32" /></div>
                                                        <div style="margin-left: 24px;"><img class="tree-container item-image" src="/images/items/{{ $item->base2_image }}" alt="{{ $item->base2_name }}" width="32" height="32" /></div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <div class="tier-id tier-id-{{ $champion->tier_id}}">
                                        {{ $champion->tier_name }}
                                    </div>
                                </td>
                                <td class="d-none">
                                    @foreach($champion->origins as $origin)
                                        {{ ($loop->iteration > 1 ? ',' : '').$origin->id }}
                                    @endforeach
                                </td>
                                <td class="d-none">
                                    @foreach($champion->classes as $class)
                                        {{ ($loop->iteration > 1 ? ',' : '').$class->id }}
                                    @endforeach
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
<script type="text/javascript">
    var dataTable = "";
    var classes = [];
    var origins = [];
</script>
<script type="text/javascript" src="{{ URL::asset('/js/champions/index.js') }}"></script>
@endsection
