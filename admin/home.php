<h1 class="text-light">Welcome to <?php echo $_settings->info('name') ?></h1>
<hr class="border-light">
<div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-light elevation-1"><i class="fas fa-prescription-bottle-alt"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Vaccine Listed</span>
                <span class="info-box-number">
                  <?php 
                    $vaccine = $conn->query("SELECT * FROM vaccine_list where `status` = 1 ")->num_rows;
                    echo number_format($vaccine);
                  ?>
                  <?php ?>
                </span>
              </div>
            
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-map-marked-alt"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Vaccination Center</span>
                <span class="info-box-number">
                <?php 
                    $location = $conn->query("SELECT * FROM vaccination_location_list where `status` = 1 ")->num_rows;
                    echo number_format($location);
                  ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>

          <div class="col-12 col-sm-3 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-syringe"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Fully Vaccinated</span>
                <span class="info-box-number">
                <?php 
                    $individual = $conn->query("SELECT * FROM individual_list where `status` = 2 ")->num_rows;
                    echo number_format($individual);
                  ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
        
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
</div>
<div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-secondary text-white p-3 elevation-1"><i class="fas fa-spinner"></i></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Partitially vaccinated</span>
                <span class="info-box-number">
                  <?php 
                    $partitially = $conn->query("SELECT * FROM individual_list where `status` = 1 ")->num_rows;
                    echo number_format($partitially);
                  ?>
                  <?php ?>
                </span>
              </div>
            
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          
         
          <!-- /.col -->
        
        <div class="col-12 col-sm-3 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bbg-secondary text-white p-3 elevation-1"><i class="fas fa-clock"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Pending</span>
                <span class="info-box-number">
                <?php 
                    $pending = $conn->query("SELECT * FROM individual_list where `status` = 0 ")->num_rows;
                    echo number_format($pending);
                  ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
        
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        </div>
</div>
        
<div class="container">
  
</div>
