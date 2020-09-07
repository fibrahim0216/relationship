<!DOCTYPE html>
<html>
<head>
	<title>Users Edit</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2>User Edit</h2>
		<form class="form" action="" method="post">
			@csrf
			@method('patch')
			<div class="form-group">
				<label>First Name</label>
				<input type="text" name="firstname" class="form-control" value="{{$user->firstname}}">
			</div>
			<div class="form-group">
				<label>Last Name</label>
				<input type="text" name="lastname" class="form-control" value="{{$user->lastname}}">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="email" class="form-control" value="{{$user->email}}">
			</div>
			<div class="form-group">
				<label>Phone</label>
				<input type="number" name="phone" class="form-control" value="{{$user->phone}}">
			</div>
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="username" class="form-control" value="{{$user->username}}">
			</div>

			<button type="submit" class="btn btn-success">Update</button>
		</form>
	</div>
</body>
</html>