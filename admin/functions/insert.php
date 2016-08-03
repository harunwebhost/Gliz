<?php 

require_once('db_function.php');
	$keys="";
	$values="";
$table=sql_injection($_POST['table_name']);
$action=sql_injection($_POST['action']);

if($action=="update"){
$update_key=$_POST['update_key']; 
$primary_key=$_POST['primary_key'];
$message="Record is updated";
  foreach($_POST['page'] as $x=>$x_value)
  {
  $keys= $x;
  $filter_data=sql_injection($x_value);
  $values.=$keys."="."'$filter_data',";
}
$values=rtrim($values,',');
echo $sql = "update $table SET $values WHERE  $primary_key=$update_key";

}else{
/*used for inserting values into the*/
$message="Record is Inserted";
  foreach($_POST['page'] as $x=>$x_value)
  {
  $keys .= $x.',';
  $filter_data=sql_injection($x_value);
  $values.='"'.$filter_data.'",';
   }
   
$values=rtrim($values,',');
$keys=rtrim($keys,',');
 $sql = "INSERT INTO $table ($keys) VALUES ($values)";
}
if (execute_sql_query($sql)) {
    echo $message;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

 ?>