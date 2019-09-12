@extends('main')
@section('title', 'Accueil')
@section('pageTitle', 'Accueil')

@section('custom-css')
<link href="{{ URL::asset('/css/datatables.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    @parent
        <div class="row">
            <div class="col-xl-12 col-md-12 col-xs-12">
               <p>Page d'accueil...</p>
            </div>
        </div>
@endsection
