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
        <div id="278289200">
            <script type="text/javascript">
                try {
                    window._mNHandle.queue.push(function (){
                        window._mNDetails.loadTag("278289200", "728x90", "278289200");
                    });
                }
                catch (error) {}
            </script>
        </div>
    </main>
@endsection
