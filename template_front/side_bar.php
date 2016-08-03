<div class="col-md-4">

                <aside class="blog-side-bar">
                  <div class="sidebar-widget">
                    <div class="sidebar_form">
<div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Recent News</div>
                        </div>  
                        <div class="panel-body" >
                      <marquee  behavior="scroll" direction="up" onmouseover="this.stop()" onmouseout="this.start()">
                    <?php 
                    $i=0;	
                    while ( $i<= 3) {
                    ?>
                    	<p>Your Reccent news will display here </p>
                    <hr>
                    <?php $i++;} ?>
                      
                    </marquee>
                            
         </div>
    </div>
</div>
                 
                  <div class="sidebar-widget">
                    <?php include('side_get_trail_form.php'); ?>
                  </div>

                </aside>

</div>