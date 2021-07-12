<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>home</title>
    </head>
    <body>
        <div class="container">
        <nav class="nav-bar">

            <ul>
                @foreach ($links as $link)
                    <li>
                        @if ($loop->first)
                            <a href="{{ url('/') }}"> {{ $link }}</a>
                        @else
                            <a href="/{{ $link }}"> {{ $link }} </a>
                        @endif
                    
                    </li>
                @endforeach
            </ul>
            
        </nav>    

      


        </div>
    </body>
</html>