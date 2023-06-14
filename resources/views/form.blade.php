<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Form</title>
	</head>
	<body>
	<form action="{{ route('form-sonuc') }}" method="POST">
		{{ csrf_field() }}
		<textarea name="text" id="" cols="30" rows="10"></textarea><br>
		<input name="input" type="submit" value="Sent">
	</form>
	</body>
</html>