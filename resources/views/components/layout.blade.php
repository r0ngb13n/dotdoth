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

        a:hover {
            text-decoration: underline;
        }

    </style>
</head>

<body>
    <div class="">
        <div class="container max-w-screen-xl mx-auto pt-10 px-10">

            <!-- navbar -->
            <x-navbar />

            <!-- main content -->
            <div class="pt-16">
                {{ $slot }}
            </div>

            <!-- footer -->
            <footer class="flex-none flex justify-between items-center h-24 border-t mt-20 pt-3">
                <div class="flex flex-col">
                    <h4>Liên lạc</h4>
                    <div class="flex space-x-3">
                        <a href="#" title="facebook">
                            <x-icons.facebook />
                        </a>

                        <a href="#" title="youtube">
                            <x-icons.youtube />
                        </a>

                        <a href="#" title="instagram">
                            <x-icons.instagram />
                        </a>
                    </div>

                </div>
                <div>
                    <h4>Đăng ký bài viết mới</h4>
                    <div>
                        <input class="border-b px-3 py-1 outline-none" type="text"
                            placeholder="Vui lòng đền email của bạn">
                        <button>OK</button>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>

</html>
