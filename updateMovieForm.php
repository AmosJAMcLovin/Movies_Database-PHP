<!DOCTYPE html>
<html>
<head>
	<title>HTML form for Movie UPDATE</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div>
<h3>Enter the movie Director's Name for the Movie that you wish to UPDATE in the database<br />
Programmed by Amos Johnson!</h3>
<?php
// Set the variables for the database access:
  require_once('connectvars.php');

$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
$query = "SELECT title from Movies";
$result = mysqli_query ($dbc, $query);
echo "<datalist id='movies'>";
while ($row = mysqli_fetch_array ($result)) {
	echo "<option value='$row[title]'></option>";
}
echo "</datalist>";
?>
<form action="updateMovie.php" method="post">
	<fieldset>
		<legend>Update Director Name</legend>
		
		<label for="title">Movie Title (existing):</label>
		<input list="movies" id="title" name="TitleIN" size="20" /><br />

		<label for="director">New Director Name:</label>
		<input list="text" id="director" name="DirectorIN" size="14" /><br />
		<br />
	</fieldset>
	<input type="submit" name="SUBMIT" value="Submit Information!" />
</form>

</div>
</body>
</html>