<?php include('menu.php') ?>

<div class="main">
    <div class="wrapper">
        <h1>update department</h1></br>
        <form action="" method="POST" enctype="multipart/form-data">
            <table class="tbl-30">
                <tr>
                    <td>Department Name </td>
                    <td>
                        <input type="text" name="department_name"placeholder="Enter your full name">
                    </td>
                </tr> 
                <tr>
                    <td>New Department Name </td>
                    <td>
                        <input type="text" name="new_department_name"placeholder="Enter your full name">
                    </td>
                </tr> 
                <tr>
                    <td>New Department image</td>
                    <td>
                        <input type="file" name="new_department_image">
                    </td>
                </tr>
               
               
                <tr>
                    <td colspan="2"> 
                        <input type="submit" name="submit" value="update department" class="btn-secondary">
                     </td>
                </tr>
                </br>
                    
            </table>
        </form>
            </br>



<?php include("footer.php");?>
  
<?php

     
     if(isset($_POST['submit']))
     { 
       //get data from form
       $department_name=$_POST['department_name'];
       $new_department_name=$_POST['new_department_name'];
      
       //print_r($_FILES['department_image']);
       //die();
       $sql="SELECT * from department where department_name='$department_name'";
					
       $res=mysqli_query($conn,$sql) or die(mysqli_error());
       if($res==TRUE)
       {
           $count=mysqli_num_rows($res);
               if($count==1)
               {
                   $rows=mysqli_fetch_assoc($res);
                   $department_image=$rows['department_image'];
                   
                       
                               
                               $path="../images/departments/".$department_image;
                               $remove=unlink($path);
                             
       if(isset($_FILES['new_department_image']['name']))
       {
           $new_department_image=$_FILES['new_department_image']['name'];
           $source_path=$_FILES['new_department_image']['tmp_name'];
           echo $destination_path="../images/departments/".$new_department_image;


           $upload=move_uploaded_file($source_path,$destination_path);
           if($upload==FALSE)
           {
               $_SESSION['upload']="upload falied";
               header("location:".SITEURL.'admin/adddepartment.php');
               
           }
       }
       else
       {

       }
       
        //inserting data into sql
        $sql="UPDATE department  SET
        department_name='$new_department_name',
        department_image='$new_department_image'
        
       where department_name='$department_name'";
        //execute query and save data in data base
        
        $res=mysqli_query($conn,$sql)or die(mysqli_error());
        if ($res == TRUE)
        {
            $_SESSION['add']='Department updated Successfully';
            header("location:".SITEURL.'admin/department.php');
        }
        else{
            echo 'failed to insert_data';
        }
       
       
    }
}
     }
    
   
      

?>