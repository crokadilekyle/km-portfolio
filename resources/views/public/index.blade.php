@extends('layouts.portfolio')

@section('content')
<header class="hero">
    <h1><span>Kyle Merl </span>Fullstack Web Developer</h1>
</header>
<section class="container">
    <h2>Recent Projects</h2>
    <main>
        @foreach ($projects as $project)
        <article class="list-project">
            <header class="list-project-header">
                <a href="/details/{{ $project->slug }}" class="list-project-title">
                    <h3>{{ $project->title }}</h3>
                </a>
            </header>
            <div class="list-project-content">
                @if($project->featured_image)
                <a href="/details/{{ $project->slug }}">
                    <img src="{{ asset('storage/'.$project->featured_image)}}" width="200px" height="200px" />
                </a>
                @endif

                {{-- <div>{{ $project->trixRichText }}</div> --}}
            {{-- <div>{!! $project->trixRender("content") !!}</div> --}}
            <p class="list-project-excerpt">{{ $project->excerpt }}</p>
            </div>
            <!--list-project-content-->
            <footer class="list-project-footer">
                <a class="btn" href="/details/{{ $project->slug }}" alt={{ $project->title }}>Project Details</a>
            </footer>
        </article>
        @endforeach
    </main>
</section>

@endsection
