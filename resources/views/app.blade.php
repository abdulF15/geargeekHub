<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>geargeek-hub</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <!-- fontGoogle -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

</head>
<body class="mainColor poppins-regular">
    @include('layouts.navbar')

    <div class="container maxWidth transparant rounded" style="margin-top:10rem;">
        @yield('content')
    </div>

    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/typed.umd.js') }}"></script>
    <script>
        var typed = new Typed('#element', {
          strings: ['Elevate Your Gaming Experience with GearGeek Hub!', 'Where Gaming Gear Meets Geek Passion!','Empowering Gamers, One Gear at a Time!'],
          typeSpeed: 70,
          loop:true,
        });
    </script>
</body>
</html>
