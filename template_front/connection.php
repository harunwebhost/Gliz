<?php // Create connection
$connection = mysql_connect('localhost', 'root', '');
// Check connection
if (!$connection) {
    die("Connection failed: " . mysql_error());
}else{
	mysql_select_db('glitzsearch');

}
  ?>