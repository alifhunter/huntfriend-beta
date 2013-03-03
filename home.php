<?php
session_start();
include_once 'script/connect.php';
define('INCLUDE_CHECK',1);
$nama=$row['nama'];
?>
<!DOCTYPE html>
<html lang="en-us">
<head><title>Huntfriend - Home</title>
</head>
<body>
Welcome back <?php echo $nama;?>!
<a href="logout.php">Logout</a>
</body>
</html>
