<?php 
	$sql="SELECT * FROM services where status='1'";
	$results=execute_sql_query($sql);
	while($get_all_services=execute_fetch($results)){
		?>
		 <div class="blog-news-title">
                      <h2><?php echo $get_all_services['services_name']; ?></h2>
                      <!-- <p>By <a class="blog-author" href="#">John Powell</a> <span class="blog-date">|18 October 2015</span></p> -->
                    </div>
          <p><?php echo $get_all_services['services_details'] ?></p>
          <hr>          
	<?php 
	}
 	?>