<!DOCTYPE html>
<html>
<head>
	<title>Users Profile</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2>User Profile</h2>
		<table class="table table-bordered">
			<thead class="text-center">
				<tr>
					<td>First Name</td>
					<td>Last Name</td>
					<td>Email</td>
					<td>Phone</td>
					<td>Date Of Birth</td>
					<td>User Name</td>
					<td>Picture</td>
					<td>Profile Bio</td>
					<td>Address</td>
					<td>Action</td>
				</tr>
			</thead>
			<tbody>
				<tr class="text-center">
					<td>{{$user->firstname}}</td>
					<td>{{$user->lastname}}</td>
					<td>{{$user->email}}</td>
					<td>{{$user->phone}}</td>
					<td>{{$user->date_of_birth->diffForHumans()}}</td>
					<td>{{$user->username}}</td>
					<td>{{$user->profile->profile_pic}}</td>
					<td>{{$user->profile->bio}}</td>
					<td>{{$user->profile->address}}</td>
					<td><a class="btn btn-sm btn-primary" href="/users/{{$user->id}}/update">Update</a></td>
				</tr>
			</tbody>
		</table>
	</div>
</body>
</html>