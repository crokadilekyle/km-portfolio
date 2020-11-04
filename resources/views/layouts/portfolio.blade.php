<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title><?php $title = "Kyle Merl | Web Development and Design"; echo $title;?> </title>
    <meta name="description" content="Design Portfolio for Kyle Merl - Web Development | UX Design | Video Editing and more." />
    <meta name="keywords" content="Kyle Merl, web design, web development, ux design, ui design" />

    <link href="{{ asset('/css/styles.css') }}" rel="stylesheet">
    <script src="https://use.fontawesome.com/9cead1c546.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.6/clipboard.min.js"></script>
</head>

<body>
    <nav class="navbar">
        <!-- Navbar for desktop -->
        <ul>
            <li><a href="/" alt="Kyle Merl Web Developer Portfolio">Kyle Merl - Web Developer</a></li>
            <li><a href="/" alt="projects" class="collapse">Projects</a></li>
            <li><a href="/about" alt="about" class="collapse">About</a></li>
            <li><a href="#" alt="menu" class="menu"></a></li>

        </ul>
        <!-- Dropdown Nav Menu for mobile -->
        <ul class="toggler">
            <li><a href="/" alt="projects">Projects</a></li>
            <li><a href="/about" alt="about">About</a></li>
        </ul>
    </nav>

    @yield('content')



    <footer>


        <a href="https://www.linkedin.com/in/kyle-merl-29505280/" target="_blank"><i class="fa fa-2x fa-linkedin-square" aria-hidden="true" style="color: #f7f7f7;"></i></a>
        <a href="https://github.com/crokadilekyle" target="_blank"><i class="fa fa-2x fa-github" aria-hidden="true" style="color: #f7f7f7;"></i></a>

        <p>&copy <?php echo date("Y"); ?> Kyle Merl</p>
    </footer>
    <script src="{{ asset('/js/functions.js') }}"></script>
    <script>
        var clipboard = new ClipboardJS('.copy-li');
        clipboard.on('success', function(e) {
            document.querySelector('.copied-success').classList.add('show');
            setTimeout(() => {
                document.querySelector('.copied-success').classList.remove('show');
            }, 2000)
        });

    </script>

</body>
</html>
