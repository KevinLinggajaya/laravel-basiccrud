<!DOCTYPE html>
<html>
<head>
	<title>
		@section('title')
		This is Title
		@show
	</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	{!! HTML::script('js/app.js') !!}
</head>
<body>
	@include('layout.header')
	<div id="tpl-content" class="container-fluid">
		<div class="row clearfix">
			<div class="col-md-12 content">
				@yield('content')
			</div>
		</div>
	</div>
	@include('layout.footer')
</body>
</html>