<!------START DON'T CHANGE ORDER HEAD,MANU,FOOTER----->
<!---BLOCK 01--->
<?php 
   
include_once("config.php");

$title ="STUDENT PROFILE | SLGTI"; //YOUR HEAD TITLE CREATE VARIABLE BEFORE FILE NAME
include_once("head.php");
include_once("menu.php");

?>
<!----END DON'T CHANGE THE ORDER---->


<!---BLOCK 02--->
<!---START YOUR CODER HERE----->


<!-----END YOUR CODE----->
<!-- form start---->
<br>
<h1 style="text-align:center"> SLGTI STUDENTS' INFORMATION </h1>
<br><br>

<div class="form-row">
<a href="Student.php"> 
<button class="btn btn-success" type="submit" > Back </button>
</a>
</div><br>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col" width="">Civil Status</th>
      <th scope="col" width="">Zip-Code</th>
      <th scope="col" width="">District</th>
      <th scope="col" width="">Divisional Secretariat</th>
      <th scope="col" width="">Blood Group</th>
      <th scope="col" width="">Emergency Contact Name</th>
      <th scope="col" width="">Emergency Contact Address</th>
      <th scope="col" width="">Emergency Contact Phone No</th>
      <th scope="col" width="">Emergency Contact Relationship</th>
      <th scope="col" width="">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th> <a href="AddStudent.php"> <button class="btn btn-danger" type="submit">Edit</button> </a> </th>
    </tr>
  </tbody>
</table>


<!---BLOCK 03--->
<!----DON'T CHANGE THE ORDER--->
<?php 
include_once("FOOTER.PHP"); 
?>