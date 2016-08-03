<?php 
                    
                    require_once('functions/db_function.php');
                    $table_name="services";
                    if(isset($_GET['service_id'])){
                      $service_id=sql_injection($_GET['service_id']);
                        $sql="SELECT * FROM services where services_id='$service_id'" ;
                       $result=execute_sql_query($sql);
                       $get_main_page=execute_fetch($result);
                       $title=$get_main_page['services_name'];
                       $content=$get_main_page['services_details'];
                       $status=$get_main_page['status'];
                       $action="update";
                       $update_key=$service_id;
                       } else
                      {
                        $title="";
                       $content="";
                       $quote="";
                       $status="";
                       $action="insert";
                        $update_key="";

                      }
                       

 ?>
          <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Add Services</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Create Service</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="functions/insert.php">
                      <input type="hidden" name="table_name" value="services">

                      <input type="hidden" name="table_name" value="<?php echo $table_name; ?>">
                        <input type="hidden" name="action" value="<?php echo $action; ?>">
                        <input type="hidden" name="update_key" value="<?php echo $update_key; ?>">
                         <input type="hidden" name="primary_key" value="services_id">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Service Title<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" value=" <?php echo $title; ?>" name="page[services_name]">
                        </div>
                      </div>
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Post Contents <span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                         <textarea name="page[services_details]" class="form-control col-md-7 col-xs-12" id="editor1"><?php echo $content; ?></textarea>
                    <script>
                        CKEDITOR.replace( 'editor1' );
                   </script>
                        </div>
                      </div>
                     


                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Active/Inactive <span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <div class="radio">
                     <label>
                       <input type="radio" name="page[status]" id="optionsRadios2" value="1" <?php if($status=="1"){echo "checked";} ?>>
                       Show In front menu
                    </label>
                       <label>
                       <input type="radio" name="page[status]" id="optionsRadios2" value="0" <?php if($status=="0"){echo "checked";} ?>>
                       Hide In front menu
                       </label>
                    </div>
                        </div>
                      </div>

                       <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                    
                      <div class="ln_solid"></div>
                    

                    
                  </div>
                </div>
              </div>
           


          
               
</form>
          </div>
           </div>
        </div>
        