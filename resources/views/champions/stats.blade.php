@extends('main')
@section('title', 'Statistiques')
@section('pageTitle', 'Statistiques')

@section('custom-css')
<link href="{{ URL::asset('/css/datatables.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    @parent
    <div class="row">
        <div class="col-xl-12 col-md-12 col-xs-12">
            <form class="form-inline">
                <div class="form-group mb-2">
                    <label for="level_id">Niveau : &nbsp;</label>
                    <select class="custom-select custom-select-sm form-control form-control-sm" id="level_id">
                        @foreach($levels as $level)
                            <option value="{{ $level->id }}">{{ $level->level }}</option>
                        @endforeach
                    </select>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12 col-md-12 col-xs-12">
            <table id="datatable" class="table table-bordered table-striped" width="100%">
                <thead>
                    <tr class="text-center">
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
<script type="text/javascript">
    var csrf = $('meta[name="csrf-token"]').attr('content');
    var url = "{{ route('champions.dataStats', '1') }}";
    var dataTable = "";
</script>
<script type="text/javascript" src="{{ URL::asset('/js/champions/stats.js') }}"></script>
@endsection
