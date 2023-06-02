<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=10" />
	<title>Wezom Practic</title>
	<link rel="apple-touch-icon" sizes="180x180" href="..assets/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="..assets/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="..assets/favicon/favicon-16x16.png">
	<link rel="manifest" href="..assets/favicon/site.webmanifest">
	<link rel="mask-icon" href="..assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	<link rel="stylesheet" href="{{mix('assets/main.css')}}">
</head>

<body>
	@include('inc.pop-up')
	@include('inc.drop-down-menu')
	@include('inc.search-form')
	<div class="content-wrapper">
		@include('inc.header')
		<div class="container clearfix">
			<main class="content">
				@yield('content')
			</main>
		</div>
		@include('inc.pre-footer')
		@include('inc.footer')
	</div>
	<script src="{{mix('assets/main.js')}}"></script>
</body>

</html>