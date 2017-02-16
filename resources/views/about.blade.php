<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<ul>

  @foreach ($names as $name)
  	<li>{{$name->names}}</li>
  @endforeach




  </ul>
</body>
</html>