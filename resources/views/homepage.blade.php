<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <style>
        body {
            margin: 0;
            font-family: 'Figtree', sans-serif;
            background-color: #f8fafc;
            background-image: url('{{ asset('assets/img/home-bg.jpg') }}');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .navbar {
            background-color: rgba(255, 255, 255, 0.95);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 1rem;
            position: fixed;
            width: 100%;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: 600;
            color: #333;
            text-decoration: none;
        }

        .navbar-links {
            display: flex;
            align-items: center;
        }

        .navbar-links a {
            margin-right: 1rem;
            text-decoration: none;
            color: #555;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .navbar-links a:hover {
            color: #333;
        }

        .footer {
            background-color: #2d3748;
            color: white;
            text-align: center;
            padding: 1rem;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body class="antialiased">

<!-- Navbar -->
<div class="navbar">
    <a href="#" class="navbar-brand">Bank System</a>

    <div class="navbar-links" style="padding: 30px;">
{{--                <a href="#">Home</a>--}}

                <a href="/login">Log in</a>

         <a href="/register">Register</a>

    </div>
</div>



<!-- Main Content -->
<div class="max-w-7xl mx-auto p-6 lg:p-8">
    <!-- Your main content goes here -->
</div>

<!-- Footer -->
<div class="footer">
    &copy; 2023 Your Company Name. All rights reserved.
</div>

</body>
</html>
