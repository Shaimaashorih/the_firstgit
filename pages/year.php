<?php
    session_start();
    include "../master/sections/connect.php";
    include "../master/sections/start.php";
    include "../master/sections/links.php";

 
if(isset($_GET['syear'])):
    $searchYear = $_GET['syear'];
    $getRecord = $conn -> query("SELECT attend_id , emp_name ,emp_id, attend_date,salary 
     FROM attendance
    INNER JOIN employees USING(emp_id) 
    WHERE attend_date LIKE '%$searchYear%'")->fetchAll(PDO::FETCH_ASSOC);
   

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

<?php
    include "../master/sections/foot.php";
    include "../master/sections/script.php";
    include "../master/sections/end.php";
 ?>