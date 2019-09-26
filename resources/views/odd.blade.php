<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>ODD</title>
</head>
<body>
        @include ('elem.header')
    <main>
        <ul>
        @foreach ($arr as $item)
        <li>{{ $item }}</li>            
        @endforeach
        </ul>
    </main>


        @include ('elem.footer')
    
</body>
</html>