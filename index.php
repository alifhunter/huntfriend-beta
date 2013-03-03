<?php
session_start();
include_once 'script/connect.php';
define('INCLUDE_CHECK',1);

// kalo udah login tetap login 
if (isset($_SESSION['uid'])){
header("location:home.php");
}

else {
  
}
$uid=(isset($_SESSION['uid']));


// Jika user ingin login
if(isset($_POST['login'])) {
  $emaillogin=htmlentities((trim($_POST['emaillogin'])));
  $passlogin=htmlentities(md5($_POST['passlogin']));
  $result = mysql_query("SELECT uid FROM user WHERE email = '$emaillogin' and password='$passlogin'");
  $user_data = mysql_fetch_array($result);
  $data_ada = mysql_num_rows($result);
	if ($data_ada == 1){
		$_SESSION['uid'] = $user_data['uid'];
		// Login sukses
		header("location: home.php");
	}
	else{
	// Login gagal
	?>
  <script language="javascript">
			alert("Sorry, Wrong email or password!");
			document.location="index.php";
	</script>
  <?php  
	}
}
?>
