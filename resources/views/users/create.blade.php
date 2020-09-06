<!DOCTYPE html>
<html>
<head>
	<title>Users List</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2>User List</h2>
		<form class="form" action="/users/create" method="post">
			@csrf
			<div class="form-group">
				<label>First Name</label>
				<input type="text" name="firstname" class="form-control">
			</div>
			<div class="form-group">
				<label>Last Name</label>
				<input type="text" name="lastname" class="form-control">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="email" class="form-control">
			</div>
			<div class="form-group">
				<label>Phone</label>
				<input type="number" name="phone" class="form-control">
			</div>
			<div class="form-group">
				<label>Date of birth</label>
				<input type="date" name="date_of_birth" class="form-control">
			</div>
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="username" class="form-control">
			</div>

			<h2>Profile Information</h2>

			<div class="form-group">
				<label>Profile Pic</label>
				<input type="text" name="profile_pic" class="form-control">
			</div>
			<div class="form-group">
				<label>Bio</label>
				<input type="text" name="bio" class="form-control">
			</div>
			<div class="form-group">
				<label>Address</label>
				<input type="text" name="address" class="form-control">
			</div>

			<button type="submit" class="btn btn-success">Submit</button>
		</form>
	</div>
</body>
</html>