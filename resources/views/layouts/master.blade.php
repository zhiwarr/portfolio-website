<!DOCTYPE html>
<html lang="en">

<head>
    <title>ZHIWAR Portfolio</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/a.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <style>
        .code-block {
            background-color: #2e3440;
            color: #d8dee9;
            padding: 20px;
            border-radius: 10px;
            font-family: 'Courier New', Courier, monospace;
            overflow-x: auto;
        }

        .chatcontainer {
            max-width: 540px;
            margin: 100px auto;
            border-radius: 20px;
        }

        .chat-messages {
            margin-top: 20px;
        }

        .chat-message {
            position: relative;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 8px;
            background-color: #3B4252;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .message-badge {
            position: absolute;
            top: -5px;
            right: -10px;
            width: 40px;
            height: 40px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            z-index: 999999999999999;
        }

        .message-content-container {
            display: flex;
            align-items: flex-start;
            background: #555E6F;
            border-radius: 5px;
            position: relative;
            /* Align items at the start (top) */
        }

        .message-line {
            width: 2px;
            height: 100%;
            /* Ensure the line spans the entire height of its container */
            background-color: #0c91a2 !important;
            /* Color of the vertical line */
            margin-right: 10px;
            /* Spacing between line and text */
        }

        .message-content {
            color: white;
            padding-left: 20px;
            /* Adjust based on badge width */
            margin-top: 20px;
            /* Adjust spacing as needed */
        }

        .message-content::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 4px;
            height: 100%;
            background-color: #FFBD39;
            border-radius: 50%;
            z-index: 9999;
        }
    </style>
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    @include('layouts.header')

    @yield('content')
    @include('layouts.footer')

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div>


    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('assets/js/scrollax.min.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>