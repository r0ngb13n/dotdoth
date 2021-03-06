<!DOCTYPE html>
<html>
<head>
	<title>{{ $title ?? 'Home page' }}</title>

	<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">  
	<style>
		html, body {
			font-family: 'Source Sans Pro', sans-serif;
		}
		a {
			color: green;
		}
		a:hover {
			text-decoration: underline;
		}
		.post-content p {
			padding: 1rem 0;
		}
	</style>
</head>
<body>
	<div class="pl-2 pt-2 max-w-xl">

		<x-navbar />

		<div class=" pt-5">
			{{ $slot }}
		</div>
	</div>
</body>
</html>
