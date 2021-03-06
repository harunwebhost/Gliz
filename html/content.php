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
 <?php require_once($get_template_directory.'/bread_crum.php'); ?>
 
  <!-- Start blog archive -->
  <section id="blog-archive">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="blog-archive-area">
            <div class="row">
              <div class="col-md-8">
                <div class="blog-archive-left">
                  <!-- Start blog news single -->
                  <article class="blog-news-single">
                    <div class="blog-news-img">
                      <!-- <img src="assets/images/blog-img-1.jpg" alt="image"> -->
                    </div>
                                      
                    <div class="blog-news-title">
                      <h2><?php echo $title; ?></h2>
                      <!-- <p>By <a class="blog-author" href="#">John Powell</a> <span class="blog-date">|18 October 2015</span></p> -->
                    </div>
                    <div class="blog-news-details blog-single-details">
                      <p>
                        <?php echo $contents; ?> 
                      </p>
                      </ol>
                 
                    </div>
                  </article>
                  
                </div>
              </div>
             <?php require_once($get_template_directory.'/side_bar.php'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>  
  </section>
  <!-- End blog archive -->
<?php require_once($get_template_directory.'/review_section.php'); ?>

 <!-- Start subscribe us -->
  <?php require_once($get_template_directory.'/subscribe_section.php'); ?>
  
  <!-- End subscribe us -->

  <!-- Start footer -->
  <?php require_once($get_template_directory.'/footer.php'); ?>
  <!-- End footer -->

<?php require_once($get_template_directory.'/jquery_include.php'); ?>