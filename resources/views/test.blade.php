<!DOCTYPE html>
<html>
<head>
	<title>123</title>
</head>
<body>
123123 {{$name}}
@if ($name == 'fff')
	324234
@endif

@foreach ($list as $k)
{{$k}}
	@if ($k == 2)
		hahahahaa
	@endif
@endforeach

@section('sidebar')
	nihao
@show
	
</body>
</html>