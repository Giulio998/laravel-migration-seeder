@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Ecco tutti i treni di oggi</h1>
        <div class="row">
            @foreach ($trains as $train)
            <div class="col g-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">
                            <span class="fw-bold">Azienda : </span> {{ $train->company}}
                        </h5>
                        <hr>
                        <p class="card-text">
                            <span class="fw-bold">Codice treno : </span> {{ $train->train_number}}
                        </p>
                        <p class="card-text">
                            <span class="fw-bold">Stazione di partenza : </span> {{ $train->start_station}}
                        </p>
                        <p class="card-text">
                            <span class="fw-bold">Stazione di arrivo : </span> {{ $train->end_station}}
                        </p>
                        <hr>
                        <h6 class="card-subtitle mb-2 text-muted">
                            <span class="fw-bold">Partenza : </span> {{ $train->departure}}
                        </h6>
                    
                        <h6 class="card-subtitle mb-2 text-muted">
                            <span class="fw-bold">Arrivo : </span> {{ $train->arrival}}
                        </h6>

                        
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
    </div>
@endsection