
@include('static.header')
<body>
<table border='10px'>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Name</th>
	</tr>
	@foreach($aboutUs as $about)
		<tr>
			<td>{{$about['id']}}</td>
			<td>{{$about['name']}}</td>
			<td>adfsd</td>
		</tr>
	@endforeach
</table>
</body>
@include('static.footer')