<?php include('menu.php') ?>

<div class="main">
    <div class="wrapper">
        <h1>update department</h1></br>
        <form action="" method="POST" enctype="multipart/form-data">
            <table class="tbl-30">
            <tr>
                    <td>Class Name </td>
                    <td>
                        <input type="text" name="class_name"placeholder="Enter your class name">
                    </td>
                </tr> 
                <tr>
                    <td> New Class Name </td>
                    <td>
                        <input type="text" name="new_class_name"placeholder="Enter your new class name">
                    </td>
                </tr>
                <tr>
                    <td>New year number </td>
                    <td>
                        <input type="text" name="new_year_number"placeholder="Enter your new year number">
                    </td>
                </tr> 
                <tr>
                    <td>New year Department Name  </td>
                    <td>
                        <input type="text" name="new_year_department_name"placeholder="Enter your new year department">
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
         $class_name=$_POST['class_name'];
         $new_class_name=$_POST['new_class_name'];
         $class_year_number=$_POST['new_year_number'];
        
         $new_year_department_name=$_POST['new_year_department_name'];
        
         //print_r($_FILES['department_image']);
         //die();
         $sql="SELECT * from class where class_name='$class_name'";
                      
         $res=mysqli_query($conn,$sql) or die(mysqli_error());
         if($res==TRUE)
         {
             $count=mysqli_num_rows($res);
                 if($count!=0)
                 {
                     $rows=mysqli_fetch_assoc($res);
                     
         
          //inserting data into sql
          $sql="UPDATE class  SET
         class_name='$new_class_name',
         class_year_number='$class_year_number',
         class_department_name='$new_year_department_name'
         where  class_name='$class_name'";
                      
          //execute query and save data in data base
          
          $res=mysqli_query($conn,$sql)or die(mysqli_error());
          if ($res == TRUE)
          {
              $_SESSION['add']='CLASS updated Successfully';
              header("location:".SITEURL.'admin/class.php');
          }
          else{
              echo 'failed to insert_data';
          }
         
         
      }
  }
       }
      
     
        
  
  ?>
