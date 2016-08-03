<?php 
require_once('admin/functions/db_function.php');
$name=sql_injection($_POST['name']);
$email=sql_injection($_POST['email']);
$city=sql_injection($_POST['city']);
$phone=sql_injection($_POST['mobile']);
$choosed_service=sql_injection($_POST['selected_plan']);
$user_ip_address=get_user_ip_address();
$get_contact_details="SELECT * FROM free_trail WHERE email='$email' OR mobile='$phone' OR user_ip_address='$user_ip_address'";
    
    $results=execute_sql_query($get_contact_details);
    if(sql_fetch_num_rows($results)>0){
           page_redirection("index.php",'Your Account is Already Created');
     }
    else{
         $sql_store="INSERT INTO free_trail VALUES (null,'$name','$email','$phone','$city', '$choosed_service', '$user_ip_address',now()) ";
         $results=execute_sql_query($sql_store);
         page_redirection("index.php",'Thank you for contacting us');
    }
?>