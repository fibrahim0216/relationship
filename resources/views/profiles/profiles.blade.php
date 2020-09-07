<!DOCTYPE html>
<html>
<head>
	<title>Profiles</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2>Profiles</h2>
		<table class="table table-bordered">
			<thead class="text-center">
				<tr>
					<td>Profile Id</td>
					<td>Profile Picture</td>
					<td>Profile Bio</td>
					<td>Profile Address</td>
					<td>Profile Owner</td>
				</tr>
			</thead>
			<tbody>
				@foreach($profiles as $profile)
				<tr class="text-center">
					<td>{{$profile->id}}</td>
					<td>{{$profile->profile_pic}}</td>
					<td>{{$profile->bio}}</td>
					<td>{{$profile->address}}</td>
					<td>{{$profile->owner->username}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</body>
</html>