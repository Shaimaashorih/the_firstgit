
<?php
    session_start();
    include "../master/sections/connect.php";
    include "../master/sections/start.php";
    include "../master/sections/links.php";
?>
<?php
if(isset($_GET['search_date'])):
    $searchDate = $_GET['search_date'];
    $getRecord = $conn -> query("SELECT attend_id , emp_name ,emp_id, attend_date, 
    check_in, check_out FROM attendance
    INNER JOIN employees USING(emp_id) 
    WHERE attend_date LIKE '%$searchDate%'");
                                    while( $row = $getRecord -> fetch()):
                                        if(count($row) > 0): 

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
<div class="col-lg-1"></div>

<table class="table table-striped table-bordered zero-configuration mt-40">
<thead>
    <tr>
        <th>Name</th>
        <th>Id</th>
        <th>Date </th>
        <th>Attendance date</th>
        <th>check-out date</th>
  
    </tr>
</thead>

<tbody>
     <tr>
        <td><?php echo $row['emp_name'] ;?></td>
        <td><?php echo $row['emp_id']; ?></td>
        <td><?php echo $row['attend_date']; ?></td>
        <td><?php echo $row['check_in']; ?></td>
        <td id ="time"><?php echo $row['check_out']; ?></td>

        <th>
          <form action="delattendance.php" method="GET">
            <input type="hidden" name="attend_id" value="<?php echo $getRecord['attend_id']; ?>" >
            <button  class="btn btn-danger mr-1">
            <i class="icon-trash"></i> Delete</button>
          </form>
        </th>
        
      </tr>
                                                                                                                                                                                                                                      </yr>
</tbody>

</table>

                <?php else:?>   
                 <tr>
                  <td colspan="10"><?php echo "NO Record Found" ?></td>
                 </tr> 
    <?php endif; ?>
  
<?php endwhile; ?>


<?php endif ?>

        

<?php
    include "../master/sections/foot.php";
    include "../master/sections/script.php";
    include "../master/sections/end.php";
 ?>






       