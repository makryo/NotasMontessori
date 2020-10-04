
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            body {
                background: linear-gradient(-45deg, #fdfdfd, #a9e9f3, #6acff3, #f5f5f5);
                background-size: 400% 400%;
                animation: gradient 15s ease infinite;
            }

            @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <img src="https://u9basq.by.files.1drv.com/y4pBJohE4SbaNuti9rV3OjwNamhdiRlPZqVzXpD7Nd9k5oaC6301kryl6JrdsqzCZc-CyH6tsa03e2PhQn6INKz3uYLnrdcqq2USSamSPRTs22KIiEBfABT5B4b8tcG5wYvmGM8VBIqrty7e9VoSVPuh21lF8S7gcDE-i10QIv1gAcyEITeLSoVXjC1ftSGyq3wGD6pxJKfMB-PRsGQzritOVSpUBGhchOiJlgLCPfl1WM/logo.png?psid=1" alt="logo">
                    <br>
                    Colegio Montessori
                </div>

                <div class="links">
                    <a href="https://www.facebook.com/colegiomontessoriediver">Facebook</a>
                    <a href="https://laracasts.com">Youtube</a>
                    <a href="https://laravel-news.com">Twitter</a>
                    <a href="https://blog.laravel.com">Instagram</a>
                    <a href="https://nova.laravel.com">GooglePlus</a>
                </div>
            </div>
        </div>
    </body>
</html>
