<?php include('menu.php') ?>
<div class="main">
    <div class="wrapper">
 

<div class="main">
    <div class="wrapper">
    <?php if(isset($_GET['Admin_ID']))
        {
            $Admin_ID=$_GET['Admin_ID'];
        }
        ?>

        <form action="" method="POST">
        
     
            <table class="tbl-30">
                
                <tr>
                    <td>OLD_PASSWORD</td>
                    <td>
                        <input type="password" name="Admin_old_password"placeholder="enter the name to get updated">
                    </td>
                </tr> 
                <tr>
                    <td>NEW_PASSWORD</td>
                    <td>
                        <input type="password" name="Admin_new_password"placeholder="enter the name to get updated">
                    </td>
                </tr> 
                <tr>
                    <td>CONFIRM_NEW_PASSWORD</td>
                    <td>
                        <input type="password" name="Admin_confirm_new_password"placeholder="enter the name to get updated">
                    </td>
                </tr> 
                
                
                <tr>
                    <td colspan="2"> 
                        <input type="hidden" name="Admin_ID" value="<?php echo $Admin_ID?>">
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

        $Admin_old_password=md5($_POST['Admin_old_password']);
        $Admin_new_password=md5($_POST['Admin_new_password']);
        $Admin_confirm_new_password=md5($_POST['Admin_confirm_new_password']);
        $sql="SELECT * from tbl_admin WHERE Admin_ID=$Admin_ID and Admin_password='$Admin_old_password'";
					
		$res=mysqli_query($conn,$sql) or die(mysqli_error());
		if($res==TRUE)
		{
			$count=mysqli_num_rows($res);
				if($count==1)
				{
                    $flag=0;
					while($rows=mysqli_fetch_assoc($res))
						{
							if($Admin_ID==$rows['Admin_ID'])
                            {
                                $flag=1;
                                if($Admin_new_password== $Admin_confirm_new_password)
                                {

                                $sql1="UPDATE tbl_admin SET Admin_password='$Admin_new_password' WHERE Admin_ID=$Admin_ID";      
                                $res1=mysqli_query($conn,$sql1) or die(mysqli_error());
                                 if($res1==TRUE)
                                    {
                                            echo 'changed';
                                            break;
                                    }
                                else{
                                         ECHO 'not updated';
                                    }
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
