<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
        

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                width: 100vw;
                margin: 0 !important;
               
            }

            .full-height {
                height: 100vh; 
                width: 50vw;
                margin: 1vh auto; 
                z-index: 1000;         
            }

            .flex-center {
                /*align-items: center;*/
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
                font-size: 44px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .vue-component{
                margin: 3vh auto;
                padding: 3vh;
                border: 1px solid;
            }
            .uniform-width{
                width: 11vw;
            }
        </style>
    </head>
    <body>
        <div id="app">
            

            <div class="flex-center position-ref full-height">

                @if (Route::has('login'))
                    <div class="top-right links">
                        @if (Auth::check())
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ url('/login') }}">Login</a>
                            <a href="{{ url('/register') }}">Register</a>
                        @endif
                    </div>
                @endif

                <div class="content">
                    <div class="title m-b-md">
                        Write Off Your Vacations!
                    </div>

                    <div class="links">
                        <a href="https://laravel.com/docs">Other Tutorials</a>
                        <a href="https://laracasts.com">List of Destinations</a>
                        <a href="https://laravel-news.com">My Referal Program</a>
                        <a href="https://forge.laravel.com">Forge</a>
                        <a href="https://github.com/laravel/laravel">GitHub</a>
                    </div>

                    <div class="vue-component">
                        <background-image />
                    </div>
                    <div class="vue-component">
                        <question-carousel />
                    </div>
                </div>  
            </div>          
        </div>

        <script type="text/javascript" src="js/app.js"></script>
    </body>
</html>
