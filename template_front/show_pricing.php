<?php 
	function show_pricing_list($price_id,$showin_row){
		
		?>
		<div class="row">
              <?php 
         	if(empty($price_id)){
         		 $sql="Select * from pricing";
         	} else {
         		$sql="Select * from pricing where pricing_id='$price_id'"; 
         	}     
               
                $result=execute_sql_query($sql);
                $i=0;
                while ($get_price=execute_fetch($result)) {
               ?>
              <div class="col-md-<?php echo $showin_row;?> col-sm-6 col-xs-12 pricing_margin">
                <div class="single-table-price wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                  <div class="price-header">
                    <span class="price-title">Price</span>
                    <div class="price">
                      <sup class="price-up"> <!-- &#x20a8; --></sup>
                        
                      <span class="price-down"><?php  display_data($get_price['plan_name']);?></span>
                    </div>
                  </div>
                  <div class="price-article">
                    <ul>
                      <li><?php  echo "Monthly /";display_data($get_price['monthly']);echo " RS";?> <a href="payform.php?title=payments&duration=monthly&tariff=<?php echo display_data($get_price['monthly'])?>&pay_now=<?php display_data($get_price['pricing_id'])?>" class="btn btn-info btn-sm pull-right">Pay Now</a></li>
                      <li><?php  echo "Quarterly /";display_data($get_price['quarterly']);echo " RS";?> <a href="payform.php?title=payments&duration=quarterly&tariff=<?php echo display_data($get_price['quarterly'])?>&pay_now=<?php display_data($get_price['pricing_id'])?>" class="btn btn-info btn-sm pull-right">Pay Now</a></li>
                      <li><?php  echo "Half Yearly /";display_data($get_price['half_yearly']); echo " RS";?>  <a href="payform.php?title=payments&duration=half_yearly&tariff=<?php echo display_data($get_price['half_yearly'])?>pay_now=<?php display_data($get_price['pricing_id'])?>" class="btn btn-info btn-sm pull-right">&Pay Now</a></li>
                      <li><?php  echo "Yearly /";display_data($get_price['yearly']); echo " RS";?> <a href="payform.php?title=payments&duration=yearly&tariff=<?php echo display_data($get_price['yearly'])?>&pay_now=<?php display_data($get_price['pricing_id'])?>" class="btn btn-info btn-sm pull-right">Pay Now</a></li>
                    </ul>
                  </div>
<!-- 
                  <div class="price-footer">
                    <a class="purchase-btn" href="#">Paynow</a>
                  </div> -->
                </div>
              </div>
             
              <?php } ?>
              
           
            </div>
		<?php 
	}
 ?>