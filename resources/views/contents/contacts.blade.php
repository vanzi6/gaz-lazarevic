@extends('layouts.main')

@section('description', config('meta.contacts.description'))
@section('keywords', config('meta.contacts.keywords'))

@section('content')
<div class="jumbotron jumbotron-fluid m-3 rounded bg-white">
    <div class="container-fluid">
        <h1>Kontakti</h2>
        <br />
        <table class="w-75">
            <tr>
                <th>Telefon</th>
                <td>{{ config('constants.phone-number') }}</td>
            </tr>
            <tr>
                <th>E-mail</th>
                <td>{{ config('constants.email') }}</td>
            </tr>
            <caption>* Možete nam pisati na Facebook, Whatsapp ili Viber</caption>
        </table>
        <hr />
        <h1>Dostava</h2>
        <br />
        <p>Dostava može biti brzom poštom, npr. RoyalExpres, ili lično.</p>
        <br/>
        <hr />
        <p>
            <em>
                Naručite nećemo se ljutiti!
                <br/>
                Naručite dan pre, jer volimo da bude sveže!
            </em>
        </p>
    </div>
</div>
@endsection