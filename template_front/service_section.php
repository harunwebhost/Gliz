  <section id="service">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-area">
            <h2 class="title">Our Services</h2>
            <span class="line"></span>
            <p>We Provide 1 SL 1 Target</p>
          </div>
        </div>
        <div class="col-md-12">
          <div class="service-content">
            <div class="row">
              <!-- Start single service -->
             <?php 
                $sql="Select * from services ";
                $result=execute_sql_query($sql);
                while ($get_services=execute_fetch($result)) {
                
               ?>
              <div class="col-md-4 col-sm-6">
                <div class="single-service wow zoomIn">
                  <i class="fi-check"></i>
                  <h4 class="service-title"><?php display_data($get_services['services_name']); ?></h4>
                  <p>
                    <?php 
                      echo shor_information($get_services['services_details'],13);
                      $service_titles=convert_spaces_into_underscore($get_services['services_name']);
                   ?>
                 </p>
                 <a href="content.php?title=<?php echo display_data($service_titles) ?>&service_id=<?php display_data($get_services['services_id']); ?>"><button type="button" class="btn btn-info btn-xs">Read more</button></a>
                </div>
              </div>
              <?php } ?>
              <!-- End single service -->
              
             
              
            
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>