@extends('layouts.portfolio')

@section('content')
<article>
    @foreach ($projects as $project)
    <h3>{{ $project->title }}</h3>
    {{-- <div>{{ $project->trixRichText }}</div> --}}
    <div>{!! $project->trixRender("content") !!}</div>
    <p><a style="color: #325d79;" href=" {{ $project->url }}" alt={{ $project->url }}>{{ $project->url }}</a></p>

    @endforeach
</article>
@endsection
