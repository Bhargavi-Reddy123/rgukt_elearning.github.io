

<?php
 include('mysqlconnection.php');

?>
<html>
    <head>
        <title>Login/Register</title>
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>
   <body>
   
   
   	<div class="loginpg">
   		<div class="form-box">
   			<div class="button-box">
   				<div id="btn"></div>
   				<button type="button" class="toggle-btn" onclick="login()">Log In</button>
   				<button type="button" class="toggle-btn" onclick="register()">Register</button>
				   
   			</div>
			   
   			<div class="social-icons">
   			<!--<img src="fb.png">
   			<img src="tw.png">-->
			   
   			<img src="gl.png">
   			<img src="rguktb1.jpg">
   		</div>
		   <?php 
   				if(isset($_SESSION['login']))
				{echo $_SESSION['login'];
					unset($_SESSION['login']);
				}
				?>
				<?php if(isset($_SESSION['no-login-messege']))
				{
					echo $_SESSION['no-login-messege'];
					unset($_SESSION['no-login-messege']);
				}
				?>
				
		   
		   
   		<form id="login" method="POST" class="input-group">
		   <table>
   			<input type="text" class="input-field" name='Admin_ID' placeholder="User Id" required>
   			<input type="password" class="input-field"name='Admin_password' placeholder="Enter password" required>
   			<input type="checkbox" class="check-box"><span>Remember Password</span>
   			<td colspan="2">
				<input type="submit" name="submit" value="login" class="submit-btn">
   				</td>
				</tr>
				</table>
   		</form>
   		<form id="register" class="input-group">
			<table>
   			<input type="text" class="input-field" placeholder="User Id" required>
   			<input type="text" class="input-field" placeholder="Email Id" required>
   			<input type="password" class="input-field" placeholder="Set password" required>
   			<input type="password" class="input-field" placeholder="Verify password" required>
   			<input type="checkbox" class="check-box"><span>I agree to the terms & conditions</span>
            <tr>
			<td colspan="2">
				<input type="submit" name="submit" value="login" class="submit-btn">
   				</td>
				</tr>
			</table>
   		</form>
   		</div>
   	</div>
   	<script>
   		var x = document.getElementById("login");
   		var y = document.getElementById("register");
   		var z = document.getElementById("btn");

   		function register()
   		{
   			x.style.left="-400px";
   			y.style.left="50px";
   			z.style.left="110px";
   		}
   		function login()
   		{
   			x.style.left="50px";
   			y.style.left="450px";
   			z.style.left="0px";
   		}
   	</script>
   </body>
</html>
<?php

     if(isset($_POST["submit"]))
     { 
        $Admin_id=$_POST['Admin_ID'];
        $Admin_password=md5($_POST['Admin_password']);
		$sql="SELECT * from tbl_admin where Admin_ID='$Admin_id' and Admin_password='$Admin_password'" ;
	
		$res=mysqli_query($conn,$sql) or die(mysqli_error());
		if($res==TRUE)
		{
			$count=mysqli_num_rows($res);
			
				if($count==1)
				{
					$_SESSION['login']='login Successfully';
					$_SESSION['user']=$Admin_id;
            		header("location:".SITEURL.'admin/admin.php');
                                   
							
						
       
                }
				else
				{
					$_SESSION['login']="login fail";
					header("location:".SITEURL.'admin/login.php');
							

				}
        }
    }
    
?>        
