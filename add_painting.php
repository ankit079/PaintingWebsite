<!DOCTYPE html>
<html>
<head>
<title> Add Painting </title>
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link href="http://localhost/PaintingWebsite/public/css/styles.css"  media="screen" rel="stylesheet">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
		crossorigin="anonymous"></script>
	<nav class="navbar navbar-dark bg-primary">
		<div class="container-fluid">
		  <ul class="nav">
			<li class="nav-item">
			  <a class="nav-link active" aria-current="page" href="./index.html">Home</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="./displaypainting.html">Paintings</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="">Add Paintings</a>
			</li>
		  </ul>
		  <form role="search">
			<input class="form-control" type="search" placeholder="Search Painting" aria-label="Search">
		</form>
		</div>
	  </nav>
    <h1>Add a New Painting</h1>
	<form action="../controllers/PaintingController.php?action=add" method="post">
        <label for="title">Title: </label>
        <input type="text" name="title"><br>
        <label for="finished">Finished: </label>
        <input type="text" name="finished"><br>
		<label for="media">Media: </label>
        <input type="text" name="media"><br>
		<label for="artist">Artist: </label>
        <input type="text" name="artist"><br>
		<label for="style">Style: </label>
        <input type="text" name="style"><br>
        <label for="image">Image: </label>
        <input type="file" name="image"><br>
        <input type="submit" value="Add Painting">
    </form>
</body>
</html>