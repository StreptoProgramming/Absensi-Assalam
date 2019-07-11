<?php
include('./configasalam.php');
if(isset($_POST['uid'])){
	$uid=$_POST['uid'];
	// $uid=$_POST['uid'];
	// $sql = "SELECT * from siswa where uid= '$uid' ");
	// $cek=mysqli_num_rows($sql);
	// if($cek > 0 ){
		$insert= "insert into log values('"."$uid"."')";
		mysqli_query($conn, $insert);
	// }
}