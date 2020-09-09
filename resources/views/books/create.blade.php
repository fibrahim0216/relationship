<!DOCTYPE html>
<html>
<head>
	<title>Book Create</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2>Book Create</h2>
		<form class="form" action="/books/create" method="post">
			@csrf
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control">
			</div>
			<div class="form-group">
				<label>Description</label>
				<input type="text" name="description" class="form-control">
			</div>
			<div class="form-group">
				<label>ISBN Number</label>
				<input type="text" name="isbn" class="form-control">
			</div>

			<button type="submit" class="btn btn-success">Submit</button>
		</form>
	</div>
</body>
</html>