{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiki Ticketing System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    @yield('content')
</div>

</body>
</html>




 --}}





<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">


    <link rel="stylesheet" href={{ asset("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css") }} integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofP+MMN0NqQByC4fPUG2DpBqQtkM6IkmM" crossorigin="anonymous">


    <link rel="shortcut icon" type="image/x-icon" href={{ asset("assets/img/ti_mini_logo.png") }}>
    <title>Tiki  online ticketing system</title>
    <link href={{ asset("https://fonts.googleapis.com/icon?family=Material+Icons") }} rel="stylesheet">
    <link rel="stylesheet" type="text/css" href={{ asset("assets/css/bootstrap.min.css") }}>
    <link rel="stylesheet" type="text/css" href={{ asset("assets/css/font-awesome.min.css") }}>
    <link rel="stylesheet" type="text/css" href={{ asset("assets/css/style.css") }}>


</head>

<body>

    @include('layouts.header')

    @include('layouts.sidenav')

    <div class="container mt-4">
        @yield('content')
        
    </div>
   
    @yield('deshboard_content')
    @yield('home_conent')



    














    <script src={{ asset("assets/js/jquery-3.2.1.min.js") }}></script>
	<script src={{ asset("assets/js/popper.min.js") }}></script>
    <script src={{ asset("assets/js/bootstrap.min.js") }}></script>
    <script src={{ asset("assets/js/jquery.slimscroll.js") }}></script>
    <script src={{ asset("assets/js/Chart.bundle.js") }}></script>
    <script src={{ asset("assets/js/chart.js") }}></script>
    <script src={{ asset("assets/js/app.js") }}></script>

</body>



</html>


