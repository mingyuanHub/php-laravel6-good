<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
</head>
	<body>
		<div>
			<div>
				@section('sidebar')
					This is the main sidebar.
				@show
			</div>
			
			<div class="container">
				@yield('content', View::make('a1008.content'))

				@yield('name', 1231213)

				@component('a1008.slot')				
					slotttttttttt
				@endcomponent
			</div>

			@componentFirst(['ddd','a1008.slot'])
				@slot('title')
					tittttt
				@endslot			
				slottdddddddd
			@endcomponent

			<div>
				@section('footer')
					This is the main footer.
				@show
			</div>

			{{asset('favicon.ico')}}
			{{public_path('favicon.ico')}}
		</div>
	</body>
</html>