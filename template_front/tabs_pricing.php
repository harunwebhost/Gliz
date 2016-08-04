<style type="text/css">
  .somemargin{
    margin-top: 10px;
  }
</style>
<?php 
$sql="Select * from services";
$sql_services=execute_sql_query($sql);

while($get_data=execute_fetch($sql_services)){?>
<div class="col-md-6">

 <ul id="myTab" class="nav nav-tabs">
        <li><a href="#home" data-target="#home, #home_else" data-toggle="tab"><button class="btn-primary">About</button></a></li>
        <li><a href="#profile" data-target="#profile, #profile_else" data-toggle="tab"><button class="btn-primary">Medium</button></a></li>
        <li><a href="#profile3" data-target="#profile3, #profile_else3" data-toggle="tab"><button class="btn-primary">Sample</button></a></li>
        <li><a href="#profile4" data-target="#profile4, #profile_else4" data-toggle="tab"><button class="btn-primary">Pricing</button></a></li>
        

    </ul>
    </ul>


<div id="myTabContent" class="tab-content">
    <div class="tab-pane fade in active" id="home">
        <!-- <p>Content 1.</p> -->
    </div>
    <div class="tab-pane fade" id="profile">
        <!-- <p>Content 2.</p> -->
    </div>
     <div class="tab-pane fade" id="profile3">
        <!-- <p>Content 3.</p> -->
    </div>

     <div class="tab-pane fade" id="profile4">
       <!--  <p>Content 4.</p> -->
    </div>
</div>

<div class="panel-group">
  <div class="panel panel-primary">
  <div class="panel-heading"><?php echo $get_data['services_name'];?></div>
    <div class="panel-body">
<div id="myTabContent" class="tab-content">
    <div class="tab-pane fade in active" id="home_else">
        <p><?php echo substr($get_data['services_details'],0,150);?></p>
        <p><button class="btn btn-info">Read More</button></p>
    </div>
    <div class="tab-pane fade" id="profile_else">
        <p>medium</p>
    </div>
     <div class="tab-pane fade" id="profile_else3">
        <p>Sample</p>
    </div>
     <div class="tab-pane fade" id="profile_else4">
        <p>Pricing</p>
        <?php 
            $services_id=$get_data['services_id'];
           $sql1="select * from pricing where service_id=$services_id";
            $see=execute_sql_query($sql1);
            $get_data_prince=execute_fetch($see);
        ?>
          <div class="row somemargin">
            <div class="col-md-4">
            Monthly 
            </div>
            <div class="col-md-4">
            <?php echo $get_data_prince['monthly']?>
            </div>
             <div class="col-md-4">
            <a href=""><button class="btn-primary"> Pay Now</button></a>
            </div>
          </div>
          <div class="row somemargin">
            <div class="col-md-4">
            
            Quarterly 
            </div>
            <div class="col-md-4">
            <?php echo $get_data_prince['quarterly']?>
            </div>
             <div class="col-md-4">
            <a href=""><button class="btn-primary"> Pay Now</button></a>
            </div>
          </div>
          <div class="row somemargin">
            <div class="col-md-4">
            Half Year
            </div>
            <div class="col-md-4">
            <?php echo $get_data_prince['half_yearly']?>
            </div>
             <div class="col-md-4">
            <a href=""><button class="btn-primary"> Pay Now</button></a>
            </div>
          </div>
          <div class="row somemargin">
            <div class="col-md-4">
            Yearly
            </div>
            <div class="col-md-4">
            <?php echo $get_data_prince['yearly']?>
            </div>
             <div class="col-md-4">
            <a href=""><button class="btn-primary"> Pay Now</button></a>
            </div>
          </div>
       
    </div>
</div></div>
  </div>
</div>
</div>
<?php }?>


