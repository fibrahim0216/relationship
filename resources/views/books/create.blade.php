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
				<textarea name="description" class="form-control" cols="10" rows="5"></textarea>
			</div>
			<div class="form-group">
				<label>ISBN Number</label>
				<input type="text" name="isbn" class="form-control">
			</div>

			<div class="form-group">
				<label>Author</label>
				<select name="authors[]" class="form-control" multiple>
					@foreach($authors as $author)
					<option value="{{$author->id}}">{{$author->name}}</option>
					@endforeach
				</select>
			</div>

			<button type="submit" class="btn btn-success">Submit</button>
		</form>
	</div>
</body>
</html>