@extends('layout.app')

@section('content')
    <main id="home">
        <div class="case-numbers-wrapper">
            <div class="case-numbers">
                <h1>{{ $fortnight_average['metro'] }}</h1>
                <p class="small">Melbourne Metro</p>
                <h1 class="mt-5">{{ $fortnight_average['regional'] }}</h1>
                <p class="small">Regional Victoria</p>
                <p class="text-uppercase mt-4">Current 14 day average<br>for COVID-19 cases</p>
            </div>
        </div>
        <div class="foot mb-2">
            <p class="text-muted small"><i class="fas fa-map-marker-alt mr-2"></i>Melbourne, VIC</p>
            <p class="text-muted small">Updated {{ $last_updated->diffForHumans() }} - data from <a class="text-light" href="https://www.dhhs.vic.gov.au/victorian-coronavirus-covid-19-data">dhhs.vic.gov.au</a></p>
            <p class="text-muted small">(includes dhhs adjusted data)</p>
        </div>
    </main>
@endsection
