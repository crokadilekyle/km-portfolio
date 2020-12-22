@extends('layouts.portfolio')

@section('content')
<section class="container">
    <a href="{{$project->url}}" target="_blank" rel="noopener noreferrer">
        <h2>{{$project->title}}</h2>
    </a>
    <main style="flex-direction: column; justify-content: center">
        <img class="project-details-img" src="{{ asset('storage/'.$project->featured_image)}}" />
        {{-- <div class="project-content">{!! $project->trixRender('content') !!}</div> --}}
        <div class="content project-content">{!! $project->trixRender('content') !!}
            <p><a href="{{$project->url}}" target="_blank" rel="noopener noreferrer">Visit the site</a></p>
        </div>


        <div class="pagination">
            @if($previous)
            <a href="/details/{{$previous->slug}}"><i class="fa fa-arrow-left"></i> {{$previous->title}}</a>
            @endif
            @if($next)
            <a class="next" href="/details/{{$next->slug}}">{{$next->title}} <i class="fa fa-arrow-right"></i></a>
            @endif
        </div>
    </main>

</section>

@endsection
