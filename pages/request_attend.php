<?php
session_start();
    include "../master/sections/connect.php";
    include "../master/sections/start.php";
    include "../master/sections/links.php";
?>
   <div class="main-panel">
        <div class="main-content">
          <div class="content-wrapper">
            <div class="container-fluid">
            <div class="card-header">
                  <div class="card-title-wrap bar-success">
                      <h4 class="card-title">Request A Form</h4>
                  </div>
              </div>
              <div class="card-body">
                <div class="px-3">
                 
<!-- --------------------form--------------- -->
<form class="form form-horizontal" action=" <?php echo $_SERVER['PHP_SELF']; ?>"  method="POST">
                <div class="form-body">

                  <div class="form-group row">
                    <label class="col-md-3 label-control" for="projectinput7">Employee Name : </label>
                    <div class="col-md-9">
                       
                        
                      <div class="col-md-9">
                        <select id="projectinput7" name="budget" class="form-control">
                        <?php
                        $getEmp = $conn -> query("SELECT emp_id , emp_name 
                        FROM employees") -> fetchAll(PDO::FETCH_KEY_PAIR);
                        foreach($getEmp as $key => $value):

                        ?>
                          
                        <option value="<?php echo $key; ?>"><?php echo $value; ?></option>

                        <?php 
                        endforeach;
                        ?>  

                
                        </select>
                      </div>
                    </div>  
                  </div>
  
                 
  
                    <div class="form-group row">
                    <label class="col-md-3 label-control" for="projectinput9">Date: </label>
                    <div class="col-md-9">
                      <div class="position-relative has-icon-left">
                        <input type="date" id="timesheetinput3" class="form-control" name="date">
                        <div class="form-control-position">
                          <i class="ft-message-square"></i>
                        </div>
                      </div>
                      </div>
                      </div>
                    </div>
          
               
                  <div class=" row">
                    <div class="col-md-12">
                      <div class=" row form-group">
                        <label class="col-md-3 label-control">Start time: </label>
                        <div class="position-relative has-icon-left col-lg-9">
                          <input type="time" id="timesheetinput5" class="form-control" name="starttime">
                          <div class="form-control-position">
                            <i class="ft-clock"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                      
                    <div class="col-md-12">
                      <div class=" row form-group">
                        <label class="col-md-3 label-control">End time: </label>
                        <div class="position-relative has-icon-left col-lg-9">
                          <input type="time" id="timesheetinput6" class="form-control" name="endtime">
                          <div class="form-control-position">
                            <i class="ft-clock"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
  
                    <div class="form-actions">
                      <button type="reset" class="btn btn-danger mr-1">
                        <i class="icon-trash"></i> Cancel
                      </button>
                      <button type="submit" class="btn btn-success">
                        <i class="icon-note"></i> Save
                      </button>
                    </div>
             
                </form>


                </div>
              </div>


            </div></div></div></div>


            <?php
                      if($_SERVER['REQUEST_METHOD']== 'POST'){
                        $emp_id = $_POST['budget'];
                        $attdate = $_POST['date'];
                        $start = $_POST['starttime'];
                        $end = $_POST['endtime'];

                        if(empty($start) || empty($end)){
                          echo "<div class=\"error\"> WRITE DATA TO SAVE.</div>";
                        }
                        else{
                          $insertRecord = $conn -> prepare("INSERT INTO attendance(  emp_id , attend_date, check_in, check_out)
                           VALUES (?, ?, ? , ?)" );
                          $result=$insertRecord -> execute([$emp_id , $attdate , $start ,$end]);
                        
                          if($result){
                          echo "<script>alert(' saved success');</script>";
                          header("location :attendance_ departure.php ");
                          exit;
                          }
                        }
                      } 
                  ?>


                <?php
    include "../master/sections/foot.php";
    include "../master/sections/script.php";
    include "../master/sections/end.php";
 ?>