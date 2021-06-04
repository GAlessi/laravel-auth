@extends('layouts.main-layout')
@section('content')
    <main class="home">

        <h1>Cars:</h1>
        <ul class="mainList">
            @foreach ($cars as $car)
                <li>
                    <h2>
                        <span>Car name:</span>
                        {{$car -> name}}
                        <a href="{{route('editCar', $car -> id)}}">
                            &#9998;
                        </a>
                        <a href="{{route('destroy', $car -> id)}}">
                            &#10060;
                        </a>
                    </h2>
                    <h2>
                        <span>Model:</span>
                        {{$car -> model}}
                    </h2>
                    <h2>
                        <span>Cilindrata:</span>
                        {{$car -> KW}}kW
                    </h2>
                    <h2>
                        <span>Brand name:</span>
                        {{$car->brand-> name}}
                    </h2>

                    <h2>Pilots:</h2>
                    <ul>
                        @foreach ($car->pilots as  $pilot)
                            <li>
                                <h3><a href="{{ route('show', $pilot -> id) }}">
                                    {{$pilot -> name}}
                                    {{$pilot -> lastname}}
                                </a></h3>
                                Nationality: {{$pilot -> nationality}} </br>
                                Date of Birth: {{$pilot -> date_of_birth}}

                            </li>

                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ul>

    </main>
@endsection
