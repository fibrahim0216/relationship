<!DOCTYPE html>
<html>
<head>
	<title>Book List</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h2>Book List</h2>
		<div class="text-right">
			<a href="/books/create" class="btn btn-success text-right">Create</a>
		</div>
		<table class="table table-bordered">
			<thead class="text-center">
				<tr>
					<th>Id</th>
					<th>Name</th>
					<th>Description</th>
					<th>ISBN</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody class="text-center">
				@foreach($books as $book)
				<tr>
					<td>{{$book->id}}</td>
					<td>{{$book->name}}</td>
					<td>{{$book->description}}</td>
					<td>{{$book->isbn}}</td>
					<td><a class="btn btn-sm btn-success" href="">Update</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</body>
</html>