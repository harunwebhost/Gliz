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

  $hash = '';
  $MERCHANT_KEY = "in8BwMla";
  $SALT = "h5c2Tckcb2";
  $PAYU_BASE_URL = "https://secure.payu.in";
  
  if(empty($posted['txnid'])) {
    // Generate random transaction id
     $txnid = substr(hash('sha256', mt_rand() . microtime()), 0, 20);
    } else {
         $txnid = $posted['txnid'];
}


$hash = '';
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";

  $hashVarsSeq = explode('|', $hashSequence);
    $hash_string = '';  
  foreach($hashVarsSeq as $hash_var) {
      $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
      $hash_string .= '|';
    }

    $hash_string .= $SALT;


    $hash = strtolower(hash('sha512', $hash_string));
    $action = $PAYU_BASE_URL . '/_payment';

 ?>

<style>
  .stepwizard-step p {
    margin-top: 10px;
}

.stepwizard-row {
    display: table-row;
}

.stepwizard {
    display: table;
    width: 100%;
    position: relative;
}

.stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}

.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;

}

.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}

.btn-circle {
  width: 30px;
  height: 30px;
  text-align: center;
  padding: 6px 0;
  font-size: 8px;
  line-height: 1.428571429;
  border-radius: 15px;
}

</style>


  <div class="col-xs-12">
<div class="stepwizard">
    <div class="stepwizard-row setup-panel">
        <div class="stepwizard-step">
            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
            <p>Information</p>
        </div>
        <!-- <div class="stepwizard-step">
            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
            <p>Confirmation</p>
        </div>
         --><!-- <div class="stepwizard-step">
            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
            <p>Step 3</p>
        </div>
         <div class="stepwizard-step">
            <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
            <p>Step 4</p>
        </div> -->
    </div>
</div>
</div>
<form role="form" data-toggle="validator" id="contact_form" method="POST" action=" <?php echo $PAYU_BASE_URL . '/_payment';?>">
    <div class="row">
        <div class="col-md-6">
      <div class="form-group"> 
      <label class="col-md-12 control-label">First Name</label> 
             <div class="col-md-12 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="first_name" placeholder="First Name" class="form-control"  type="text">
    </div>
  </div>
        </div>        
   </div>

        <div class="col-md-6">
       <div class="form-group">
       <label class="col-md-12 control-label">Email Address</label> 
    <div class="col-md-12 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
    </div>
  </div>
</div>


        </div>

</div>
<hr>

     <div class="row">
        <div class="col-md-6">
      <div class="form-group">
  <label class="col-md-12 control-label">Phone #</label>  
    <div class="col-md-12 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="phone" placeholder="***********" class="form-control" type="text">
    </div>
  </div>
</div>      
   </div>

       
      <div class="col-md-6">
      <div class="form-group">
  <label class="col-md-12 control-label">Selected Plan</label>  
    <div class="col-md-12 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="material-icons"></i></span>
        <input name="Selected" placeholder="Selected Plan" class="form-control" type="text" value="<?php echo $result['plan_name'] ?>">
    </div>
  </div>
</div>      
   </div>


        </div>


<hr>

   <div class="row">
        <div class="col-md-6">
      <div class="form-group">
  <label class="col-md-12 control-label">Total</label>  
    <div class="col-md-12 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-inr"></i></span>
  <input name="amount"  class="form-control" type="text" value="<?php  echo $tariff; ?>">
    </div>
  </div>
</div>      
   </div>

        </div>

<hr>

<div class="row">
        <div class="col-md-6">
         <div class="form-group">
         <div class="col-md-12 inputGroupContainer">
             
         <input type="submit" name="" value="Submit" class="btn btn-lg btn-primary">
             

</div>
             </div>
        </div>

</div>
  
     <input type="hidden" name="key" value="in8BwMla" />
      <input type="hidden" name="hash" value="<?php echo $hash; ?>"/>
      <input type="hidden" name="txnid" value="<?php echo $txnid ?>" />
      <input type="hidden" name="surl" value="http://www.glitzresearch.com/success.php" size="64" />
      <input type="hidden" name="furl" value="http://www.glitzresearch.com/failed.php" size="64" />
      <input type="hidden" name="service_provider" value="payu_paisa" size="64" />
      <input type="hidden" name="curl" value="http://www.glitzresearch.com/cancel.php" /> 
      <input type="hidden" name="productinfo" value="<?php echo $result['plan_name'] ?>" >
</form>



