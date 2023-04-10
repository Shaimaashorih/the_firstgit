  
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

        <tbody>
                <?php 
                      if(isset($_GET['search'])):
                        $filtervalue = $_GET['search'];
                        $getRecord = $conn->query("SELECT  emp_id, emp_name ,emp_phone , salary,
                        attendance_days , absent_days , extra_hours ,
                         discount_hours ,extra_total , discount_total 
                       FROM calc_salary
                       INNER JOIN employees
                       USING (emp_id)
                       WHERE emp_name LIKE '%$filtervalue%' ") -> fetchAll(PDO::FETCH_ASSOC);
                        if(count($getRecord) > 0): 
                        for( $rows = 0; $rows < count($getRecord); $rows++ ):?>
                        <tr>
                            <?php
                                foreach( $getRecord[$rows] as $key => $value):   
                            ?>
                            <td><?php echo $getRecord[$rows][$key];?></td>
                            <?php  endforeach;?>    
                        </tr>   
                    <?php  endfor;?>      
                    <?php else:?>
    
                        <tr>
                         <td colspan="10"><?php echo "NO Record Found" ?></td>
                        </tr> 
                    <?php endif; ?>                                                                                                                                                                                                                                 
                    <?php endif; ?>                                                                                                                                                                                                                           
                
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
 
 