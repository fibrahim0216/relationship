<!DOCTYPE html>
<html>
<head>
	<title>Users List</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2>User List</h2>
		<table class="table table-bordered">
			<thead class="text-center">
				<tr>
					<td>Username</td>
					<td>Email</td>
					<td>Action</td>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $user)
				<tr class="text-center">
					<td>{{$user->username}}</td>
					<td>{{$user->email}}</td>
					<td><a href="/users/{{$user->id}}/profile" title="">Show Profile</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</body>
</html>