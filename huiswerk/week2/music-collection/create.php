<?php
// Check if form is submitted.
if (isset($_POST['submit']))
{
    // 'Post back' with the data from the form.
    $artist = $_POST['artist'];
    $album  = $_POST['album'];
    $genre  = $_POST['genre'];
    $year   = $_POST['year'];
    $tracks = $_POST['tracks'];

    // Now this data can be stored in de database
}



?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Create new album</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
	</head>
	<body >
        <section>
            <h1>Create new album</h1>
            <form action="" method="post">
                <div class="data-field">
                    <label for="artist">Artist</label>
                    <input id="artist" type="text" name="artist" value=""/>
                </div>
                <div class="data-field">
                    <label for="album">Album</label>
                    <input id="album" type="text" name="album" value=""/>
                </div>
                <div class="data-field">
                    <label for="genre">Genre</label>
                    <input id="genre" type="text" name="genre" value=""/>
                </div>
                <div class="data-field">
                    <label for="year">Year</label>
                    <input id="year" type="text" name="year" value=""/>
                </div>
                <div class="data-field">
                    <label for="tracks">Tracks</label>
                    <input id="tracks" type="number" name="tracks" value=""/>
                </div>
                <div class="data-submit">
                    <input type="submit" name="submit" value="Save"/>
                </div>
            </form>
        </section>
        <div>
            <a href="index.php">Go back to the list</a>
        </div>
	</body>
</html>