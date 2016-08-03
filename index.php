
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

  <!-- Start slider -->

   <?php require_once($get_template_directory.'/slider.php'); ?>
 
  <!-- End slider -->
  <?php if ( $detect->isMobile() ) { ?>
 <?php //require_once($get_template_directory.'/banner_form.php'); ?>
 <?php } ?>
 <div class="visible-xs">
  <?php require_once($get_template_directory.'/side_get_trail_form.php'); ?>
 </div> 
  <!-- Start about  -->
  <?php require_once($get_template_directory.'/about_us.php'); ?>
  <!-- end about -->
 <!-- Start Feature -->
 <?php //require_once($get_template_directory.'/feature_section.php'); ?>
  <!-- End Feature -->


  <!-- Start counter -->
 <?php //require_once($get_template_directory.'/counter.php'); ?>
  <!-- End counter -->


  <!-- Start Service -->
   <?php require_once($get_template_directory.'/service_section.php'); ?>

  <!-- End Service -->

  <!-- Start Pricing table -->
 <?php require_once($get_template_directory.'/pricing_section.php'); ?>

  <!-- End Pricing table -->  

  <!-- Start Pricing table -->
   <?php //require_once($get_template_directory.'/pricing_section1.php'); ?>
   <?php //require_once($get_template_directory.'/team_section.php'); ?>

  <!-- End Pricing table -->
  
  <!-- Start Testimonial section -->
 <?php require_once($get_template_directory.'/review_section.php'); ?>
  <!-- End Testimonial section -->

  <!-- Start Clients brand -->
   <?php //require_once($get_template_directory.'/client_section.php'); ?>
  <!-- End Clients brand -->

  <!-- Start latest news -->
   <?php //require_once($get_template_directory.'/news_section.php'); ?>
  <!-- End latest news -->

  <!-- Start subscribe us -->
  <?php require_once($get_template_directory.'/subscribe_section.php'); ?>
  
  <!-- End subscribe us -->

  <!-- Start footer -->
  <?php require_once($get_template_directory.'/footer.php'); ?>
  <!-- End footer -->

<?php require_once($get_template_directory.'/jquery_include.php'); ?>