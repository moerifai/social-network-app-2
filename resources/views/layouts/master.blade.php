<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- insertion du title --}}
    <title>@yield('title', 'Page') - Vagabond.com</title>

    {{-- Ajout du CSS boostrap puis du main.css -> CSS principal --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::to('src/css/main.css') }}">
    {{-- Fonts --}}
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,900" rel="stylesheet">

</head>
<body>
    {{-- Insertion du _header.blade.php qui contient notre navbar -> Partials --}}
    @include('layouts.includes._header')
    {{-- Insertion du contenu --}}

        @yield('content')


    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> 
    <script src="https://use.fontawesome.com/62767dc7a7.js"></script>
    <script src="{{ URL::to('src/js/main.js') }}"></script>
    <script src="{{ URL::to('src/js/menu.js') }}"></script>
</body>
</html>
