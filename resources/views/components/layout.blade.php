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
        <div class="container max-w-screen-xl mx-auto pt-10 px-5 sm:px-10">

            <!-- navbar -->
            <x-navbar />

            <!-- main content -->
            <div class="pt-16">
                {{ $slot }}
            </div>

            <!-- footer -->
            <footer class="flex justify-between flex-col sm:flex-row items-center border-t mt-20 py-5">
                <div class="flex">
                    <div class="flex flex-shrink">
                        <div class="flex space-x-3 items-end">
                            <a href="#" title="facebook">
                                <x-icons.facebook />
                            </a>
                            <a href="#" title="youtube">
                                <x-icons.youtube />
                            </a>
                            <a href="#" title="instagram">
                                <x-icons.instagram />
                            </a>
                            <a href="mailto:hai@dotdoth.com" class="text-sm text-indigo-500">hai@dotdoth.com</a>
                        </div>
                    </div>
                </div>
                <div class="text-sm text-right flex-shrink flex-grow">
                    <p>Crafted by <a class="text-indigo-500" href="http://github.com/bangnokia/pekyll" target="_blank">pekyll<a/> with ❤️</p>
                </div>
            </footer>
        </div>
    </div>
</body>

</html>
