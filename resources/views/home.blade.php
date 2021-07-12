<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>home</title>
    </head>
    <body>
        <div class="container">

            <ul>
                @foreach ($links as $link)
                    <li>
                        @if ($loop->first)
                            <a href="{{ url('/Home') }}">
                        @endif
                        <a href="/{{ $link }}"> {{ $link }} </a>
                        @if ($loop->first)
                            </a>
                        @endif
                    </li>
                @endforeach
            </ul>

            <h1> {{ $page }} </h1>
            <h1> {{ $msg }} </h1>


        </div>
    </body>
</html>