<!DOCTYPE html>
<html>
<head>
	<title>Admin Sitemap | Index</title>
</head>
<body>

<a href="{{ url('admin/add') }}">Add</a><br><br>
@foreach ($datas as $data)
	{{ $data->url }}<br>
	{{ $data->priority }}<br>
	{{ $data->created_at }}<br>
	{{ $data->updated_at }}<br>
	<a href="{{ url('admin/edit', $data->id_sitemap) }}">Edit</a> | <a href="{{ url('admin/delete', $data->id_sitemap) }}">Delete</a><br><br>
@endforeach
</body>
</html>