<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

      <!-- Site Icons -->
      <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
      <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/home_style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('css/loader.css')}}">
     <script src="{{asset('js/modernizer.js')}}"></script>


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
