@extends('layouts.portfolio')

@section('content')
<section class="container">
    <article>
        <h2 id="about">Hi. I'm Kyle.</br> Full Stack Web Developer near Waco, TX.</h2>
        <img src="{{ asset('/storage/public/profilepic.jpg')}}" width="200px" height="200px" class="profilepic" />
        <div class="content">
            <p>I first started coding websites back in the days of "clears" and "floats". Thankfully, the web has come a long way since then.</p>
            <p>Fast forward to {{ now()->year }} and I find myself much more interested in the data that makes modern websites work. It is amazing to me how much a website can do today. It's also amazing to me how many different tools we have at our disposal for creating these modern websites.</p>
            <p>So, which tools are the best? I believe there is no "one size fits all" approach to building websites and web apps. The requriements of the project determines which tools are best suited for the job. Sometimes a client side rendered SPA, using something like React or Vue, is the way to go. Other times a server rendered, multi-page application using something like Laravel or Django is a better approach. In other cases, a simple WordPress site is more than capable of getting the job done. I think one of a web developer's responsibilies is to be familiar with all of the different approaches and technologies available to them so they can choose the best stack to use when building a project. This is why I am committed to learning as many different technologies as I can.</p>
            <p>Here are the technologies that I currently use or am familiar with:</p>
            <div class="tags-list">
                <ul class="tags">
                    <li>Javascript</li>
                    <li>PHP</li>
                    <li>Python</li>
                    <li>Java</li>
                    <li>CSS</li>
                    <li>HTML</li>
                </ul>
                <ul class="tags">
                    <li>React</li>
                    <li>Gatsby</li>
                    <li>Laravel</li>
                    <li>WordPress</li>
                    <li>Django</li>
                    <li>Tailwind</li>
                    <li>Bootstrap</li>
                </ul>
                <ul class="tags">
                    <li>GIT and GitHub</li>
                    <li>NPM</li>
                    <li>Gulp</li>
                    <li>Axios</li>
                    <li>Composer</li>
                    <li>VS Code</li>
                    <li>Laragon</li>
                </ul>
            </div>
            <p>This is what I am currently learning or diving deeper into:</p>
            <ul class="tags">
                <li>Node.js and Express</li>
                <li>Vue JS</li>
                <li>Docker</li>
                <li>Python</li>
                <li>SQL</li>
            </ul>
            <p>Another responsibility of web developers, in my opinion, is to know when not to overcomplicate things. Just because I know how to build a UI with React, it doesn't necessarily mean I should use it, along with it's 1500 plus dependencies, to build a brochure website with a contact form. Not that I'm saying dependencies are necessarily a bad thing - there is no sense in me "reinventing the wheel" either. If I need a bit of functionality that has been done before, and done well, there is no reason why I shouldn't include it into the project that I'm building if I can. The key is to find a happy balance and make sure that the end product works well and is maintainable.</p>
            <p>This is just a bit about my philosophy on web development. If you want to learn more, hire me, see my resume, or just talk shop, please send me an email:
            </p>
            <ul class="tags email">
                <li class="copy-li" data-clipboard-text="kyle@kylemerl.com">kyle@kylemerl.com<button class="btn-sm secondary copy-btn" data-clipboard-text="kyle@kylemerl.com"><i class="fa fa-copy"></i></button></li><span class="copied-success">Copied!</span>



            </ul>
        </div>
        <div class="pagination">
            <a class="next" href="/details/cabooselight">See My Work <i class="fa fa-arrow-right"></i></a>
        </div>
    </article>


</section>
@endsection
