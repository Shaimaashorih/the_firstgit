
<?php

include "../master/sections/start.php";
// if( !isset($_SESSION['user']) ){
// 	header("location:../signin.php");
// 	exit;
// }
// elseif( $_SESSION['type'] != 'Admin' ){
// 	header("location:employees.php");
// 	exit;
// }

    include "../master/sections/connect.php";

    if($_SERVER['REQUEST_METHOD']=='POST'){
		$emp_id= $_POST['empid'];
        $fname = $_POST['fname'];
        $laddress = $_POST['lname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $date = $_POST['date'];
        $Type = $_POST['Type'];
        $contract = $_POST['Dateofcontract'];
        $starttime = $_POST['starttime'];
        $endtime = $_POST['endtime'];
        $salary = $_POST['salary'];
        $NationalID = $_POST['NationalID'];
        $Nationality = $_POST['Nationality'];

        $insertRecord = $conn -> prepare("REPLACE INTO employees (emp_id, 
        emp_name, emp_address,  emp_email, emp_phone, emp_bd, emp_gender, hire_date,
        emp_in, emp_out, salary, national_id, emp_nationality)
        VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");

       $result= $insertRecord -> execute([$emp_id,$fname, $laddress, $email, $phone, $date, $Type, $contract, 
        $starttime, $endtime, $salary, $NationalID, $Nationality]);
        
	header("location:employees.php");
    exit;
		


    }
	

    include "../master/sections/links.php";

?>

<!-- //////////////////////////////////////////////// -->
<div class="main-panel">
        <div class="main-content">
          <div class="content-wrapper">
            <div class="container-fluid">
<section id="horizontal-form-layouts">
	<div class="row">
		<div class="col-sm-12">
			<h2 class="content-header">Edit Employees Form</h2>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div class="card-title-wrap bar-success">
						<h4 class="card-title" id="horz-layout-basic">Employee Information</h4>
					</div>
					<p class="mb-0">This is the basic horizontal form with labels on left and cost estimation form is the default position.</p>
				</div>
				<div class="card-body">
					<div class="px-3">
                        <?php 
						  if(isset($_GET['emp_id'])):
                          $empID = $_GET['emp_id'];
                          $get_emp_record = $conn -> query("SELECT * FROM employees 
                          WHERE emp_id = $empID")-> fetchAll(PDO::FETCH_ASSOC);
						  
                        ?>
         
						<form class="form form-horizontal" action= "<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
							<div class="form-body">
								<h4 class="form-section">
									<i class="icon-user"></i> Personal Details</h4>
								<div class="form-group row">
								    <input type="hidden" name="empid" value="<?php echo $get_emp_record[0]['emp_id']; ?>" >
									<label class="col-md-3 label-control" for="projectinput1">First Name: </label>
									<div class="col-md-9">
										<input type="text" id="projectinput1" class="form-control" name="fname" value=" <?php echo  $get_emp_record[0]['emp_name']; ?>" >
                                        <span id="res1"> </span>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput2">Address: </label>
									<div class="col-md-9">
										<input type="text" id="projectinput2" class="form-control" name="lname" value=" <?php echo  $get_emp_record[0]['emp_address']; ?>">
									</div>
                                     <span id="res2"> </span>
								</div>

								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput3">E-mail: </label>
									<div class="col-md-9">
										<input type="text" id="projectinput3" class="form-control" name="email" value=" <?php echo  $get_emp_record[0]['emp_email']; ?>" >
									</div>
                                    <span id="res3"> </span>

								</div>

								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput4">Contact Number: </label>
									<div class="col-md-9">
										<input type="text" id="projectinput4" class="form-control" name="phone" value=" <?php echo  $get_emp_record[0]['emp_phone']; ?>" >
									</div>
                                 <span id="res4"> </span>
								</div>

								<h4 class="form-section">
									<i class="icon-book-open"></i>Other Details</h4>
                  <div class="form-group row">
                  <label class="col-md-3 label-control" for="projectinput9">Date: </label>
                  <div class="col-md-9">
                    <div class="position-relative has-icon-left">
                      <input type="text" id="timesheetinput3" class="form-control" name="date" value=" <?php echo  $get_emp_record[0]['emp_bd']; ?>">
                      <div class="form-control-position">
                        <i class="ft-message-square"></i>
                      </div>
                      <span id="res5"> </span>
                    </div>
                    </div>
                    </div>
                  </div>
                <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput9">Type: </label>
									<div class="col-md-9">
										<!-- <input type="text" id="projectinput9" class="form-control" name="Type" value=" ?php echo  $get_emp_record[0]['emp_gender']; ?>"> -->
										<input type="radio" name="Type" id="projectinput9" value="Male" <?php if( $get_emp_record[0]['emp_gender'] == 'Male'){echo "checked";} ?>>
										<label for="male">Male</label>
										<input type="radio" name="Type" id="projectinput9" value="Female" <?php if( $get_emp_record[0]['emp_gender'] == 'Female'){echo "checked";} ?>>
										<label for="female">Female</label>
									</div>
                                    <span id="res6"> </span>
								</div>
                                 <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput10">Date of contract: </label>
									<div class="col-md-9">
										<input type="text" id="projectinput10" class="form-control" name="Dateofcontract" value=" <?php echo  $get_emp_record[0]['hire_date']; ?>" >
									</div>
                                  <span id="res7"> </span>
								</div>
                <div class=" row">
									<div class="col-md-12">
										<div class=" row form-group">
                      <label class="col-md-3 label-control" >Start time: </label>
											<div class="position-relative has-icon-left col-lg-9">
				
											<input type="text" id="timesheetinput5" class="form-control" name="starttime" value=" <?php echo  $get_emp_record[0]['emp_in']; ?>" >
												<div class="form-control-position">
													<i class="ft-clock"></i>
												</div>
                                                <span id="res8"> </span>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class=" row form-group">
                      <label class="col-md-3 label-control" >End time: </label>
											<div class="position-relative has-icon-left col-lg-9">
												<input type="text" id="timesheetinput6" class="form-control" name="endtime" value=" <?php echo  $get_emp_record[0]['emp_out']; ?>">
												<div class="form-control-position">
													<i class="ft-clock"></i>
												</div>
                                                <span id="res9"> </span>
											</div>
										</div>
									</div>
								</div>

								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput7">Salary: </label>
									<div class="col-md-9">
										<input id="projectinput7" type="text" name="salary" class="form-control"  value=" <?php echo  $get_emp_record[0]['salary']; ?>">
                                     <span id="res10"> </span>
									</div>
								</div>
           
                       <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput11">National ID: </label>
									<div class="col-md-9">
										<input type="text" id="projectinput11" class="form-control" name="NationalID" value=" <?php echo  $get_emp_record[0]['national_id']; ?>">
									</div>
                                    <span id="res11"> </span>
								</div>
                <div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput12">Nationality: </label>
									<div class="col-md-9">
										<input type="text" id="projectinput12" class="form-control" name="Nationality" value=" <?php echo  $get_emp_record[0]['emp_nationality']; ?>" >
									</div>
                                    <span id="res12"> </span>
								</div>
                <div class="form-group row">
									<label class="col-md-3 label-control">Select File: </label>
									<div class="col-md-9">
										<label id="projectinput8" class="file center-block">
											<input type="file" id="file">
											<span class="file-custom"></span>
											: </label>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-3 label-control" for="projectinput9">Notes: </label>
									<div class="col-md-9">
										<textarea id="projectinput9" rows="5" class="form-control" name="comment"></textarea>
									</div>
								</div>
							</div>

							<div class="form-actions">
								<button type="reset" class="btn btn-danger mr-1">
									<i class="icon-trash"></i> Cancel
								</button>								
								<button type="submit" class="btn btn-success" id="go">
									<i class="icon-note"></i> Save Edit
								</button>
							</div>
						</form>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
 
</section>
<!-- // Basic form layout section end -->
            </div>
          </div>
        </div>

<!-- //////////////////////////////////////////////// -->

<?php
//    include "../master/sections/mid2.php";
?>
<?php
    include "../master/sections/foot.php";
    include "../master/sections/script.php";
    include "../master/sections/end.php";
 ?>
 