@extends('layouts.portfolio')

@section('content')
<section class="container">
    <article>
        <h2 id="about">Hi. I'm Kyle. I'm a Web Developer.</h2>
        <img src="{{ asset('/storage/public/profilepic.jpg')}}" width="200px" height="200px" class="profilepic" />
        <div class="content">
            <p>About me yo</p>
        </div>
    </article>
</section>
@endsection
