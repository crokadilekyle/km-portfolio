@extends('layouts.portfolio')

@section('content')
<section class="container">
    <article>
        <h2 id="about">Hi. I'm Kyle.</br> Full Stack Web Developer near Waco, TX.</h2>
        <img src="{{ asset('/storage/public/profilepic.jpg')}}" width="200px" height="200px" class="profilepic" />
        <div class="content about-content">
            <p>I first started coding websites back in the days of "clears" and "floats". Thankfully, the web has come a long way since then.</p>
            <p>Fast forward to {{ now()->year }} and I find myself much more interested in the data that makes modern websites work. It is amazing to me how much a website can do today. It's also amazing to me how many different tools we have at our disposal for creating these modern websites.</p>
            <p>So, which tools are the best? I believe there is no "one size fits all" approach to building websites and web apps. The requriements of the project determines which tools are best suited for the job. Sometimes a client side rendered SPA, using something like React or Vue, is the way to go. Other times a server rendered, multi-page application using something like Laravel or Django is a better approach. In other cases, a simple WordPress site is more than capable of getting the job done. I think one of a web developer's responsibilies is to be familiar with all of the different approaches and technologies available to them so they can choose the best stack to use when building a project. This is why I am committed to learning as many different technologies as I can.</p>
            <h3>Technologies</h3>
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
            <h3>My Development Process</h3>
            <p>When I take on a new project the first thing I do is determine what the client's needs are and what technology stack will best fit those needs. If necessary, I create wireframes and/or a database schema next. For almost every project I also create a GitHub Repository for version control and a Trello Board to help me prioritize my tasks. If the client is familiar with Trello I will give them access to the board. This way they can leave comments, report bugs, etc in Trello.</p>
            <p>When I develop the website or app I usually build the basic skeleton of the project in the main GIT branch first. After that I create seperate branches for each different part the development process. I also create seperate branches when I am doing bug fixes or experimenting with different ideas. Often times I will also use GIT for deployment.</p>
            <p>This is a basic summary of my development process and ofcourse it varies from project to project. If you want to learn more, hire me, see my resume, or just talk shop, please send me an email:
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
