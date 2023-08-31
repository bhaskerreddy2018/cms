   <div class="page-header">
              <h2 class="page-title mx-2">
                <!--<span class="page-title-icon bg-warning text-white me-2">-->
                  <!--<i class="mdi mdi-table"></i>-->
                <!--</span>-->
                All Transactions
              </h2>
            </div>
            
   
    <div class="card m-0 p-0">
                  <div class="card-body m-0 p-0">
                      
                      <?php
                      $query="SELECT * FROM `transactions` join customers on transactions.customerId=customers.setupBoxNo";
                      $transactions=mysqli_query($conn,$query);
                      
                      while($transaction=mysqli_fetch_array($transactions)){
                          $color="success";
                          if($transaction["type"]=="due"){
                               $color="warning";
                          }
                    
                   echo '<div class="col-xl-12 col-md-12 mb-3 mt-3">
                    <div class="card bg-white">
                      <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                          <div class="color-card">
                            <p class="mb-1 color-card-head text-dark">'.$transaction["customerId"].'   ('.$transaction["customerName"].')</p>
                            <h2 class="text-'.$color.'">'.$transaction["amount"].'</h2>
                          </div>
                           <i class="card-icon-indicator mdi mdi-account bg-inverse-icon-warning"></i>
                       </div>
                        
                        <h6 class="text-dark">'.$transaction["type"].'</h6>
                      </div>
                    </div>
                  </div>';
                    
                    }
                    ?>
                  </div>
                </div>
               