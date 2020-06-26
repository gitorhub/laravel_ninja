<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    {{-- bootstrap css--}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!-- Styles  /css public içinde direk erişim gibi düşünülmeli. public/css gerek yok img için de geçerli-->
    <link rel="stylesheet" href="/css/main.css">

    
</head>

<body>


  {{-- yield something here yolver yani kardeş --}}
@yield('content')

<footer>
  copyright (@php
      echo getdate()['year'] . ") - hdkalite.space"
  @endphp
</footer>



{{-- bootstrap js --}}
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" ></script>

</body>

</html>
