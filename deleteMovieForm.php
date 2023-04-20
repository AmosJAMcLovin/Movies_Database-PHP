<!DOCTYPE html>
<html>
<head>
	<title>HTML form for Movie Delete</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
<div>
<h2>Movie DELETE form - programmed by Amos Johnson!</h2>
<?php
// Set the variables for the database access:
  require_once('connectvars.php');

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

$query = "SELECT title from Movies";
$result = mysqli_query ($dbc, $query);
$result2 = mysqli_query ($dbc, $query);
echo "<p>This are movies in your database: </p>";
echo "<ul>";
while ($Row = mysqli_fetch_array ($result)) {
	echo "<li>$Row[title]</li>";
}
echo "</ul>";
echo "<datalist id='movies'>";
while ($row = mysqli_fetch_array ($result2)) {
	echo "<option value='$row[title]'></option>";
}
echo "</datalist>";
?>
<form action="deleteMovie.php" method="post">
Movie Title to be deleted from database: <input list="movies" name="TitleIN"
size="20" /><br />
<input type="submit" name="SUBMIT" value="Delete Record!" />
</form>
</div>
</body>
</html>