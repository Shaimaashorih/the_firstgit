
<?php
include "../master/sections/start.php";
if( !isset($_SESSION['user']) ){
	header("location:../signin.php");
	exit;
}
elseif( $_SESSION['type'] != 'Admin' ){
	header("location:users.php");
	exit;
}
    include "../master/sections/connect.php";
    if($_SERVER['REQUEST_METHOD']=='POST'){
          $uid=$_POST['user_userid'];
          $uname = $_POST['fname'];
          $upass = $_POST['pname'];
          $typeid = $_POST['budget'];
          $insertRecord = $conn -> prepare("REPLACE INTO users(user_userid, user_username ,user_password, user_usertype)
          VALUES(?,?,?,?)");
          $result= $insertRecord -> execute([$uid ,$uname, $upass , $typeid]);
         if(empty($uname) || empty($upass)){
         echo "<div class=\"error\"> WRITE DATA TO SAVE.</div>";

         }
         if($result){
          echo "<script>alert(' Data Edit success');</script>";
          header("location:users.php");
          exit;
         }
        

    }
    include "../master/sections/links.php";
    // include "../master/sections/mid.php";
?>

<!-- ///////////// -->
    <div class="main-panel">
        <div class="main-content">
          <div class="content-wrapper">

            <div class="container-fluid">
<section id="configuration">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                  <div class="card-title-wrap bar-success">
                      <h4 class="card-title">Edit user </h4>
                  </div>
              </div>
              <div class="card-body">
                <div class="px-3">
                  <!-- ///////////////////////////////////////////////////////////// -->
                <?php
                    $uId = $_GET['user_userid'];
                    $get_user_name = $conn -> query("SELECT user_username FROM users WHERE user_userid = $uId") -> fetchAll(PDO::FETCH_COLUMN);
                    $get_user_pass = $conn -> query("SELECT user_password FROM users WHERE user_userid = $uId") -> fetchAll(PDO::FETCH_COLUMN);
                ?>



                  <!-- ///////////////////////////////////////////////////////////// -->
              <form class="form form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                <div class="form-body">

                <input type="hidden" name="user_userid" value="<?php echo $uId; ?>">

                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="projectinput1">User Name : </label>
                        <div class="col-md-9">
                            <input type="text" id="projectinput1" class="form-control" name="fname" value="<?php echo $get_user_name[0] ;?>" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-3 label-control" for="projectinput1">Password: </label>
                        <div class="col-md-9">
                            <input type="text" id="projectinput1" class="form-control" name="pname" value="<?php echo $get_user_pass[0] ;?>">
                        </div>
                    </div>
                  <div class="form-group row">
                    <label class="col-md-3 label-control" for="projectinput7">Group Name : </label>
                    <div class="col-md-9">
                      <select id="projectinput7" name="budget" class="form-control">

                        <?php
                          $getgroup = $conn -> query("SELECT user_usertype
                          FROM users") -> fetchAll(PDO::FETCH_COLUMN);
                          foreach( $getgroup as $key => $value ):
                        ?>
                          <?php if( $key == $getgroup[0]['user_usertype'] ): ?>
                              <option value="<?php echo $key; ?>" selected="selected"><?php echo $value; ?></option>
                          <?php else: ?>
                              <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                          <?php endif; ?>
                         <?php endforeach;  ?> 
            
                      </select>
                    </div>
                  </div>
  
                    </div>

                      <div class="form-actions">
                        <button type="submit" class="btn btn-success">
                          <i class="icon-note"></i> Save Edit
                        </button>
                      </div>
                  
                </form>
                </div>
                </div>
                

            </div>
        </div>
    </div>
</section>

            </div>
          </div>
        </div>



<?php
//    include "../master/sections/mid2.php";
?>
<script src="../master/js/edit.js"></script>
<?php
    include "../master/sections/foot.php";
    include "../master/sections/script.php";
    include "../master/sections/end.php";
 ?>
 