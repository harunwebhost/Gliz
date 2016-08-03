 <section id="menu-area">      
    <nav class="navbar navbar-default" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
       <a class="navbar-brand" href="index.php" style="height:100px!important;padding: 0px 15px;"><img src="front_images/logo.png" alt="logo"></a> 
       </div>
        <div id="navbar" class="navbar-collapse collapse" style="margin:top:500px">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">

          
            <?php                       
         $sql="SELECT * FROM mainpage";
        $result=execute_sql_query($sql);
        while($get_main_page=execute_fetch($result)){
        $get_main_id=$get_main_page['mainpage_id'];
        $main_title_conversation=convert_spaces_into_underscore($get_main_page['title']);
        ?>
             <?php 
                    $select_child=execute_sql_query("select * from childpage where mainpage_id='$get_main_id'");
                    $mysql_num_rows=sql_fetch_num_rows($select_child);
                    if($mysql_num_rows>0){
              ?>

             <li>
                     <a href="content.php?title=<?php echo $main_title_conversation; ?> " 
                class="dropdown-toggle" data-toggle="dropdown" 
                role="button" aria-haspopup="true" aria-expanded="false">
                <?php echo $get_main_page['title']; ?> 
                  <span class="caret"></span>
                </a>
                    
                <ul class="dropdown-menu">
                  <?php 
                 while($get_child=execute_fetch($select_child)){
                  $child_page_title=str_replace(' ', '_', $get_child['title']);
                   $get_child_id=$get_child['child_id'];
                ?>
               
    
                   <?php 
                    $select_2nd=execute_sql_query("select * from child_to_child_page where childpage_id='$get_child_id'");
                   if(sql_fetch_num_rows($select_2nd)>0) {
                  ?>
                <li class="dropdown-submenu">
              <?php } else{
                ?>
                <li>
                <?php }?>
                <a href="content.php?title=<?php echo $child_page_title;?>"><?php echo $get_child['title']?></a>
                                     
                    <?php 
                     $select_2nd=execute_sql_query("select * from child_to_child_page where childpage_id='$get_child_id'");
                    if (sql_fetch_num_rows($select_2nd)>0) {
                        while($get_child=execute_fetch($select_2nd)){
                    ?>   
                 <ul class="dropdown-menu">
                  <li> 
                        <a href="content.php?title=<?php echo $get_child['title'];?>"><?php echo $get_child['title'] ?></a>
                  </li>
                 </ul>
                 <?php } } ?>
                </li>
                  <?php } ?>
                </ul>
                    
                   
            </li>
<?php }else{
  ?>
      <li><a href="content.php?title=<?php echo $main_title_conversation; ?> "><?php echo $get_main_page['title']; ?></a></li>
  <?php 
}
   }
 ?>
           <!--  <li class="active"><a href="index.html">Home</a></li>
           <li><a href="feature.html">Feature</a></li>
           <li><a href="service.html">Service</a></li>
           <li><a href="portfolio.html">Portfolio</a></li>
           <li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="fa fa-angle-down"></span></a>
             <ul class="dropdown-menu" role="menu">
               <li><a href="blog-archive.html">Blog Archive</a></li>                
               <li><a href="blog-single-with-left-sidebar.html">Blog Single with Left Sidebar</a></li>
               <li><a href="blog-single-with-right-sidebar.html">Blog Single with Right Sidebar</a></li>
               <li><a href="blog-single-with-out-sidebar.html">Blog Single with out Sidebar</a></li>           
             </ul>
           </li>
           <li><a href="404.html">404 Page</a></li>               
           <li><a href="contact.html">Contact</a></li> -->
          </ul>                     
        </div><!--/.nav-collapse -->
        <!-- <a href="#" id="search-icon">
          <i class="fa fa-search">            
          </i>
        </a> -->
      </div>     
    </nav>
  </section>

  <style type="text/css">
  .dropdown-submenu {
    position: relative;
}

.dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -6px;
    margin-left: -1px;
    -webkit-border-radius: 0 6px 6px 6px;
    -moz-border-radius: 0 6px 6px;
    border-radius: 0 6px 6px 6px;
}

.dropdown-submenu:hover>.dropdown-menu {
    display: block;
}

.dropdown-submenu>a:after {
    display: block;
    content: " ";
    float: right;
    width: 0;
    height: 0;
    border-color: transparent;
    border-style: solid;
    border-width: 5px 0 5px 5px;
    border-left-color: #ccc;
    margin-top: 5px;
    margin-right: -10px;
}

.dropdown-submenu:hover>a:after {
    border-left-color: #fff;
}

.dropdown-submenu.pull-left {
    float: none;
}

.dropdown-submenu.pull-left>.dropdown-menu {
    left: -100%;
    margin-left: 10px;
    -webkit-border-radius: 6px 0 6px 6px;
    -moz-border-radius: 6px 0 6px 6px;
    border-radius: 6px 0 6px 6px;
}
</style>