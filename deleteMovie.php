<!DOCTYPE html>
<html>
<head>
<title>Deleting a record from the Movies Database</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
<div>
<h3>Deleting records Using PHP</h3>
<h4>Programmed by Amos Johnson!</h4>
<?php
 // Include your connectvars.php script here!
 require_once('connectvars.php');
$TitleIN = trim($_POST['TitleIN']); // trim() and grab your title from the post query here!
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);// Connect to the database here!
$TableName = 'Movies';
$query = "DELETE FROM Movies WHERE title = ('$TitleIN')";
print ("The query is: <b>$query</b><br /><br />");
if (mysqli_query ($dbc, $query)) {
echo "The DELETE query was successfully executed!<br />";
print ("<a href='displayMovies.php'>View Movies</a>");
} else {
echo "The DELETE query could not be executed!" . mysqli_error($dbc);
}
mysqli_close($dbc);
?>
</div>
</body>
</html>