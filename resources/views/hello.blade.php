<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    @if ($value > 20 )
    <div style="background: orange">
        <h1>Value is greater than 20</h1>
    </div>
    @elseif ($value > 10)
    <div style="background: green">
        <h1>Value is greater than 10</h1>
    </div>
    @else
    <div style="background: red">
        <h1>Value is less than or equal 10</h1>
    </div>
    @endif
    <h1>
        hello {{$name}}
    </h1>
<div class="bg-[orang] flex items-center justify-center">
        @foreach ($students as $stu)
            <h1> {{$stu}}</h1>


        @endforeach
        </div>

    </body>

</html>
