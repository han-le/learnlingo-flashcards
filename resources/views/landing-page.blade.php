<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Neucha|Raleway:900&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/style.css">

    <title>Learn Lingo - English Flash Cards</title>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="http://learnlingo.co/">LEARNLINGO</a>

    <div class="navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ $current_language === 'vietnamese' ? 'active' : '' }}">
                <a class="nav-link" href="/">
                    Vietnamese
                </a>
            </li>
            <li class="nav-item {{ $current_language === 'english' ? 'active' : '' }}">
                <a class="nav-link" href="/?language=english">
                    English
                </a>
            </li>
        </ul>

    </div>
</nav>


<!-- HEADER -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="text-center mt-4">
                <h1>LEARNLINGO</h1>
            </div>
        </div>
    </div>
</div>

<!-- Body -->

<div class="container">
    <div class="row no-gutters">
        <!-- PIC 1 -->
        @foreach($post_data as $post)

            <div class="col-6 col-md-4">
                <div class="content">
                    <a href="{{ $post->url }}">
                        <img class="img-fluid" src="{{ $post->featured_img_url }}" alt="{{ $post->title }}">
                    </a>
                </div>
            </div>

        @endforeach
    </div>
</div>
<footer class="bd-footer text-muted">
    <div class="container-fluid p-3 p-md-5">
        <ul class="bd-footer-links">
            <li><a href="https://learnlingo.co/" target="_blank">Website</a></li>
            <li><a href="https://github.com/han-le" target="_blank">GitHub</a></li>
            <li><a href="https://twitter.com/LearnlingoC" target="_blank">Twitter</a></li>
            <li><a href="https://www.facebook.com/learnlingo.co" target="_blank">Facebook</a></li>
            <li><a href="https://www.instagram.com/learnlingo/" target="_blank">Instagram</a></li>
        </ul>
    </div>
</footer>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>




