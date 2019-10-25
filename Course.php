	<!--Block#1 start dont change the order-->
	<?php 
$title="Course details | SLGTI";    
include_once ("config.php");
include_once ("head.php");
include_once ("menu.php");
?>
	<!-- end dont change the order-->


	<!-- Block#2 start your code -->

	<div class="shadow  p-3 mb-1 bg-white rounded">
	    <div class="highlight-blue">
	        <h1 class="display-4 text-center">Course Details</h1>
	        <!-- <p class="text-center"></p> -->
	    </div>
	</div>

	<div class="row">
	    <div class="col-md-12 col-sm-12">
	        <div class="table-responsive table-responsive-sm">
	            <table class="table table-hover">
	                <thead class="thead-dark">
	                    <tr>
	                        <th scope="col">ID</th>
	                        <th scope="col">Course</th>
	                        <th scope="col">Department</th>
	                        <th scope="col">NVQ</th>
	                        <th scope="col">Actions</th>
	                    </tr>
	                </thead>

	                <?php
                    if(isset($_GET['delete_id']))
                    {                
                        $c_id = $_GET['delete_id'];

                        $sql = "DELETE from course where course_id = '$c_id' ";

                        if(mysqli_query($con,$sql))
                        {
                          echo '
                          <div class="alert alert-sucess alert-dismissible fade show" role="alert">
                          <strong> Succes </strong> Record has been Deleted Succesfully 
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>  ';
                        }
                        else
                        {
                          echo '
                          <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          <strong> Error </strong> Cannot delete or update a parent row (foreign key constraint fails)
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>  ';               
                         
                        }
                    }
                    ?>

	                <tbody>
	                    <?php 


                    $sql = "SELECT course.course_id AS course_id, 
                    course.course_name as course_name, 
                    course.course_nvq_level as course_nvq_level,
                    department.department_name as department_name
                    from `course` 
                    left JOIN `department` 
                    ON course.department_id = department.department_id";
                    
                    $result = mysqli_query($con,$sql);

                    if(mysqli_num_rows($result)>0)
                        { 
                          //output data of each row
                            while($row = mysqli_fetch_assoc($result))
                            {
                                echo '
                                <tr>
                                    <td scope="row">'. $row["course_id"] . "<br>" .'</td>
                                    <td>'. $row["course_name"] .  "<br>" .'</td>
                                    <td>'. $row["department_name"] .  "<br>" .'</td>
                                    <td>'. $row["course_nvq_level"] .  "<br>" .'</td>
                                    
                                    
                                    <td> 
                                    <a href="Module.php ?course_id='.$row["course_id"].' " class="btn btn-primary btn-sm btn-icon-split"> <span class="text">Modules</span>  </a>  

                                    <a href="BatchDetails.php ?course_id='.$row["course_id"].' " class="btn btn-sm btn-primary btn-icon-split"> <span class="text">Batch</span> </a>

                                    <a href="AddCourse.php ?edits='.$row["course_id"].' " class="btn btn-sm btn-warning"><i class="far fa-edit"></i></a>

                                       
                                    <button class="btn btn-sm btn-danger" data-href="?delete_id='.$row["course_id"].'" data-toggle="modal" data-target="#confirm-delete"><i class="fas fa-trash"></i> </button>                                    
                                    </td> 
                                </tr>';
                            }
                        }
                        else
                        {
                            echo "0 results";
                        }
                    ?>

	                </tbody>
	            </table>

	            <nav aria-label="Page navigation example">
	                <ul class="pagination justify-content-end">
	                    <li class="page-item disabled">
	                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
	                    </li>
	                    <li class="page-item"><a class="page-link" href="#">1</a></li>
	                    <li class="page-item"><a class="page-link" href="#">2</a></li>
	                    <li class="page-item"><a class="page-link" href="#">3</a></li>
	                    <li class="page-item">
	                        <a class="page-link" href="#">Next Page</a>
	                    </li>
	                </ul>
	            </nav>
	        </div>
	    </div>
	</div>

	<!-- end your code -->


	<!--Block#3 start dont change the order-->
	<?php include_once ("footer.php"); ?>
	<!--  end dont change the order-->