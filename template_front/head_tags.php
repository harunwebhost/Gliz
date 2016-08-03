    <?php require_once('admin/functions/db_function.php'); ?>
     <?php 
                      if(isset($_GET['title'])){
                            $get_title=$_GET['title'];
                            $get_title=str_replace('_', ' ', $get_title);
                            $get_title=sql_injection($get_title);
                            
                            if(isset($_GET['service_id'])){
                              
                              $service_id=sql_injection($_GET['service_id']);
                              $sql="select * from services where services_id='$service_id' AND status='1'";
                              $result=execute_sql_query($sql);
                              $get_services=execute_fetch($result);
                              $contents=$get_services['services_details'];
                              $title=$get_services['services_name'];"";
                              $quotes=$get_services['services_name'];
                            }elseif(isset($_GET['pricing_id'])){
                              $pricing_id=sql_injection($_GET['pricing_id']);
                              $title=sql_injection($get_title);
                              $quotes=$title;
                            }else{
                            $sql="SELECT * FROM mainpage where title='$get_title'" ;
                            $result=execute_sql_query($sql);
                            $get_main_page=execute_fetch($result);
                            $contents=$get_main_page['contents'];
                            $title=$get_main_page['title'];
                           $quotes=$get_main_page['quote'];  
                            }

                       }
                       /*elseif(isset($_GET['title']) && !empty($_GET['service'])){
                        echo $service_id=sql_injection($_GET['service']);
                        $sql="select * from services where services_name='$service_id' AND status='1'";
                        $result=execute_sql_query($sql);
                        $get_services=execute_fetch($result);
                        $contents=$get_services['services_details'];
                        $title=$get_services['services_name'];"";
                         $quotes=$get_services['services_name'];
                      }*/ else{
                        $get_title="Home";
                      }
                      
  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>GlizSearch | <?php echo $get_title; ?></title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="assets/images/favicon.ico"/>
    <!-- Font Awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">    
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css"/> 
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css"/> 
    <!-- Progress bar  -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-progressbar-3.3.4.css"/> 
     <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="style.css" rel="stylesheet">
  <link href="assets/css/mystyle.css" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Lato for Title -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>    
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
