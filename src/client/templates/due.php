     <div class="page-header">
              <h2 class="page-title mx-2">
                <!--<span class="page-title-icon bg-warning text-white me-2">-->
                  <!--<i class="mdi mdi-table"></i>-->
                <!--</span>-->
                Due Customers
              </h2>
            </div>
    <div class="card m-0 p-0">
                  <div class="card-body m-0 p-0">
                    
                      <?php
                      $query="select * from customers where totalDue>0 ORDER by totalDue DESC";
                      $customers=mysqli_query($conn,$query);
                      
                      while($customer=mysqli_fetch_array($customers)){
                    
                   echo '<div class="col-xl-12 mt-3 mb-3">
                    <div class="card bg-white">
                      <div class="card-body px-3 py-4">
                        <div class="d-flex justify-content-between align-items-start">
                          <div class="color-card">
                            <p class="mb-0 color-card-head text-dark">'.$customer["customerName"].'</p>
                            <h2 class="text-warning">'.$customer["totalDue"].'</h2>
                          </div>
                           <i class="card-icon-indicator mdi mdi-account bg-inverse-icon-warning"></i>
                       </div>
                        <h6 class="text-dark">'.$customer["setupBoxNo"].'</h6>
                      </div>
                    </div>
                  </div>';
                    
                    }
                    ?>
                  </div>
                </div>
               