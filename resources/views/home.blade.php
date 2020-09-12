@extends('layout.app')

@section('content')
    <main id="home">
        <div class="case-numbers-wrapper">
            <div class="case-numbers">
                <h1>{{ $fortnight_average }}</h1>
                <p class="text-uppercase mt-4">Current 14 day average<br>for COVID-19 cases</p>
            </div>
        </div>
        <div class="foot">
            <p class="text-muted small"><i class="fas fa-map-marker-alt mr-2"></i>Melbourne, VIC</p>
            <p class="text-muted small">Updated {{ $last_updated->diffForHumans() }}</p>
        </div>
    </main>
@endsection
