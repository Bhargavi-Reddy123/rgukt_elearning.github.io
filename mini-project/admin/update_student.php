<?php include('menu.php') ?>

<div class="main">
    <div class="wrapper">
        <h1>Add Student</h1></br>
        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Student ID: </td>
                    <td>
                        <input type="text" name="student_id"placeholder="Enter your id">
                    </td>
                </tr> 
                
                <tr>
                    <td>Student Name: </td>
                    <td>
                        <input type="text" name="student_name"placeholder="Enter your full name">
                    </td>
                </tr>
                <tr>
                    <td>Student email: </td>
                    <td>
                        <input type="text" name="student_mail"placeholder="Enter your email">
                    </td>
                </tr> 
                <tr>
                    <td>Student class: </td>
                    <td>
                        <input type="text" name="student_class"placeholder="Enter your class">
                    </td>
                </tr>
                <tr>
                    <td>Student year: </td>
                    <td>
                        <input type="text" name="student_year"placeholder="year">
                    </td>
                </tr>
                <tr>
                    <td>Student department: </td>
                    <td>
                        <input type="text" name="student_department"placeholder="department">
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2"> 
                        <input type="submit" name="submit" value="Add Student" class="btn-secondary">
                        <br></br>
                     </td>
                </tr>
                </br>
                    
            </table>
        </form>
<?php include("footer.php");?>
<?php
     
     if(isset($_POST['submit']))
     { //get data from form
        $student_id=$_POST['student_id'];
        $student_name=$_POST['student_name'];
        $student_mail=$_POST['student_mail']; 
        
        $student_class=$_POST['student_class'];
        $student_year=$_POST['student_year'];
        $student_department=$_POST['student_department'];

        
        

    
        //get data from form
        
        $sql="SELECT * from student";
					
		$res=mysqli_query($conn,$sql) or die(mysqli_error());
		if($res==TRUE)
		{
			$count=mysqli_num_rows($res);
				if($count>0)
				{
					while($rows=mysqli_fetch_assoc($res))
						{
							if($student_id==$rows['student_id'])
                            {

                                $sql="UPDATE student SET 
                                student_name='$student_name',
                                student_mail='$student_mail',
                                student_year='$student_year',
                                student_department='$student_department'
                                WHERE student_id='$student_id'";
        
                                $res=mysqli_query($conn,$sql)or die(mysqli_error());
                                 if($res==TRUE)
                                    {
                                        $_SESSION['update']='updated successfully';
                                         header('location:'.SITEURL.'admin/student.php');   
                                    
                                            
                                            break;
                                    }
                                else{
                                         ECHO 'CANNOT BE DONE';
                                    }
                            }
							
						
       
                        }
                    }
                }
            }
       
        
       
       
        
    
   
      

?>