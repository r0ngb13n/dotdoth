<!DOCTYPE html>
<html>

<head>
    <title>{{ $title ?? 'Home page' }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <style>
        html,
        body {
            font-family: 'Montserrat', sans-serif;
        }
    </style>
</head>

<body>
    <div class="">
        <div class="container max-w-screen-lg mx-auto pt-0 sm:pt-0 px-5 md:px-16 sm:px-32">

            <!-- navbar -->
            <x-navbar />

            <!-- main content -->
            <div class="pt-5 sm:pt-12">
                {{ $slot }}
            </div>

            <!-- footer -->
            <x-footer />
            
        </div>
    </div>
</body>

</html>
