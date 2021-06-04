@extends('layouts.main-layout')
@section('content')


    <main class="form">

        <form method="POST" action="{{ route('storeCar') }}">

            @csrf
            @method('POST')


            <div >
                <label for="name">Name:</label>
                <div>
                    <input id="name" type="text" name="name" required>
                </div>
            </div>
            <div >
                <label for="model">Model:</label>
                <div >
                    <input id="model" type="text" name="model" required>
                </div>
            </div>
            <div>
                <label for="KW">Cilindrata:</label>
                <div>
                    <input id="KW" type="number" name="KW" required>
                </div>
            </div>
            <div>
                <select id="brand_id" name="brand_id" required >
                    <option selected disabled>Select a Brand</option>
                    @foreach ($brands as $brand)
                        <option value="{{ $brand -> id }}">{{ $brand -> name }} ({{ $brand -> nationality }})</option>
                    @endforeach
                </select>
            </div>
            <div>
                <select id="pilots_id[]" name="pilots_id[]" required multiple>
                    @foreach ($pilots as $pilot)
                        <option value="{{ $pilot -> id }}">
                            {{ $pilot -> name }}
                            {{ $pilot -> lastname }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div>
                <div>
                    <button class="btn" type="submit">
                        CREATE
                    </button>
                </div>
            </div>
        </form>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </main>
@endsection
