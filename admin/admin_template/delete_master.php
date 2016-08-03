<?php 
                    
                    require_once('functions/db_function.php');
                    
                  
                       

 ?>
          <div class="right_col" role="main">
          <div class="">
            
            <div class="clearfix"></div>
            <div class="row">
             
               <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Pages</h2>
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
                        


                         <?php 
                         if(isset($_GET['view'])){
                            if($_GET['view']=='mainpages'){
                              $table_name="mainpage";
                              get_col_names($table_name);
                            }
                            if ($_GET['view']=="childpages") {
                                $table_name="childpage";
                                $edit_url="index.php?child_id=1&main_id=7";
                                get_col_names($table_name);   
                            }
                            if ($_GET['view']=="services") {
                                $table_name="services";
                                get_col_names($table_name);   
                            }
                            if ($_GET['view']=="pricing") {
                                $table_name="pricing";
                                get_col_names($table_name);   
                            }
                         }

                          if(isset($_GET['delete_id']) && isset($_GET['tbles'])){
                            $delete_value=$_GET['delete_id'];
                            $table_name=$_GET['tbles'];
                            delete_page_records($delete_value,$table_name);
                           }

                         ?>

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
        