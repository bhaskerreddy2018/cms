   <div class="page-header">
              <h2 class="page-title mx-2">
                <!--<span class="page-title-icon bg-warning text-white me-2">-->
                  <!--<i class="mdi mdi-table"></i>-->
                <!--</span>-->
                Due Transactions
              </h2>
            </div>
    <div class="card m-0 p-0">
                  <div class="card-body m-0 p-0">
                      
               
                      <?php
                      $query="SELECT * FROM `transactions` join customers on transactions.customerId=customers.setupBoxNo where type='due'";
                      $transactions=mysqli_query($conn,$query);
                      
                      while($transaction=mysqli_fetch_array($transactions)){
                    
                   echo '<div class="col-xl-12 mt-3 mb-3">
                    <div class="card bg-white">
                      <div class="card-body ">
                        <div class="d-flex justify-content-between align-items-start">
                          <div class="color-card">
                            <p class="mb-1 color-card-head text-dark">'.$transaction["customerId"].'   ('.$transaction["customerName"].')</p>
                            <h2 class="text-warning">'.$transaction["amount"].'</h2>
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
               