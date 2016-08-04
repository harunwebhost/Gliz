<?php 
// Create connection
function db_connection(){
$connection = mysqli_connect('localhost', 'root', '');
// Check connection
if (!$connection) {
    die("Connection failed: " . mysql_error());
}else{
  mysqli_select_db($connection,'amruth_testing');

}
return $connection; 
}
	/*sql query functions*/
	function execute_sql_query($sql){
		$connection=db_connection();
		$result=mysqli_query($connection,$sql);
		
		if(!$result){
			sql_error($connection);
		}else{
			return $result;
		}
	}

	/*fetch from database*/
	function execute_fetch($result){
		
		$fetch=mysqli_fetch_array($result);
		if(!$fetch){
				//sql_comman_error();
		}else
		{
			return $fetch;
		}
	}

	/*sql error*/
	function sql_error($connection){
		echo "you have an error please check".mysqli_error($connection);
		die();
		
		
	}
/*
	function sql_comman_error(){
		die("your are doing some mistakes".mysqli_error());
	}*/
	function sql_fetch_num_rows($sql){
		return mysqli_num_rows($sql);
	}
function sql_injection($values){
	$connection=db_connection();
	$values=trim($values);
	return mysqli_real_escape_string($connection,$values);
}
function convert_spaces_into_underscore($title){
return str_replace(' ', '_', $title);
}
function convert_underscore_into_spaces($title){
	return str_replace('_', ' ', $title);
}
	/*get the main pages*/
	function get_main_pages($id){
		
			$sql="select * from mainpage"; 
			$result=execute_sql_query($sql);
			while ($mainpage=execute_fetch($result)) {
			?>
			<option value="<?php echo $mainpage['mainpage_id'] ?>" <?php if($mainpage['mainpage_id']==$id){echo "selected"; } ?>><?php echo $mainpage['title']?></option>
		<?php }
	}

function display_data($data){
	echo $data;
}

function shor_information($data,$limit){
	$words = preg_split('/\s+/', $data);
	 $words = array_slice($words, 0, $limit);
	 return implode(" ",$words);
}

function footer_menus($table,$limit){
	?>
		<ul>
			<?php 
			if (isset($limit)) {
			$sql="SELECT * FROM $table LIMIT $limit" ;	
			}else{
			$sql="SELECT * FROM $table";
			}
			$result=execute_sql_query($sql);
			
			while ($menus=execute_fetch($result)) {
				if($table=="mainpage"){
					$menus_title=convert_spaces_into_underscore($menus['title']);
					$diplay_title=convert_underscore_into_spaces($menus['title']);
					$page="content.php?title=$menus_title";
					$url=create_url($page,$diplay_title);		
				}
				if($table=="pricing"){
					$menus_title=convert_spaces_into_underscore($menus['plan_name']);
					$diplay_title=convert_underscore_into_spaces($menus['plan_name']);
					$page="content.php?title=$menus_title"."&pricing_id=".$menus['pricing_id'];
					$url=create_url($page,$diplay_title);	
				}
				if($table=="services"){
					$menus_title=convert_spaces_into_underscore($menus['services_name']);
					$diplay_title=convert_underscore_into_spaces($menus['services_name']);
					$page="content.php?title=$menus_title"."&service_id=".$menus['services_id'];
					$url=create_url($page,$diplay_title);	
				}
			?>
			<li>
				<?php echo $url; ?>
			</li>
			<?php  }?>
		</ul>
	<?php
}

function create_url($page,$menus_title){
$url =<<<EOD
<a href="{$page}">{$menus_title}</a>
EOD;
return $url;
}

function get_user_ip_address(){
	return $user_ip_address=$_SERVER['REMOTE_ADDR'];

}
function page_redirection($pagename,$message){
?>
<script type="text/javascript">
	alert("<?php echo $message?>");
	document.location="<?php echo $pagename ?>";
</script>
<?php }
	function check_user(){
		session_start();
		if(!isset($_SESSION['username']) && !isset($_SESSION['id'])){
			//page_redirection('../index.php','please login again');
		}
	}


?>





