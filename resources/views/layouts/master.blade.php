<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/loader.css')}}">
    <style>
        .brand{
            position: absolute;
            left: 50%;
            top: 50%;
            margin: -35px 0 0 -56px;
            width: 112px;
            height: 70px;
            *zoom: 1;
}
    </style>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <title>@yield('title')</title>

</head>
<body>


    @yield('content')

    <script src="{{asset('js/loader/all.js')}}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{asset('js/loader/custom.js')}}"></script>
	<script>
		timeline(document.querySelectorAll('.timeline'), {
			forceVerticalMode: 700,
			mode: 'horizontal',
			verticalStartPosition: 'left',
			visibleItems: 4
		});
	</script>

</body>
</html>
