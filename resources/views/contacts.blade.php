<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contacts</title>
</head>
<body>
    
    

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
   
    <h1> Contacts </h1>
</body>
</html>