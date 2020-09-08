<!DOCTYPE html>
<html>
<head>
	<title>Author Create</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2>Author Create</h2>
		<form class="form" action="/authors/create" method="POST">
			@csrf
			<div class="form-group">
				<label>Author Name</label>
				<input type="text" name="firstname" class="form-control">
			</div>
			<div class="form-group">
				<label>Author Email</label>
				<input type="text" name="lastname" class="form-control">
			</div>

			<button type="submit" class="btn btn-success">Create</button>
		</form>
	</div>
</body>
</html>