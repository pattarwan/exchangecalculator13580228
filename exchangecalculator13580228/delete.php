<?php
	require 'connect.php';
	$id = $_REQUEST['id'];
	$thb = $_REQUEST['thb'];

	$sql = "DELETE FROM dbch822_history WHERE recordID = $id";

	$sql_exe = $conn -> query($sql);

	if ($sql_exe) {
		echo "Delete complete";
		echo "Delete ID".$id;
		echo "THB=".$thb;
		header("location:index.php");
	} else {
		echo "Delete failed";
	}
?>


