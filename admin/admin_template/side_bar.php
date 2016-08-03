<?php 
                    
                    if(isset($_GET['main_id']) && (!isset($_GET['child_id']))){
                      $main_id=$_GET['main_id'];
                        $sql="SELECT * FROM mainpage where mainpage_id='$main_id'" ;
                       $result=execute_sql_query($sql);
                       $get_main_page=execute_fetch($result);
                       $title=$get_main_page['title'];
                       $content=$get_main_page['contents'];
                       $quote=$get_main_page['quote'];
                       $status=$get_main_page['status'];
                       $update="update";
                       $table_name="mainpage";
                       $update_key=$main_id;
                       $primary_key="mainpage_id";
                       } elseif(isset($_GET['child_id']) && $_GET['child_id']!="new"){
                       
                        /*Child pages*/
                        $selected_id=$_GET['main_id'];
                        $update_key=sql_injection($_GET['child_id']);
                        if(empty($selected_id)){
                           $sql="SELECT * FROM mainpage" ;
                        }else{
                            $sql="SELECT * FROM childpage where child_id='$update_key'" ;
                       }
                       $result=execute_sql_query($sql);
                       $get_main_page=execute_fetch($result);
                       $title=$get_main_page['title'];
                       $content=$get_main_page['contents'];
                       $quote=$get_main_page['quote'];
                       $status=$get_main_page['status'];
                       $update="update";
                       $table_name="childpage";
                       $primary_key="child_id";
                      } else {
                        $table_name="mainpage";
                         if(isset($_GET['child_id'])){
                          if($_GET['child_id']=="new"){
                              $table_name="childpage";
                          }
                         } 

                        $title="";
                       $content="";
                       $quote="";
                       $status="";
                       $update="insert";
                       $update_key="";
                        
                      }
                       

 ?>
          <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Elements</h3>
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
                    <h2>Create Page</h2>
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
      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Page Title<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" value=" <?php echo $title; ?>" name="page[title]">
                        </div>
                      </div>
                       <input type="hidden" name="table_name" value="<?php echo $table_name; ?>">
                        <input type="hidden" name="action" value="<?php echo $update; ?>">
                        <input type="hidden" name="update_key" value="<?php echo $update_key; ?>">
                         <input type="hidden" name="primary_key" value="<?php echo $primary_key ?>">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Main Quote <span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" id="last-name" name="page[quote]" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $quote; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Post Contents <span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                         <textarea name="page[contents]" class="form-control col-md-7 col-xs-12" id="editor1"><?php echo $content; ?></textarea>
                    <script>
                        CKEDITOR.replace( 'editor1' );
                   </script>
                        </div>
                      </div>
                        <?php  if(isset($_GET['child_id'])){?>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Select Main<span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                        <select name="page[mainpage_id]" id="" class="form-control">
                      <?php get_main_pages($selected_id); ?>
                        </select>
                        </div>
                      </div>
                      <?php } ?>


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
        