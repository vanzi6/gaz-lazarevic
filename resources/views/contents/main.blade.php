@extends('layouts.main')

@section('content')
<div>
    <img src="/images/main-smaller.png" class="img-fluid" alt="Responsive image">
    <div class="jumbotron jumbotron-fluid m-3 rounded bg-white">
        <div class="container">
            <h1>{{ env('APP_NAME') }}</h1>
            </br>
            <p>Nalazimo se u selu Koraćica ispod Kosmaja. Bavimo se proizvodnjom brašna od heljde, spelte, raži...</p>
            <p>Uslužno melvenje žitarica po dogovoru.</p>
            <p>Imamo i manju proizvodnju malina, jaja, raznog voća, rakije. Za ličnu upotrebu, bliži komšiluk i prijatelje.</p>
        </div>
    </div>
</div>
@endsection