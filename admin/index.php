
<?php  $get_template_directory=getcwd()."/admin_template"?>
<?php require_once($get_template_directory.'/head_tags.php'); ?>
<script src="//cdn.ckeditor.com/4.5.9/standard/ckeditor.js"></script>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            
            <!-- sidebar menu -->
            <?php require_once($get_template_directory.'/left_sidebar.php'); ?>
            <!-- /sidebar menu -->

            
          </div>
        </div>

        <!-- top navigation -->
        <?php require_once($get_template_directory.'/top_navigation.php'); ?>
        <!-- /top navigation -->

        <!-- page content -->
    <?php require_once($get_template_directory.'/side_bar.php'); ?>
        <!-- /page content -->

        <!-- footer content -->
    <?php require_once($get_template_directory.'/footer.php'); ?>