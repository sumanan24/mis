<!-- BLOCK#1 START DON'T CHANGE THE ORDER-->
<?php
$title = "Home | SLGTI";
include_once("config.php");
include_once("head.php");
include_once("menu.php");
?>
<!--END DON'T CHANGE THE ORDER-->

<!--BLOCK#2 START YOUR CODE HERE -->

<!-- ADD STAFF PHP CODNG -->
<?PHP
$StaffID=$Department_id=$StaffName=$Address=$DOB=$NIC=$Email=$PNO=$DOJ=$Gender=$EPF=$Position=$Type=null;

if(isset($_POST['Add'])){
  if(!empty($_POST['StaffID'])
    &&!empty($_POST['Department_id'])
    &&!empty($_POST['StaffName'])
    &&!empty($_POST['Address'])
    &&!empty($_POST['DOB'])
    &&!empty($_POST['NIC'])
    &&!empty($_POST['Email'])
    &&!empty($_POST['PNO'])
    &&!empty($_POST['DOJ'])
    &&!empty($_POST['Gender'])
    &&!empty($_POST['EPF'])
    &&!empty($_POST['Position'])
    &&!empty($_POST['Type'])){

      $StaffID=$_POST['StaffID'];
      $Department_id=$_POST['Department_id'];
      $StaffName=$_POST['StaffName'];
      $Address=$_POST['Address'];
      $DOB=$_POST['DOB'];
      $NIC=$_POST['NIC'];
      $Email=$_POST['Email'];
      $PNO=$_POST['PNO'];
      $DOJ=$_POST['DOJ'];
      $Gender=$_POST['Gender'];
      $EPF=$_POST['EPF'];
      $Position=$_POST['Position'];
      $Type=$_POST['Type'];

      $sql="INSERT INTO `staff`(`staff_id`, `department_id`, `staff_name`, `staff_address`, `staff_dob`, `staff_nic`, `staff_email`, `staff_pno`, `staff_date_of_join`, `staff_gender`, `staff_epf_no`, `staff_position`, `staff_type`) 
      VALUES ('$StaffID','$Department_id','$StaffName','$Address','$DOB','$NIC','$Email','$PNO','$DOJ','$Gender','$EPF','$Position','$Type')";

      if(mysqli_query($con,$sql))
      {
        echo "New record inserted";
      }
      else{
        echo "Error".$sql."<br>".mysqli_error($con);
      }

    }

}

?>
<!-- Add staff design  -->

<div class="row">
    <div class="col form-group  container p-3 mb-2 " >
        <h1 class=" text-center  "><i class="fas fa-file-alt"></i>   STAFF DETAILS</h1>
    </div>
</div>

<div class="row">
    <div class=" col-sm-8">
        <p style="font-size: 45px; font-weight: 700; ">Personal Information</p>
    </div>

    <div class="col-sm-3"> 
      <form class="form-inline">
        <input class="form-control mr-2" type="search" placeholder="Staff ID" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>  
</div>

<div class="row">
  <div class="col-sm-12" >
    <hr color ="black" style="height:1px;">
  </div>
</div>  

<form method="POST">
  <div class="form-row">
    <div class="form-group col-lg-4">
        <label for="text" class="font-weight-bolder pl-1" >Staff_ID :</label>
        <input type="text" name="StaffID" value="" class="form-control" placeholder="Staff ID" >
    </div>
    <div class="form-group col-lg-4">
      <label for="text" class="font-weight-bolder pl-1">Department</label><br>
        <select class="custom-select mr-sm-2" id="Department_id">
              <option selected disabled>Choose Department</option>
              <option value="Permanent Staff">ICT</option>
              <option value="Temporary  Staff">Mechanical</option>
              <option value="Temporary  Staff">Electircal</option>
              <option value="Permanent Staff">Food</option>
              <option value="Permanent Staff">Automobile</option>
              <option value="Permanent Staff">Construction</option>
              <option value="Permanent Staff">Administration</option>
        </select>
    </div>
    <div class="form-group col-lg-4">
        <label for="text" class="font-weight-bolder pl-1"  >Staff_Name :</label>
        <input type="text" name="StaffName" value="" class="form-control" placeholder="Full Name">
    </div>
  </div>

  <div class="form-row pt-3">
    <div class="form-group col-lg-4">
      <label for="text" class="font-weight-bolder pl-1" >Address :</label><br>
      <input type="text" name="Address" value="" class="form-control" placeholder="Address" ><br>
    </div>
    <div class="form-group col-lg-4">
      <label for="text" class="font-weight-bolder pl-1">Date_of_birth</label><br>
      <input type="text" name="DOB" value="" class="form-control" placeholder="DOB"><br>
    </div>
    <div class="form-group col-lg-4">
      <label for="text" class="font-weight-bolder pl-1">NIC :</label><br>
      <input type="text" name="NIC" value="" class="form-control" placeholder="NIC" ><br>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-lg-4">
      <label for="text" class="font-weight-bolder pl-1">Email :</label><br>
      <input type="text" name="Email" value="" class="form-control" placeholder="Email " ><br>
    </div>
    <div class="form-group col-lg-4">
      <label for="text" class="font-weight-bolder pl-1">Telephone no :</label><br>
      <input type="text" name="PNO" value="" class="form-control" placeholder="Telephone no"><br>
    </div>
    <div class="form-group col-lg-4">        
      <label for="text" class="font-weight-bolder pl-1">Date_of_Join :</label><br>
      <input type="text" name="DOJ" value="" class="form-control" placeholder="Date of Join"><br> 
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-lg-4">
      <label for="text" class="font-weight-bolder pl-1">Gender</label><br>
        <select class="custom-select mr-sm-2" id="Gender">
              <option selected disabled>Choose Gender</option>
              <option value="Permanent Staff">Male</option>
              <option value="Temporary  Staff">Female</option>
              <option value="Temporary  Staff">Transgender</option>
        </select>
    </div>
    <div class="form-group col-lg-4">
      <label for="text" class="font-weight-bolder pl-1" >EPF NO :</label>
      <input type="text" name="EPF" value="" class="form-control" placeholder="EPF NO" >
    </div>
    <div class="form-group col-lg-4">  
    <label class="font-weight-bolder" for="inlineFormCustomSelect">Position</label>
          <select class="custom-select" id="Position">
              <option selected disabled>Choose Postition</option>
              <option value="Director">Director</option>
              <option value="Deputy Principal (Academics)">Deputy Principal (Academics)</option>
              <option value="Deputy Principal (Industrial)">Deputy Principal (Industrial)</option>
              <option value="Registrar">Registrar</option>
              <option value="Accountant">Accountant</option>
              <option value="Head of Department">Head of Department</option>
              <option value="Lectures">Lectures</option>
              <option value="HoD Industrial Relations">HoD Industrial Relations</option>
              <option value="Management Assistants">Management Assistants</option>
              <option value="Human Resource Officer">Human Resource Officer</option>
              <option value="IT System Analyst">IT System Analyst</option>
              <option value="Premises Officer">Premises Officer</option>
              <option value="Quality Management">Quality Management</option>
              <option value="Student Affairs Officer">Student Affairs Officer</option>
              <option value="Warden">Warden</option>
            </select>
    </div>
    <div class="form-group col-lg-4 pt-2">
      <label for="text" class="font-weight-bolder pl-1">Type :</label><br>
      <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Type</label>
      <select class="custom-select mr-sm-2" id="Type">
            <option selected disabled>Choose Type</option>
            <option value="Permanent Staff">Permanent Staff</option>
            <option value="Temporary  Staff">Temporary  Staff</option>
      </select>
    </div>
  </div>

  <div class="form-row pt-3">
    <?PHP 
      echo '<div class="btn-group-horizontal">';
      echo '<button type="submit" value="Add" name="Add" class="btn btn-outline-info"><i class="fas fa-user-plus"></i>   ADD</button>';
      echo '<button type="submit" class="btn btn-outline-info"><i class="fas fa-user-edit"></i>   UPDATE</button>'; 
      echo '<button type="submit" class="btn btn-outline-info"><i class="fas fa-user-slash"></i>   DELETE</button>';
      echo'<button type="submit" class="btn btn-outline-info"><i class="fas fa-redo"></i>   REFRESH</button>';
      echo '</div>';
      ?>
  </div>
</form>
<!--END OF YOUR COD-->

<!--BLOCK#3 START DON'T CHANGE THE ORDER-->
<?php include_once("footer.php"); ?>
<!--END DON'T CHANGE THE ORDER-->
