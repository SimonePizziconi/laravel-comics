@php
    $comics = config('comics.comics');
@endphp

{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')
    <section class="jumbotron">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="Jumbotron">
    </section>
    <section class="comics-list">
        <div class="content">
            @include('partials.card')
            <div class="label label-top">CURRENT SERIES</div>
            <div class="label label-down">LOAD MORE</div>
        </div>
    </section>
@endsection


@section('titlePage')
    Comics
@endsection
