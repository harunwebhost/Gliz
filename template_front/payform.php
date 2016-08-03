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
              <div class="col-md-8 panel panel-primary" >


              <div class="row">
                  <div class="col-md-2 col-md-offset-5"><img src="front_images/logo.png" alt="logo"></div>
              </div>
                  
              <?php 
        if(isset($_GET['pay_now'])){
          $pay_now=sql_injection($_GET['pay_now']);
         }
         if(isset($_GET['tariff'])){
            $tariff=$_GET['tariff'];
         }

        $sql="select * from pricing where pricing_id='$pay_now'" ;
        $get_details=execute_sql_query($sql);
        $result=execute_fetch($get_details);
        

   ?>

               <?php
// Merchant key here as provided by Payu
$MERCHANT_KEY = "in8BwMla";

// Merchant Salt as provided by Payu
$SALT = "h5c2Tckcb2";

// End point - change to https://secure.payu.in for LIVE mode
$PAYU_BASE_URL = "https://secure.payu.in";

$action = '';

$posted = array();
if(!empty($_POST)) {
    //print_r($_POST);
  foreach($_POST as $key => $value) {    
    $posted[$key] = $value; 
  
  }
}

$formError = 0;

if(empty($posted['txnid'])) {
  // Generate random transaction id
  $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
} else {
  $txnid = $posted['txnid'];
}
$hash = '';
// Hash Sequence
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
if(empty($posted['hash']) && sizeof($posted) > 0) {
  if(
          empty($posted['key'])
          || empty($posted['txnid'])
          || empty($posted['amount'])
          || empty($posted['firstname'])
          || empty($posted['email'])
          || empty($posted['phone'])
          || empty($posted['productinfo'])
          || empty($posted['surl'])
          || empty($posted['furl'])
      || empty($posted['service_provider'])
  ) {
    $formError = 1;
  } else {
    //$posted['productinfo'] = json_encode(json_decode('[{"name":"tutionfee","description":"","value":"500","isRequired":"false"},{"name":"developmentfee","description":"monthly tution fee","value":"1500","isRequired":"false"}]'));
  $hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';  
  foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }

    $hash_string .= $SALT;


    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';
  }
} elseif(!empty($posted['hash'])) {
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}
?>

  <script>
    var hash = '<?php echo $hash ?>';
    function submitPayuForm() {
      if(hash == '') {
        return;
      }
      var payuForm = document.forms.payuForm;
      payuForm.submit();
    }
  </script>

  <!-- <body onload="submitPayuForm()">
   --><body onload="submitPayuForm()">
  
    <br/>
    <?php if($formError) { ?>
  
      <span style="color:red">Please fill all mandatory fields.</span>
      <br/>
      <br/>
    <?php } ?>
    <form action="<?php echo $action; ?>" method="post" name="payuForm">
      <input type="hidden" name="key" value="<?php echo $MERCHANT_KEY ?>" />
      <input type="hidden" name="hash" value="<?php echo $hash ?>"/>
      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
     <div class="table-responsive">
      <table class="table table-striped ">
        <tr>
          <td><b>Please Fill the Form</b></td>
        </tr>
        <tr>
          
          <td>First Name: </td>
          <td><input name="firstname" id="firstname" required value="<?php echo (empty($posted['firstname'])) ? '' : $posted['firstname']; ?>" /></td>
           <td>Email: </td>
          <td><input  type="email"  required name="email" id="email" value="<?php echo (empty($posted['email'])) ? '' : $posted['email']; ?>" /></td>
        </tr>
        <tr>
         
          <td>Phone: </td>
          <td><input name="phone"  type="number" required value="<?php echo (empty($posted['phone'])) ? '' : $posted['phone']; ?>" /></td>
          <td>Amount: </td>
          <td><input name="amount" type="number" required value="<?php  echo $tariff; ?>"></td>
        </tr>
        <tr>
          <td>Product Info: </td>
          <td colspan="3"><textarea name="productinfo"><?php echo $result['plan_name'] ?>   
          </textarea></td>
        </tr>
        <input type="hidden" name="surl" value="http://www.glitzresearch.com/paystatus.php?pay=successful" size="64" />
      <input type="hidden" name="furl" value="http://www.glitzresearch.com/paystatus.php?pay=failed" size="64" />
      <input type="hidden" name="service_provider" value="payu_paisa" size="64" />
      <input type="hidden" name="curl" value="http://www.glitzresearch.com/paystatus.php?pay=cancelled" /> 
       

        
        <tr>
          <?php if(!$hash) { ?>
            <td colspan="4"><input type="submit" value="Submit"  class="btn btn-primary"/></td>
          <?php } ?>
        </tr>
      </table>
      </div>
    </form>
  </body>
</html>


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