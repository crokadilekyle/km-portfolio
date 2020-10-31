@extends('layouts.portfolio')

@section('content')
<h2>{{$project->title}}</h2>
<main>
    <p>{{$project->excerpt}}</p>
</main>
@endsection
