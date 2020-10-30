@extends('layouts.portfolio')

@section('content')
<h2>Recent Projects</h2>
<main>
    @foreach ($projects as $project)
    <article class="list-project">
        <header class="list-project-header">
            <h3 class="list-project-title">{{ $project->title }}</h3>
        </header>
        <div class="list-project-content">
            @if($project->featured_image)
            <img src="{{ asset('storage/'.$project->featured_image)}}" width="200px" height="200px" />
            @endif

            {{-- <div>{{ $project->trixRichText }}</div> --}}
        {{-- <div>{!! $project->trixRender("content") !!}</div> --}}
        <p class="list-project-excerpt">{{ $project->excerpt }}</p>
        </div>
        <!--list-project-content-->
        <footer class="list-project-footer">
            <a class="btn list-project-url" href=" {{ $project->url }}" alt={{ $project->url }}>Visit the Site</a>
        </footer>
    </article>
    @endforeach
</main>
@endsection
