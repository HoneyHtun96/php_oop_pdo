<!DOCTYPE html>
<html>
<head>
	<title>create</title>
</head>
<body>
	<form action="storedata" method="POST">
		<div class="form-group">
			<label for="description">Description</label>
			<input type="text" name="description" id="description">
		</div>

		<div class="form-group">
			<label for="complete">Complete</label>
			<input type="number" name="complete" id="complete">
		</div>
		<button type="submit">Save</button>
	</form>
</body>
</html>