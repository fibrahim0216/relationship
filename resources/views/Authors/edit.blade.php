<!DOCTYPE html>
<html>
<head>
	<title>Author Update</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2>Author Update</h2>
		<form class="form" action="" method="post">
			@csrf
			@method('patch')
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control" value="{{$author->name}}">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="email" class="form-control" value="{{$author->email}}">
			</div>

			<button type="submit" class="btn btn-success">Update</button>
		</form>
	</div>
</body>
</html>