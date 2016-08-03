<!-- Start single page header -->
  <section id="single-page-header">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-page-header-left">
              <h2><?php echo $quotes; ?></h2>
              
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-page-header-right">
              <ol class="breadcrumb">
                <?php 
                $href=convert_spaces_into_underscore($title);
                $bread_crum_title=convert_underscore_into_spaces($title);
                 ?>
                <?php if($title=="Home")
                {
                ?>
                <li>
                  <a href="content.php?title=<?php echo $title ?>"><?php echo "HOME"; ?></a></li>
                <?php } else{?>
                <li><a href="content.php?title=Home">Home</a></li>
                <li class="active"><a href="content.php?title=<?php echo $title ?>"><?php echo $bread_crum_title; ?></a></li>
                <?php } ?>
              </ol>
            </div>
          </div>
        </div>
       
        <div class="col-md-4 col-sm-6 col-xs-12">
        <?php if($title!="FREE TRAIL"){include('side_get_trail_form.php');} ?>
      </div>
 
      </div>
    </div>
  </section>
  <!-- End single page header -->