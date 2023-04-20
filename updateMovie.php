<!DOCTYPE html>
<html>
<head><title>UPDATE Movies Database</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div>
<h3>UPDATING DIRECTOR NAME in the Movies database</h3>
<h4>Programmed by Amos Johnson!</h4><br />
<?php
// include your connectvars.php file here!
require_once('connectvars.php');
$TitleIN = trim($_POST['TitleIN']);
$DirectorIN = trim($_POST['DirectorIN']);
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);// create your database connection variable here!
$query = "UPDATE Movies SET director = ('$DirectorIN') WHERE title = ('$TitleIN')"; // write your UPDATE query here!
print ("The query is: <b>$query</b><br /><br />");
if (mysqli_query ($dbc, $query)) {
 echo "The UPDATE query was successful.";
 print ("<a href='displayMovies.php'>View Movies</a>");
} else {
 echo "The UPDATE query FAILED!" . mysqli_error();
}
mysqli_close($dbc);
?>
</div>
</body>
</html>