@extends('layouts.portfolio')

@section('content')

<section class="container">
    <h2>Temperature and Humidity</h2>
    <main>

        <article class="list-project">
            <header class="list-project-header">
                <h3>Room: {{ $temperature->room }}</h3>
            </header>
            <div class="list-project-content">
                <p>Current Temperature:<br>{{ $temperature->temperature }}&#176C</p>
                <p>Current Relative Humidity:<br>{{ $temperature->humidity }}%</p>
                <p>Last Reading:<br>{{ $temperature->created_at }}</p>
            </div>
        </article>

    </main>
</section>


@endsection
