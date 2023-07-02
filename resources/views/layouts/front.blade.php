<!DOCTYPE html>
<html Content-Language="ID" lang="id" xml:lang="id">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{APP_NAME }} - Online</title>
    <link rel="icon" href="{{asset('img')}}/favicon.png">
    <meta name="description" content="Undangan digital berupa website untuk pernikahanmu. Lebih praktis, keren dan kekinian.">
    <meta name="keywords" content="Undangan digital, Website pernikahan, Undangan kekinian, Web undangan keren">
    <meta name="theme-color" content="#005CAA" />
    <meta name="author" content="codopro.id">

    <!-- Required CSS -->
    <link rel="stylesheet" href="{{asset('css')}}/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css')}}/line-icons.css">
    <link rel="stylesheet" href="{{asset('css')}}/froala_blocks.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,600|Roboto">

    <link rel="stylesheet" href="{{asset('css')}}/pikaday.css">
    <link rel="stylesheet" href="{{asset('css')}}/croppie.min.css">
    @yield('style')
</head>

<body>
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-md fixed-top">
                <div class="container">
                    <a class="navbar-brand" href="{{route('index')}}">
                        <img src="{{asset('img')}}/logo.png" height="35" alt="image">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav3" aria-controls="navbarNav3" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav3">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">BERANDA <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#fitur">FITUR</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#harga">HARGA</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#tema">TEMA</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#testi">TESTIMONI</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('login.index')}}" style="font-weight:bolder">LOGIN</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    @yield('content')

    <footer class="fdb-block footer-small footer">
        <div class="container">
            <div class="col-12 text-lg-left">
                <p class="lead footer-social">
                    <a href="https://twitter.com/mycodingxd" class="mx-2"><i class="lni-twitter-filled" aria-hidden="true"></i></a>
                    <a href="https://facebook.com/mycodingxd" class="mx-2"><i class="lni-facebook-filled" aria-hidden="true"></i></a>
                    <a href="https://instagram.com/mycodingxd" class="mx-2"><i class="lni-instagram-filled" aria-hidden="true"></i></a>
                </p>
            </div>
            <div class="row text-center">
                <div class="col">
                    <p class="text-footer" style="color:#fff;">&copy;2023 - {{date('Y')}} <a href="{{asset('')}}dofollow" target="_blank"><?= APP_NAME ?></a> - <a href="https://mycoding.net" rel="dofollow" target="_blank">MC Project</a> - <a href="https://401xd.com" rel="dofollow" target="_blank">401XD Group</a>.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{asset('js')}}/jquery-min.js"></script>
    <script src="{{asset('js')}}/popper.min.js"></script>
    <script src="{{asset('js')}}/bootstrap.min.js"></script>
    <script src="{{asset('js')}}/jquery.nav.js"></script>
    <script src="{{asset('js')}}/jquery.easing.min.js"></script>
    <script src="{{asset('js')}}/main.js"></script>
    <script src="{{asset('js')}}/moment-with-locales.js"></script>
    <script src="{{asset('js')}}/pikaday.js"></script>
    <script src="{{asset('js')}}/dropzone.js"></script>
    <script src="{{asset('js')}}/croppie.min.js"></script>
</body>

</html>