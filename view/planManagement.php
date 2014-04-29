<?php
include('header.php');
?>


 <!-- Start: Content -->
  <section id="content">
    <div id="topbar">
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><span class="glyphicon glyphicon-home"></span></a></li>
        <li><a href="dashboard.php">Home</a></li>
        <li class="active">Manage Plan </li>
      </ol>
    </div>

    
    <div class="container">


      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-visible">
            <div class="panel-heading">
              <div class="panel-title hidden-xs"> <span class="glyphicon glyphicon-tasks"></span> Plans List </div>
            </div>
            <div class="panel-body padding-bottom-none">
              <table class="table table-striped table-bordered table-hover" id="plansList">
                <thead>
                  <tr>
                    <th>Plan Name</th>
                    <th class="visible-lg">Speed</th>
                    <th class="text-center hidden-xs">Months</th>
                    <th>Download Type</th>
                    <th class="hidden-xs hidden-sm">Price-Rs (IND)</th>
                    <th class="text-center hidden-xs">Actions</th>

                  </tr>
                </thead>
                <tbody>

<?php /*
echo "<pre>";
var_dump($allPlans);*/
for ($i=0; $i<count($allPlans);$i++){ 


  # code...
?>
                  <tr align="center">
                    <td><span class="xedit"><?php echo $allPlans[$i]['plan_name'];?></span></td>
                    <td class="hidden-xs"><span class="xedit"><?php echo $allPlans[$i]['speed'];?></span></td>
                    <td><?php echo $allPlans[$i]['month'];?></td>
                    <td class="hidden-xs hidden-sm"><span class="label label-info"><?php echo $allPlans[$i]['download_type'];?></span></td>
                    <td class="visible-lg"><?php echo "(".$allPlans[$i]['price']."x".$allPlans[$i]['month'].") =  ".($allPlans[$i]['month']*$allPlans[$i]['price']);?></td>
                    <td class="hidden-xs text-center"><div class="btn-group">
                         <button type="button" class="btn btn-success btn-gradient"> <span class="glyphicon glyphicon-edit"></span> </button>
                         <button type="button" class="btn btn-danger btn-gradient dropdown-toggle" data-toggle="dropdown"> <span class="glyphicons glyphicons-delete"></span> </button>
                      </div>
                    </td>
                  </tr>
                  
<?php

}?>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div> <!-- Table ends here  -->

  
    






      
      <div class="row">
        <div class="col-md-6">
          <div class="row">
            
   
            <div class="col-md-12">
              <div class="panel">
                <div class="panel-heading">
                  <div class="panel-title"> <span class="glyphicon glyphicon-pencil"></span>
                   Add Plan 
                   </div>
                </div>
                <div class="panel-body">
                  <form class="form-horizontal" id="addPlanForm"  role="form" method="post" >
                    <div class="form-group">
                      <label for="chosen-list1" class="col-md-3 control-label">Plan</label>
                      <div class="col-md-9">
                        <input type="text" id="planName" class="form-control fieldSize" name="planName" placeholder="Plan" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="chosen-list2" class="col-md-3 control-label">Speed</label>
                      <div class="col-md-9">
<input type="text" id="planSpeed" name="planSpeed" placeholder="Speed" class="form-control fieldSize" required> <br/>
<select id="planType" name="planType" class="form-control fieldSize" required>
                                         <option value="">Select Speed Plan</option>
                                        <option value="kbps">kbps</option>
                                        <option value="mbps">mbps</option>
                                        <option value="gb">gb</option>
                                    </select>                      

                      </div>
                    </div>
                    <div class="form-group">
                      <label for="standard-list1" class="col-md-3 control-label">Price</label>
                      <div class="col-md-9">
                        <input type="text" id="planPrice" name="planPrice" placeholder="Price" class="form-control fieldSize" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="standard-list2" class="col-md-3 control-label">
                          Download Type
                      </label>
                      <div class="col-md-9">
                      <select id="planDownloadType" name="planDownloadType" class="form-control fieldSize">
                                          <option value="">Select Download Type</option>
                                        <option value="unlimited">Unlimited</option>
                                        <option value="limited">Limited</option>
                                    </select>
                        
                      </div>
                    </div>

                     <div class="form-group">
                      <label for="standard-list2" class="col-md-3 control-label">
                         Month Mode
                      </label>
                      <div class="col-md-9">
                    <select id="planMonthMode" name="planMonthMode" style="width:70%;" class="form-control">
                                        <option value="">Select Month Mode</option>
                                        <option value="1">1 - Month</option>
                                        <option value="3">3 - Month(s)</option>
                                        <option value="6">6 - Month(s)</option>
                                    </select>
                       </div>
                       </div>             

                    <div class="form-group" align="center">
                  <input class="submit btn btn-blue" type="submit" value="Submit" name="addNewPlan">
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