<div class="page-header">
              <!--<h3 class="page-title">-->
              <!--  <span class="page-title-icon bg-gradient-primary text-white me-2">-->
              <!--    <i class="mdi mdi-bank-transfer"></i>-->
              <!--  </span> Support-->
              <!--</h3>-->
            </div>
             <?php
                    $add=$_REQUEST['add'];
                    if($add!=1){?> 
                    
                          <a href="customers.php?add=1" class="btn btn-info btn-block mr-2 p-2 rounded">Add Customer</a>
                            <?php
              if(isset($_REQUEST['status'])){
                $status=$_REQUEST['status'];
                }
              if($status!=""){
                  echo "<div class='alert alert-info text-center mt-2'>".$status."</div>";
              }
              ?>
                <?php }?>
                         <?php if($add==1){?> 
            <div class="row">
             
             <div class="col-12 grid-margin stretch-card mb-4">
              <div class="card">
                <div class="card-body">
                   
                       
                  <h4 class="card-title">Add New Customer</h4>
                
              <br>
                 <form class="forms-sample" action="redirect/addCustomer.php">
                      
                    <div class="form-group">
                      <label for="exampleInputName1">SetUp Box Number <span class="text-danger" style="font-size:3.3vh;">*</span></label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Enter SetUp Box Number" name="setupBoxNo">
                    </div>
                     <div class="form-group">
                      <label for="exampleInputName1">Customer Name <span class="text-danger" style="font-size:3.3vh;">*</span></label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Enter Customer Name" name="customerName">
                    </div>
                     <div class="form-group">
                      <label for="exampleInputName1">Aadhaar Number <span class="text-danger" style="font-size:3.3vh;">*</span></label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Enter Aadhaar Number" name="aadhaarNo">
                    </div>
                    
                    
                    
                     <div class="form-group">
                      <label for="exampleInputName1">Village</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Enter Village" name="villageName">
                    </div>
                 
                    <div class="form-group">
                      <label for="exampleInputName1">Phone</label>
                      <input type="number" class="form-control" id="exampleInputName1" placeholder="Enter Mobile No" name="mobileNo">
                    </div>
                                    
                    <button type="submit" class="btn btn-primary btn-block mr-2 p-2 rounded">Submit</button>
                      </form>
                         </div>
              </div>
            </div>
            </div>

                <?php }?>
             
<br>
    <br>
              
                <div class="card m-0 p-0" style="">
                     <form class="forms-sample p-2" action="customers.php">
                      
                    <div class="form-group">
                     
                      <input type="text" class="col-md-8 form-control mt-2 border-dark" id="exampleInputName1" placeholder="Enter SetUp Box Number or Customer Name Or Mobile" name="search">
                    </div>
                     <button type="submit" class="col-md-3 btn btn-info btn-sm mr-2 p-1 rounded">Search</button>
                      </form>
                  <div class="card-body m-0 p-0">
                      
                      <?php
                      
                       $search=$_REQUEST['search'];
                       
                      $query="select * from customers order by sno desc";
                      
                      if($search!=""){
                          $query="select * from customers Where setupBoxNo LIKE '%$search%' OR customerName LIKE '%$search%' OR mobileNo LIKE '%$search%'";

                          
                      }
                      $customers=mysqli_query($conn,$query);
                      
                      while($customer=mysqli_fetch_array($customers)){
                    
                   echo '<div class="col-xl-12 mt-3 mb-3">
                    <div class="card bg-white">
                      <div class="card-body ">
                        <div class="d-flex justify-content-between align-items-start">
                          <div class="color-card">
                            <p class="mb-1 color-card-head text-dark">'.$customer["customerName"].'</p>
                            <h2 class="text-warning">'.$customer["totalDue"].'</h2>
                          </div>
                         <a class="btn btn-info rounded" href="recharge.php?id='.$customer["setupBoxNo"].'"  >Recharge</a>
                       </div>
                        <h6 class="text-dark">'.$customer["setupBoxNo"].'</h6>
                      </div>
                    </div>
                  </div>';
                    
                    }
                    ?>
                  </div>
                </div>
               