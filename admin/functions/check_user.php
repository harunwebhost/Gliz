<?php 
	require_once('db_function.php');
	$username=sql_injection($_POST['username']);
	$password=sql_injection($_POST['password']);
	$sql="SELECT * from master where master_username='$username' && master_password='$password' && status='1'";
	$result=execute_sql_query($sql);
	$count=sql_fetch_num_rows($result);
	if($count>0){
		ob_start();
		/*set all the session veriable*/
		$fetch_login_details=execute_fetch($result);
		$username=$fetch_login_details['master_username'];
		$master_id=$fetch_login_details['marster_id'];
		session_start();
		$_SESSION['username']=$username;
		$_SESSION['id']=$master_id;
		page_redirection('../index.php?login=success','logged successfully');
		ob_end_flush();
	}else{
			page_redirection('http://glitzresearch.com/?login=failed','login details are incorrect');
	
	}
 ?>