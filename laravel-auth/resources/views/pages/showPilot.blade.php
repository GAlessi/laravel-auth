@extends('layouts.main-layout')
@section('content')
    <main class="home">

        <h1>Pilot:</h1>
        <ul class="mainList">
                <li>
                    <h2>
                        <span>Pilot name:</span>
                        {{$pilot -> name}}
                    </h2>
                    <h2>
                        <span>Pilot lastname:</span>
                        {{$pilot -> lastname}}
                    </h2>
                    <h2>
                        <span>Nationality:</span>
                        {{$pilot -> nationality}}
                    </h2>
                    <h2>
                        <span>Date of Birth:</span>
                        {{$pilot -> date_of_birth}}
                    </h2>

                    <h2>Cars:</h2>
                    <ul>
                        @foreach ($pilot -> cars as  $car)
                            <li>
                                Car name: {{$car -> name}}</br>
                                Car Model: {{$car -> model}}</br>
                                Cilindrata {{$car -> KW}}KW </br>

                                Brand Name: {{$car->brand -> name}}
                            </li>

                        @endforeach
                    </ul>
                </li>
        </ul>

    </main>
@endsection
