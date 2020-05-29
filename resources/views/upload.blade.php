<html>

<body>
<form method="post" id="form" action="{{ url('upload') }}" enctype="multipart/form-data">
@csrf
<input type="file" name="file">
<input type="submit" value="submit">
</form>
</body>
</html>

