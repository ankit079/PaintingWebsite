<!DOCTYPE html>
<html>

<head>
    <title> Add Artist </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="styles.css" media="screen" rel="stylesheet">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <?php include_once 'nav_bar.php'; ?>
    <h1>Add a New Artist</h1>
    <form action="ArtistController.php?action=add" enctype="multipart/form-data" method="POST">
        <label for="artist_name">Artist Name: </label>
        <input type="text" name="artist_name" id="artist_name" placeholder="Enter Name"><br>
        <label for="lifespan">Life Span: </label>
        <input type="text" name="lifespan" id="lifespan" placeholder="Enter Lifespan"><br>
        <label for="nationality">Nationality: </label>
        <input type="text" name="nationality" id="nationality" placeholder="Enter Nationality"><br>
        <label for="portrait">Portrait: </label>
        <input type="file" name="portrait" id="portrait"><br>
        <input type="submit" value="Add Artist" name="submit">
    </form>
</body>

</html>