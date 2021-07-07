<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HELLO LARAVEL!</title>
</head>
<body>

        <h1>{{ $welcome }}</h1>
        
        @foreach($sentences as $sentence)
            <span>{{$sentence}}</span>
            @if(!$loop->last)
                    -                 
            @endif
        @endforeach


        <h1>{{ $end }}</h1>
</body>
</html>

