<?php include('menu.php') ?>

<div class="main">
    <div class="wrapper">
        <h1>Add Faculty </h1></br>
        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Faculty ID: </td>
                    <td>
                        <input type="text" name="faculty_id"placeholder="Enter your id">
                    </td>
                </tr> 
                
                <tr>
                    <td>Faculty  Name: </td>
                    <td>
                        <input type="text" name="faculty_name"placeholder="Enter your full name">
                    </td>
                </tr>
                <tr>
                    <td>Faculty  email: </td>
                    <td>
                        <input type="text" name="faculty_mail"placeholder="Enter your email">
                    </td>
                </tr> 

                <tr>
                    <td>Faculty  department: </td>
                    <td>
                        <input type="text" name="faculty_department"placeholder="department">
                    </td>
                </tr>
                
                <tr>
                    <td colspan="2"> 
                        <input type="submit" name="submit" value="update faculty" class="btn-secondary">
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
        $faculty_id=$_POST['faculty_id'];
        $faculty_name=$_POST['faculty_name'];
        $faculty_mail=$_POST['faculty_mail']; 
        $faculty_department=$_POST['faculty_department'];

        
        

    
        //get data from form
        
        $sql="SELECT * from faculty";
					
		$res=mysqli_query($conn,$sql) or die(mysqli_error());
		if($res==TRUE)
		{
			$count=mysqli_num_rows($res);
				if($count>0)
				{
					while($rows=mysqli_fetch_assoc($res))
						{
							if($faculty_id==$rows['faculty_id'])
                            {

                                $sql="UPDATE faculty SET 
                                faculty_name='$faculty_name',
                                faculty_mail='$faculty_mail',
                                faculty_department='$faculty_department'
                                WHERE faculty_id='$faculty_id'";
        
                                $res=mysqli_query($conn,$sql)or die(mysqli_error());
                                 if($res==TRUE)
                                    {
                                        $_SESSION['update']='updated successfully';
                                         header('location:'.SITEURL.'admin/faculty.php');   
                                    
                                            
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