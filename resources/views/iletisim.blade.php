<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Form</title>
	</head>
	<body>
	<form action="{{ route('iletisim-sonuc') }}" method="POST">
		{{ csrf_field() }}

        <label for="musteri">musteri</label>
        <input type="text" name="musteri" id="musteri">
        <br>
        <label for="vade_sayisi">vade_sayisi</label>
        <input type="text" name="vade_sayisi" id="vade_sayisi">
        <br>
        <label for="odenen_vadeler">odenen_vadeler</label>
        <input type="text" name="odenen_vadeler" id="odenen_vadeler">
        <br>
        <label for="kalan_vadeler">kalan_vadeler</label>
        <input type="text" name="kalan_vadeler" id="kalan_vadeler">
        <br>
        <label for="filitreleme">filitreleme</label>
        <input type="text" name="filitreleme" id="filitreleme">
        <br>
        <input type="submit" name="ilet" value="gonder">
	</form>
	</body>
</html>