<?php

$servername = "localhost";
$username = "username_default1";
$password = "ZGPsEkJK2Tdup9yP";
$dbname = "wda";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

?>
<!DOCTYPE html>
<html>
	<?php include 'head2.php'; ?>
	<?php include 'body2.php'; ?>
</html>
<?php

mysqli_close($conn);

?>