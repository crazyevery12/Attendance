<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>16CSE PROJECT</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background: -webkit-linear-gradient(left, #35c2de , #efddd1);;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .logo-welcome {
                max-width: 40%;
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
                color: #02305c;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #02305c;
                padding: 0 25px;
                font-size: 14px;
                font-weight: 700;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
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
                    <img class="logo-welcome" src="{{ asset('images/logo.png') }}">
                </div>

                <div class="links">
                    <a href="http://vnuk.udn.vn/academic-year/?lang=en">Study</a>
                    <a href="http://vnuk.udn.vn/international-exchange-opportunities/?lang=en">International</a>
                    <a href="http://tuyensinhvnuk.edu.vn">Admission</a>
                    <a href="http://vnuk.udn.vn/research-introduction/?lang=en">Research</a>
                    <a href="http://vnuk.udn.vn/industry-relation-about/?lang=en">Industry</a>
                    <a href="http://vnuk.udn.vn/discovery/?lang=en">Discovery</a>
                </div>
            </div>
        </div>
    </body>
</html>
