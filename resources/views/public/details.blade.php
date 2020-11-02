@extends('layouts.portfolio')

@section('content')
<section class="container">
    <h2>{{$project->title}}</h2>
    <main>
        <p>{{$project->excerpt}}</p>
    </main>


</section>

@endsection
