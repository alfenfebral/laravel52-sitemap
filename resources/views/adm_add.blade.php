<!DOCTYPE html>
<html>
<head>
	<title>Admin Sitemap | Add</title>
</head>
<body>

<form action="{{ url('admin/store') }}" method="POST">
	<input type="text" name="url"><br><br>
	<input type="text" name="priority"><br><br>
	<input type="submit" name="submit">
</form>


</body>
</html>