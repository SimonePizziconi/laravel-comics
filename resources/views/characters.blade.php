{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')
    @include('partials.construction_page')
@endsection


@section('titlePage')
    chi siamo
@endsection
