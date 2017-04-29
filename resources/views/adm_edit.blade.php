<!DOCTYPE html>
<html>
<head>
	<title>Admin Sitemap | Add</title>
</head>
<body>

<form action="{{ url('admin/update', $edit->id_sitemap) }}" method="POST">
	<input type="text" name="url" value="{{ $edit->url }}"><br><br>
	<input type="text" name="priority" value="{{ $edit->priority }}"><br><br>
	<input type="submit" name="submit">
</form>


</body>
</html>