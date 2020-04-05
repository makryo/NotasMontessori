
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
                    <img src="https://lh3.googleusercontent.com/eoKk1Df-VfTAwDX3SMM4i8BJApp6ZjxXfLzg95tuUd2AjG8bDj773N0x46PrITTHhgMmKQbUvJWaJr9Cb_KdA2DMXRlhq8mm5SBQlEG20uCJ8dE8aJqIh_1_w6V6XdhEv0Ov9In8TaT7hh1tMGGiFlhyRReETSwB3rFU5klPTCSB_Eq6CUWs6BYqZkF9envF85HKKvyIiB2bLHj19jIEyOlrf2ajREn32ffwKRkk3JVomwTn0fSrGTTm0tX7i5v0lJlJ-uzLq7zRSP5mnjxY1pR7nV1jGWteLaXDWwSSXyefrS4TarDe0EDfDdf53Q25BHqPDSc61QPY_AOo1hF0f5-2E0CD5wICbDj8msa6vvT4s_-jWbYCx42Qgmwil44yOx0hfGCDbHaTUR4741vX3v5hPXM0SYfl7-ZqtSYSlnCm98SYyxNpINCyw0KiAmbjPdC6WDtvvfnpHstevf0eqxxD5o69dQ1k22X569_0I_vBePOukHxd5fDyyEYlxFLespyJNt7nJjGX8MFsuTZRHMAdb-EmtwxiEPpb6kLAyvTnLdc8ZwHwrpu-vzxEx58HrTE02opRQwQhb45wYJGuG83dX2HKVJiHVYrC8bKHFPf1rwfkUiVAqTgHX1TikrXiys44-qLBoqMMbh7B9WnarFE7QW_1eNS5qtZpaUKaVw0Iyw6UI6lGNa5iLWd4ZQ=w204-h194-no" alt="logo">
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
