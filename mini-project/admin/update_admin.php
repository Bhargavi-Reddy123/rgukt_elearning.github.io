<?php include('menu.php') ?>
<div class="main">
    <div class="wrapper">
 

<div class="main">
    <div class="wrapper">
        <h1>Delete Admin</h1></br>
        <form action="" method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Admin ID: </td>
                    <td>
                        <input type="text" name="Admin_id"placeholder="Enter the id which need to update">
                    </td>
                </tr> 
                <tr>
                    <td>Admin_full_name: </td>
                    <td>
                        <input type="text" name="Admin_full_name"placeholder="enter the name to get updated">
                    </td>
                </tr> 
                
                <tr>
                    <td colspan="2"> 
                        <input type="submit" name="submit" value="Update Admin" class="btn-secondary">
                     </td>
                </tr>
            </table>
        </form>
    </div>
</div>
<?php include('footer.php') ?>
<?php
     
     
    if(isset($_POST['submit']))
    { //get data from form
        $Admin_id=$_POST['Admin_id'];
        $Admin_full_name=$_POST['Admin_full_name'];
        $sql="SELECT * from tbl_admin";
					
		$res=mysqli_query($conn,$sql) or die(mysqli_error());
		if($res==TRUE)
		{
			$count=mysqli_num_rows($res);
				if($count>0)
				{
                    $flag=0;
					while($rows=mysqli_fetch_assoc($res))
						{
							if($Admin_id==$rows['Admin_ID'])
                            {
                                $flag=1;
                                

                                $sql="UPDATE tbl_admin SET Admin_full_name='$Admin_full_name'  WHERE Admin_ID=$Admin_id";      
                                $res=mysqli_query($conn,$sql)or die(mysqli_error());
                                 if($res==TRUE)
                                    {
                                            echo 'updated';
                                            break;
                                    }
                                else{
                                         ECHO 'not updated';
                                    }
                            }
							
						
       
                        }
                        if($flag!=1)
                        {
                            echo 'does not exist';
                        }
                    }
                }
            }
?>        
    </div>
</div>
