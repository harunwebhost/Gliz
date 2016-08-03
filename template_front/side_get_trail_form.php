<div class="sidebar_form">
<div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">GET A FREE TRAIL</div>
                        </div>  
                        <div class="panel-body" >
                            <form id="signupform" class="form-horizontal" role="form" action="free_tail.php" method="POST">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" name="name" placeholder="Name" required="">
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="email"  required="" class="form-control" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="number" required="" class="form-control" name="mobile" placeholder="Mobile ">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <input type="text" required="" class="form-control" name="city" placeholder="City">
                                    </div>
                                </div>
                                    
                               <div class="form-group">
                        <div class="col-sm-12">
                            <select class="form-control" id="sel1" name="selected_plan" required="">
    <option>Select your Plan</option>
   <?php 
      $sql="select * from pricing" ;
      $result=execute_sql_query($sql);
      while ($paln_name=execute_fetch($result)) {
        ?>
        <option><?php echo display_data($paln_name['plan_name']); ?></option>
      <?php 
      }
   ?>
  </select>
        </div>
    </div>
      <div class="form-group">
                    <!-- Button -->                                        
                    <div class="col-md-offset-3 col-md-9">
                        <button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i>Submit</button>
                          
                    </div>
                </div>
                
            </form>
         </div>
    </div>
</div>