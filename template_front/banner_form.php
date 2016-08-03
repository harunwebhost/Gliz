
<div class="row hidden-xs ">
    <div class="sliderform container">
        <div class="col-md-4 col-md-offset-8 col-sm-4 col-sm-offset-7">
            <div class="panel panel-primary panel-transparent">
                <div class="panel-heading">
                  <strong>GET A FREE TRIAL</strong>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="free_tail.php"> 
                    <div class="form-group">
                        
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="Name" required="" name="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="Email" class="form-control" id="inputPassword3" placeholder="Your Email" required="" name="email">
                        </div>
                    </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                            <input type="number" class="form-control" id="inputPassword3" placeholder="Mobile" required="" name="mobile">
                        </div>
                    </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="inputPassword3" placeholder="City" required="" name="city">
                        </div>
                    </div>
                      <div class="form-group">
                        <div class="col-sm-12">
                            <select class="form-control" id="sel1" name="selected_plan">
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
                        <div class="col-sm-offset-3 col-sm-9">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox">
                                  Term & Condition
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group last">
                        <div class="col-sm-offset-3 col-sm-9">
                            <button type="submit" class="btn btn-default btn-sm">
                                Sign in</button>
                                 
                        </div>
                    </div>
                    </form>
                </div>
           
            </div>
        </div>
     </div>

     







































<!-- <div class="row">
  <div class="col-md-5">
<h3 class="text-center">Get Free Trial</h3>

<form>
  <div class="form-group"> 
    <input type="text" class="form-control inputButton input"  placeholder="Name" id="logbox">
  </div>
  <div class="form-group">
    <input type="text" class="form-control inputButton input"  placeholder="Email Address" id="logbox">
  </div>

  <div class="form-group">
    <input type="text" class="form-control inputButton input"  placeholder="Phone Number" id="logbox">
  </div>
 <div class="form-group">
  <select class="form-control" id="sel1">
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
<span class="fontresize"><a href="">Term & Condition</a></span>  
<div class="clear"></div>
<button type="submit" class="btn btn-default">Submit</button>
</form>
  </div>
 </div> -->
<!-- 
<style type="text/css">
    .fontresize a{
      font-size: 10px;
      color: #fff;
    }
    .clear{
      clear: both;
    }
         #logbox {
            background-color: #fff;
            -webkit-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);
            -moz-box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);
            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.25);
        }
  

</style>