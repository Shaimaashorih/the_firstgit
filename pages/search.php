  
  <?php
    include "../master/sections/connect.php";
    include "../master/sections/start.php";
    include "../master/sections/links.php";
?>
  
  
   
  <div class="main-panel">
        <div class="main-content">
          <div class="content-wrapper">
            <div class="container-fluid"> <!-- Zero configuration table -->
<section id="configuration">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title-wrap bar-success">
                        <h4 class="card-title">Employees Information</h4>
                    </div>
                </div>
                <div class="col-lg-1"></div>                                          
        <div class="col-sm-12 col-md-3">
            <form action="" method="GET">  
                <div id="DataTables_Table_0_filter" class="dataTables_filter">
                    <label>Search:
                        <input type="text" name="search" class="form-control form-control-sm" placeholder="Search" aria-controls="DataTables_Table_0">
                    </label>
                <div style="margin-top:-23%; margin-left: 90%;">
                <button type="submit" class="btn btn-primary mb-2" > Search </button>
                </div>
                </div>

            </form>
        
        </div>


<div class="col-lg-1"></div>
    <table class="table table-striped table-bordered zero-configuration">
        <thead>
            <tr>
                <th>Id</th>
                <th>Employee Name</th>
                <th>Phone</th>
                <th>Salary</th>
                <th>Attendance days</th>
                <th>Absent days</th>
                <th>Overtime hours</th>
                <th>Discount hours</th>
                <th>Extra</th>
                <th>discount</th>
                <th>Total</th>

            </tr>
        </thead>

        <?php 
                if(isset($_GET['search'])):
                $search= $_GET['search'];
                $getRecord = $conn -> query("SELECT emp_id , emp_name, emp_phone, salary, COUNT(attend_id)
                AS 'Attendance days'
                FROM attendance INNER JOIN employees USING(emp_id)
                WHERE emp_name LIKE '%$search%'");

                
                                 $setting = $conn -> query("SELECT *  FROM general_setting ")->fetch();
                                 $ex = $setting['extra'];
                                 $dis = $setting['discount'];
                             

                                while( $getRecord1 = $getRecord -> fetch()):

                                  

                                  //  get extra hours
                                    $dayshours = $getRecord1['Attendance days'] * 8 ;
                                    if($dayshours > 176){
                                      $extrahours = ($dayshours - 176)* $ex ;
                                    }
                                    else{
                                      $extrahours = 0;
                                    }
                               

                                if($getRecord1['Attendance days'] < 22) {    
                                $absentday = 22 - $getRecord1['Attendance days'];
                                } else{
                                  $absentday = 0;
                                }

                           

                                // get discount hours
                                  if($dayshours < 176){
                                    $discounthours = (176 - $dayshours)* $dis ;
                                  }
                                  else{
                                    $discounthours = 0;
                                  }
                                  
                                // calculate  value hours (extra , discount with money)
                                  $salary = $getRecord1['salary'];
                                  $valuehour = $salary / 176 ;
                                  $extratot = $extrahours * $valuehour;
                                  $discounttot = $discounthours * $valuehour;
                                  ?>

                              <tr>
                                    <td><?php echo $getRecord1['emp_id']; ?></td>
                                    <td><?php echo $getRecord1['emp_name']; ?></td>
                                    <td><?php echo $getRecord1['emp_phone']; ?></td>
                                    <td><?php echo $getRecord1['salary']; ?></td>
                                    <td><?php echo $getRecord1['Attendance days']; ?></td>
                                    <td><?php echo $absentday; ?></td>
                                    <td><?php echo $extrahours ;?></td>
                                    <td><?php echo $discounthours; ?></td>
                                    <td><?php echo $extratot ; ?></td>
                                    <td><?php echo $discounttot; ?></td>
                                  
                                    <td>
                                      <?php $total = $salary + $extratot - $discounttot;
                                          echo $total;
                                      ?>
                                    </td>
                                    <td>
                                      <form action="invoice.php" method="GET">
                                        <input type="hidden" name="emp_id" value="<?php echo $row['emp_id']; ?>" >

                                        <button  class="btn btn-danger mb-2" > <i class="ft-plus"></i>&nbsp;
                                          Invoice</a>

                                        </button>
                                      </form>  
                                    </td>
                                                   
                 
                        
                      
                      </tr>
                      <?php  endwhile;?>                                                                                                                                                                                                          

                    <?php  endif;?>  
                                                                                                                                                                                                        
                
          </tbody>

        </table>

                   </div>
                </div>
            </div>
        </div>
    </div>
 </section>

            </div>
          </div>
        </div>
</div>

        <?php
    include "../master/sections/foot.php";
    include "../master/sections/script.php";
    include "../master/sections/end.php";
 ?>
 
 