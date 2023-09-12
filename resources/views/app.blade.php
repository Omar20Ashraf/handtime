<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Meta -->
    <link rel="icon" href="{{ asset('style') }}/images/fevicon/fevicon.png" type="image/gif" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>HandTime</title>


    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('style') }}/css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!-- font awesome style -->
    <link href="{{ asset('style') }}/css/font-awesome.min.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{ asset('style') }}/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('style') }}/css/responsive.css" rel="stylesheet" />

    @vite('resources/js/app.js')
    @inertiaHead

</head>

<body>
    @inertia

    <!-- jQuery -->
    <script type="text/javascript" src="{{ asset('style') }}/js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
    {{-- <script type="text/javascript" src="{{ asset('style') }}/js/popper.min.js"></script> --}}
    <!-- bootstrap js -->
    <script type="text/javascript" src="{{ asset('style') }}/js/bootstrap.js"></script>
    <!-- custom js -->
    <script type="text/javascript" src="{{ asset('style') }}/js/custom.js"></script>


</body>

</html>
