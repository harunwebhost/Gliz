<?php 
 $get_template_directory=getcwd() . "/template_front";
 require_once($get_template_directory.'/head_tags.php');
 ?>
  
  <!-- BEGAIN PRELOADER -->
 <!--  <div id="preloader">
   <div id="status">&nbsp;</div>
 </div> -->
  <!-- END PRELOADER -->

  <!-- SCROLL TOP BUTTON -->
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header -->
 <?php require_once($get_template_directory.'/contact_header.php'); ?>
  <!-- End header -->
    <!-- Start login modal window -->
  <?php require_once($get_template_directory.'/header_contact_form.php'); ?>
  <!-- End login modal window -->
<!-- BEGIN MENU -->
 <?php require_once($get_template_directory.'/header_navigation.php'); ?>
  <!-- END MENU --> 
 <?php //require_once($get_template_directory.'/bread_crum.php'); ?>
 
  <!-- Start blog archive -->
  <section id="blog-archive">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="blog-archive-area">
            <div class="row">
              <div class="col-md-8 panel" >

                <div class = "panel panel-primary">
   <div class = "panel-heading">
      <h3 class = "panel-title">Payment Status</h3>
   </div>
  <div class = "panel-body">
      <?php 
        if(isset($_GET['pay'])){

                if($_GET['pay']=="successful"){
                  $class="success";
                  $message="Payment done successful";

                }elseif($_GET['pay']=="falied")
                {
                  $class="danger";
                  $message="Payment is failed";
                }
                else
                {
                  $class="danger";
                  $message="Payment is Cancelled";
             
                }
               
        }
      ?>
      <div class="alert alert-<?php echo $class;?>">
        <strong><?php echo $message;?></strong> .
      </div>    
  </div>                

  </div>


              </div>
             <?php require_once($get_template_directory.'/side_bar.php'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>  
  </section>
  <style type="text/css">
    input[type=number]::-webkit-inner-spin-button, 
input[type=number]::-webkit-outer-spin-button { 
  -webkit-appearance: none; 
  margin: 0; 
}

  </style>
  <!-- End blog archive -->
<?php require_once($get_template_directory.'/review_section.php'); ?>

 <!-- Start subscribe us -->
  <?php require_once($get_template_directory.'/subscribe_section.php'); ?>
  
  <!-- End subscribe us -->

  <!-- Start footer -->
  <?php require_once($get_template_directory.'/footer.php'); ?>
  <!-- End footer -->

<?php require_once($get_template_directory.'/jquery_include.php'); ?>