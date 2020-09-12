@extends('layout.app')

@section('content')
    <main id="home">
        <div class="case-numbers-wrapper">
            <div class="case-numbers">
                <h1>{{ $fortnight_average }}</h1>
                <p class="text-uppercase mt-4">Current 14 day average<br>for COVID-19 cases</p>
            </div>
        </div>
        <div class="foot mb-2">
            <p class="text-muted small"><i class="fas fa-map-marker-alt mr-2"></i>Melbourne, VIC</p>
            <p class="text-muted small">Updated {{ $last_updated->diffForHumans() }} - data from <a class="text-light" href="https://www.dhhs.vic.gov.au/victorian-coronavirus-covid-19-data">dhhs.vic.gov.au</a></p>
        </div>
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- bottom-bar -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-7562176647521925"
             data-ad-slot="6366678828"
             data-ad-format="auto"
             data-full-width-responsive="true"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </main>
@endsection
