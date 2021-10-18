<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/loader.css')}}">

    <title>Finder</title>
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
</head>
<body>
    <!-- LOADER -->
	<div id="preloader">

		<div class="loader-container">
			<div class="brand">
				<h1 class="text-white text-center">Finder</h1>
			</div>
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>

		</div>
	</div>
	<!-- END LOADER -->
	<div class="container">
		<div class="row">
         <h1>Hello everyone;welcome to Finder</h1>
		</div>
	</div>


	<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
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
