  <section id="pricing-table">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-area">
            <h2 class="title">Our Pricing Tables</h2>
            <span class="line"></span>
            <p>We Office Best Price</p>
          </div>
        </div>
        <div class="col-md-12">
          <div class="pricing-table-content">
            <?php 
            require_once($get_template_directory.'/show_pricing.php');
                        $slected_pricing="";
                        show_pricing_list($slected_pricing,4);

            ?>
           </div>
        </div>
      </div>
    </div>
  </section>