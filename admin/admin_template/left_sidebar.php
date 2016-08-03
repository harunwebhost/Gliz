 <div class="navbar nav_title" style="border: 0;">
              <a href="http://www.glitzresearch.com/admin" class="site_title"><i class="fa fa-paw"></i> <span>Glitzresearch</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="images/man.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Admin</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />
  <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                 
                     <li><a><i class="fa fa-sitemap"></i> Pages<span class="fa fa-chevron-down"></span></a>
                    
                       <ul class="nav child_menu">
                        <li><a href="index.php">New Main Page</a></li>
                         <li><a href="view_master.php?view=mainpages">Main Pages</a></li>
                         <li><a href="view_master.php?view=childpages">Child Pages</a></li>
                        <li><a href="index.php?child_id=new">New Child page</a></li>
                       <?php 
                        $sql="SELECT * FROM mainpage" ;
                        $result=execute_sql_query($sql);
                        while($get_main_page=execute_fetch($result)){
                        $get_main_id=$get_main_page['mainpage_id'];
                          $select_child=execute_sql_query("select * from childpage where mainpage_id='$get_main_id'");
                      if(sql_fetch_num_rows($select_child)>0){
                      ?>
                        <li><a><?php echo $get_main_page['title'] ?>
                        <span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="index.php?main_id=<?php echo $get_main_id; ?>">
                            <?php echo $get_main_page['title'] ?></a>
                            </li>
                            <?php 

                         while($get_child=execute_fetch($select_child)){
                          $child_page_title=str_replace(' ', '_', $get_child['title']);
                          $get_child_id=$get_child['child_id'];
                          ?>
                            <li class="sub_menu"><a href="index.php?child_id=<?php echo $get_child_id .'&main_id='.$get_main_id; ?>"><?php echo $child_page_title; ?></a>
                            </li>
                        <?php } ?>
                           
                          </ul>
                        </li>
                    <?php } else{?>
                        <li><a href="index.php?main_id=<?php echo $get_main_id; ?>">
                            <?php echo $get_main_page['title'] ?></a></a></li>
                       
                     <?php } ?>
                        </li>
                   <?php } ?>
                    </ul>
                  </li>
                   <li><a><i class="fa fa-sitemap"></i> Services <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                       <li><a href="services.php">New Service</a>
                       <li><a href="view_master.php?view=services">Service</a>
                       
                        </li>
                        <li><a>Services List<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                    <?php 
                    $sql="SELECT * FROM services"; 
                    $result=execute_sql_query($sql);
                    while($services=execute_fetch($result)){
                    ?>
                    <li><a href="services.php?service_id=<?php echo $services['services_id'] ?>"><?php echo $services['services_name'] ?></a></li>
                    <?php } ?>
                    </ul>
                        </li>
                        
                    </ul>
                  </li>

                  <li><a><i class="fa fa-sitemap"></i>Prices <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                       <li><a href="pricing.php">New price</a>
                        </li>
                       <li><a href="view_master.php?view=pricing">Pricing</a>
                        </li>
                       
                        <li><a>Prices List<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                    <?php 
                    $sql="SELECT * FROM pricing"; 
                    $result=execute_sql_query($sql);
                    while($prices=execute_fetch($result)){
                    ?>
                    <li><a href="pricing.php?pricing_id=<?php echo $prices['pricing_id'] ?>"><?php echo $prices['plan_name'] ?></a></li>
                    <?php } ?>
                    </ul>
                        </li>
                        
                    </ul>
                  </li>
                  <li><a href="free_trail_view.php">Free Trail User</a>

                    </ul>
                    

                  </li> 

                  
                 </ul>
              </div>

            </div>

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->