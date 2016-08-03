<?php 
                    
                    require_once('functions/db_function.php');
                    if(isset($_GET['delete_id'])){
                      $delete_value=sql_injection($_GET['delete_id']);
                      $primary_key='free_trail_id';
                      $pagename="free_trail_view.php";
                      $message="Record is delated";
                      $table='free_trail';

                      delete_records($primary_key,$delete_value,$table,$pagename,$message);
                    }
                       

 ?>
          <div class="right_col" role="main">
          <div class="">
            
            <div class="clearfix"></div>
            <div class="row">
             
               <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Free Trail User </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                   
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                   
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>City</th>
                          <th>Selected</th>
                          <th>Date</th>
                          <th>Action</th>
                        </tr>
                      </thead>


                      <tbody>
                        <?php 
                          $sql="SELECT * FROM free_trail";
                         $result=execute_sql_query($sql);
                         while ($user=execute_fetch($result)) {
                        ?>
                        <tr>
                          <td><?php display_data($user['name']); ?></td>
                          <td><?php display_data($user['email']); ?></td>
                          <td><?php display_data($user['mobile']); ?></td>
                          <td><?php display_data($user['city']); ?></td>
                          <td><?php display_data($user['selected_plan']); ?></td>
                          <td><?php display_data($user['contact_date']); ?></td>
                         <td><a href="free_trail_view.php?delete_id=<?php echo display_data($user['free_trail_id']);?>"><button class="btn btn-primary">Delete</button></a></td>
                       
                        </tr>
                       <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

                </div>
              </div>
       
               
          </div>
           </div>
        </div>
        