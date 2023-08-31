<div class="page-header">
              <!--<h3 class="page-title">-->
              <!--  <span class="page-title-icon bg-gradient-primary text-white me-2">-->
              <!--    <i class="mdi mdi-bank-transfer"></i>-->
              <!--  </span> Support-->
              <!--</h3>-->
            </div>
            <div class="row">
             
             <div class="col-12 grid-margin stretch-card mb-4">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Transaction</h4>
                  <?php
              if(isset($_REQUEST['status'])){
                $status=$_REQUEST['status'];
                }
              if($status!=""){
                  echo "<div class='alert alert-info'>".$status."</div>";
              }
              ?>
              <br>
                 <form class="forms-sample" action="redirect/addTransaction.php">
                      <?php
                      $id=$_REQUEST['id'];
              if($id){  
              
              ?>
            
               <div class="form-group">
                      <label for="exampleInputName1">Customer<span class="text-danger" style="font-size:3.3vh;">*</span></label>
                      <input type="number" class="form-control" id="exampleInputName1" name="customerId" value="<?php echo $id; ?>">
            

                   </div>
              <?php }?>
              
              <?php
              if(!isset($_REQUEST['id'])){  
              $id=$_REQUEST['id'];?>
                
                    <div class="form-group">
                      <label for="exampleInputName1">select customer<span class="text-danger" style="font-size:3.3vh;">*</span></label>
                      <select type="text" class="form-control" id="exampleInputName1"  name="customerId" data-live-search="true">
                           <option>Select Customer</option>
                            <?php
                      $query="select * from customers order by sno desc";
                      $customers=mysqli_query($conn,$query);
                     
                      while($customer=mysqli_fetch_array($customers)){
                    
              echo '<option value="'.$customer['setupBoxNo'].'">'.$customer['customerName'].' ('.$customer['setupBoxNo'].')</option>';
                      }
                      ?>


                        </select>
                    </div>
                    
                     <?php }?>


                     <div class="form-group">
                      <label for="exampleInputName1">Select Type<span class="text-danger" style="font-size:3.3vh;">*</span></label>
                      <select type="text" class="form-control" id="exampleInputName1"  name="type">
               <option value="paid">Paid</option>
               <option value="due">Due</option>


                        </select>
                    </div>


                   
                 
                    <div class="form-group">
                      <label for="exampleInputName1">amount<span class="text-danger" style="font-size:3.3vh;">*</span></label>
                      <input type="number" class="form-control" id="exampleInputName1" placeholder="Enter Amount" name="amount">
            

                   </div>
                                   
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      </form>
                
                </div>
              </div>
            </div>
            </div>

<br>
    <br>
               
         