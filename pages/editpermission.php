
<?php

include "../master/sections/connect.php";
include "../master/sections/start.php";
if( !isset($_SESSION['user']) ){
	header("location:../signin.php");
	exit;
}
elseif( $_SESSION['type'] != 'Admin' ){
	header("location:permissions.php");
	exit;
}
include "../master/sections/links.php";

if ($_SERVER['REQUEST_METHOD']==['POST']){
    $gpid=$_POST['gp_id'];
    $gname = $_POST['groupName'];
    $modname = $_POST['budget'];
    $items = implode(',' , $_POST['item']);
    $insertRecord = $conn -> prepare("REPLACE INTO gpermissions( gp_id ,gp_name , module_name , permission_ck)
    VALUES(?,?,?,?)");
    $result = $insertRecord -> execute([$gpid ,$gname , $modname ,$items]);
    header("location : permissions.php");
    exit;
  
}
  ?>

<!-- ///////////// -->

<div class="main-panel">
        <div class="main-content">
          <div class="content-wrapper">
            <div class="container-fluid"><!-- Zero configuration table -->
<section id="configuration">
    <div class="row">
        <div class="col-12">
            <div class="card">


                <div class="card-header">
                    <div class="card-title-wrap bar-success">
                        <h4 class="card-title">Edit Group Permissions </h4>
                    </div>
                </div>

    <?php
        $gpid = $_GET['gp_id'];
        $get_gpname = $conn -> query("SELECT gp_name 
        FROM gpermissions WHERE gp_id = $gpid") -> fetchAll(PDO:: FETCH_COLUMN);
    ?>
              
              <div class="card-body collapse show">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    
                <input type="hidden" name="gp_id" value="<?php echo $gpid; ?>">

                            <div class="row">
                                <div class="col-lg-2"></div>
                                  <div class="col-sm-12 col-md-9"><div id="DataTables_Table_0_filter"
                                    class="dataTables_filter"><label>Group Name :
                                    <input type="hidden" name="groupName" value="<?php echo $gpid; ?>">
                                    <input type="text" name="groupName"
                                   class="form-control form-control-sm"
                                    placeholder="" aria-controls="DataTables_Table_0" value="<?php echo $get_gpname[0] ?>"
                                     style="height: 58px;">
                                    </label>
                                  </div>
                                </div>
                            </div> 

                            

                        <table class="table table-striped table-bordered zero-configuration mt-40 table-group">
                            <thead>
                                <tr>
                                    <th>Module Name</th>
                                    <th>Show </th>
                                    <th>Add</th>
                                    <th>Edit</th>
                                    <th>delete</th>
                                  
                                </tr>
                            </thead>
                            <tbody>
                            
                                <tr>
                                    <td>  
                                      <div class="form-group row">
                                        <label class="col-md-3 label-control" for="projectinput7">Module Name : </label>
                                        <div class="col-md-9">
                                          <select id="projectinput7" name="budget" class="form-control">
                                          <?php
                                              $getmodule = $conn -> query("SELECT gp_id , module_name 
                                              FROM gpermissions") -> fetchAll(PDO::FETCH_KEY_PAIR);
                                              foreach( $getmodule as $key => $value ):
                                            ?>
                                              <?php if( $key == $getmodule[0]['module_name'] ): ?>
                                                  <option value="<?php echo $key; ?>" selected="selected"><?php echo $value; ?></option>
                                              <?php else: ?>
                                                  <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                              <?php endif; ?>
                                            <?php endforeach;  ?>
                                          </select>
                                        </div>
                                      </div>
                                   </td>
                                    <td>  <input type="checkbox" id="item1" name="item[]"value="show"></td>
                                    <td>  <input type="checkbox" id="item1" name="item[]" value="add"></td>
                                    <td>  <input type="checkbox" id="item1" name="item[]" value="edit"></td>
                                    <td>  <input type="checkbox" id="item1" name="item[]" value="delete"></td>
                               
                                </tr>

                                                                                                                                                                                                                                                          </yr>
                            </tbody>
                
                        </table>

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
    </div>
</section>

            </div>
          </div>
        </div>




<?php
    include "../master/sections/foot.php";
    include "../master/sections/script.php";
    include "../master/sections/end.php";
 ?>
 