<?php
include('header.php');
?>


 <!-- Start: Content -->
  <section id="content">
    <div id="topbar">
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><span class="glyphicon glyphicon-home"></span></a></li>
        <li><a href="dashboard.php">Home</a></li>
        <li class="active">Add Customer</li>
      </ol>
    </div>
    <div class="container">
    
      
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            
   
            <div class="col-md-12">
              <div class="panel">
                <div class="panel-heading">
                  <div class="panel-title"> <span class="glyphicon glyphicon-pencil"></span>
                   Add Customer 
                   </div>
                </div>
                <div class="panel-body">
                  <form class="form-horizontal" id="addCustomerForm"  role="form" method="post" >
                    <div class="form-group">
                      <label for="chosen-list1" class="col-md-3 control-label">Name</label>
                      <div class="col-md-9">
                        <input type="text" id="customerName" class="form-control fieldSize" name="customerName" placeholder="Name" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="chosen-list2" class="col-md-3 control-label">Address</label>
                      <div class="col-md-9">
                    <textarea id="customerAddress" name="customerAddress" placeholder="Address" class="form-control fieldSize" required>
                    </textarea>
                     

                      </div>
                    </div>
                    <div class="form-group">
                      <label for="standard-list1" class="col-md-3 control-label">Mobile Number</label>
                      <div class="col-md-9">
            <input type="text" id="customerPhone" name="customerPhone" class="form-control phone valid fieldSize" maxlength="10" autocomplete="off" placeholder="9xxxxxxxxx">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="standard-list1" class="col-md-3 control-label">Verification Proof</label>
                      <div class="col-md-9">
                      
                        <div class="make-switch" data-on="danger" data-off="default">
                          <input type="checkbox" id="customerProof" name="customerProof">
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="standard-list2" class="col-md-3 control-label">
                         Plan
                      </label>
                      <div class="col-md-9">
                    <select id="customerPlan" required name="customerPlan" class="form-control fieldSize">
                 
                      <?php for($i=0;$i<count($allPlans);$i++){ 
                        echo "<option value='".$allPlans[$i]['id']."'>".$allPlans[$i]['plan_name']." -".$allPlans[$i]['month']." Month(s) </option>";
                      }?>
                     
                                      
                      </select>
                       </div>
                       </div>

                       <div class="form-group">
                      <label for="standard-list2" class="col-md-3 control-label">
                         Amount
                      </label>
                      <div class="col-md-9">
                      <input class="form-control fieldSize" id="customerAmount" name="customerAmount" type="text" placeholder="499 rs" disabled="">
                       </div>
                       </div>

                   <div class="form-group">
                      <label for="datepicker" class="col-lg-2 control-label">Connection Date</label>
                      <div class="col-md-10">
                        <div class="input-group"> <span class="input-group-addon"><i class="fa fa-calendar"></i> </span>
                          <input type="text" id="connection_date" name="connection_date" class="form-control datepicker fieldSize" required placeholder="DD/MM/YYYY">
                        </div>
                      </div>
                    </div>
                       
                      
                                 

                    <div class="form-group" align="center">
                  <input class="submit btn btn-blue" type="submit" value="Submit" name="addNewCustomer">
                    </div>
                  </form>
                </div>
              </div>
            </div>
        
          </div>
        </div>
  

    </div>
    </div>
  </section>
  <!-- End: Content --> 



	 
  	

<?php
include('footer.php');
?>