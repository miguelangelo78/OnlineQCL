<?php
	require('lib/qcl_exec.php');	

	if(isset($_POST["code"])){
		$qcl = new QCL();
		$is_guest = isset($_POST["username"]) == null;
		
		echo json_encode(array("code_output"=> $qcl->execute($_POST["code"], $is_guest)));
	}
	
?>