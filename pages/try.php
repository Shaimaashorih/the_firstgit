<?php
    include "../master/sections/connect.php";
    include "../master/sections/start.php";
    include "../master/sections/links.php";
    include "../master/sections/mid.php";
?>
<style>
  form{
    margin: 0 auto ;
    margin-left: 50%;
  }
  </style>
<!-- 
   
<section id="configuration">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
           
           
                <div class="card-header">
                  <div class="card-title-wrap bar-success">
                      <h4 class="card-title">Add user </h4>
                  </div>
              </div>
              <div class="card-body">
                <div class="px-3">

                  
<form  action= "code.php" method="POST">
            <input type="checkbox" value="sat" name="sat[]" >
            <label for="sat"> Satrday</label><br>
            <input type="checkbox" value="sun" name="sat[]" >
            <label for="sun"> Sunday</label><br>
            <input type="checkbox" value="mon" name="sat[]">
            <label for="mon"> Monday</label><br>
            <input type="checkbox" value="tue" name="sat[]">
            <label for="sun"> Tuesday</label><br>
            <input type="checkbox" value="Tur" name="sat[]" >
            <label for="sun"> Turthday</label><br>
            <input type="checkbox" value="fri" name="sat[]" >
            <label for="Fri">Friday</label><br>
            <div class="form-actions">
                  
                  <button type="submit" class="btn btn-success" name=" save">
                    <i class="icon-note"></i> Save
                  </button>
                </div>
</form>  -->
<!-- ?php 
if(isset($_POST['submit'])){
 $days = $_POST['sat'];
 
  $insetRecord = $conn -> prepare("INSERT INTO general_setting(extra) VALUES (?)");
  $result = $insetRecord -> execute([$days]);
  if($result){
    echo "...................................................success";
    header("location : chat.php");

  }
  else{
    echo "......................................................faild";
    header("location : index.php");

  }

}
?>    -->




                </div>
                </div>
                
            </div>
        </div>
    </div>
</section>
           

<?php
    include "../master/sections/foot.php";
    include "../master/sections/script.php";
    include "../master/sections/end.php";
 ?>
 

 <!-- 
    
 <?php
    include "../master/sections/connect.php";
    include "../master/sections/start.php";
    include "../master/sections/links.php";
?>
  
  
   
  <div class="main-panel">
        <div class="main-content">
          <div class="content-wrapper">
            <div class="container-fluid"> Zero configuration table 
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
                <div id="DataTables_Table_0_filter" class="dataTables_filter"><label>Search:
                <input type="text" name="search"   class="form-control form-control-sm" placeholder="Search" aria-controls="DataTables_Table_0"></label>
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
                <th>Name</th>
                <th>Id</th>
                <th>Phone</th>
                <th>Date of birth</th>
                <th>Type</th>
                <th>Start date</th>
                <th>Salary</th>
                <th>Attendance date</th>
                <th>check-out date</th>
                <th>Nationality</th>
               
            </tr>
            </thead>

            <tbody>

                
            <?php 
                  if(isset($_GET['search'])):
                    $filtervalue = $_GET['search'];
                    $getRecord = $conn->query("SELECT emp_name ,emp_id, emp_phone, 
                    emp_bd, emp_gender, hire_date,  salary, emp_in, emp_out  ,emp_nationality 
                    FROM employees WHERE emp_name LIKE '$filtervalue %' ");
                    if(count($getRecord -> fetch()) > 0): 
                    while($row = $getRecord -> fetch()):
                ?>

                <tr>
                    <td><?php echo $row['emp_name']; ?></td>
                    <td><?php echo $row['emp_id'];?></td>
                    <td><?php echo $row['emp_phone']; ?></td>
                    <td><?php echo $row['emp_bd']; ?></td>
                    <td><?php echo $row['emp_gender']; ?></td>
                    <td><?php echo $row['hire_date']; ?></td>
                    <td><?php echo $row['salary']; ?></td>
                    <td><?php echo $row['emp_in']; ?></td>
                    <td><?php echo $row['emp_out']; ?></td>
                    <td><?php echo $row['emp_nationality']; ?></td>
                    
                </tr>  
                <?php  endwhile;?>      
                <?php else:?>

                    <tr>
                     <td colspan="10"><?php echo "NO Record Found" ?></td>
                    </tr> 
                <?php endif; ?>                                                                                                                                                                                                                                  </yr> -->
                <?php endif; ?>                                                                                                                                                                                                                           </yr> -->
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
 
 
  -->