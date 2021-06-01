<?php include('menu.php')?>
		<!.......main starts......>
		<div class=main>
			<div class=wrapper>
			<?php if(isset($_SESSION['add']))
				{
					echo $_SESSION['add'];
					unset($_SESSION['add']);
				}
				?>
				<?php if(isset( $_SESSION['delete']))
				{
					echo  $_SESSION['delete'];
					unset( $_SESSION['delete']);
				}
				?>
				
					
				<?php if(isset($_SESSION['fail']))
				{
					echo $_SESSION['fail'];
					unset($_SESSION['fail']);
				}
				?>
				
				<div class=tbl-full1>
				
				
					
			    		  
				
				<!......to add admin......>
							<a href="addyear.php" class='btn-primary'>Add year</a>
		         			<a href="update_year.php" class="btn-secondary">Update Year</a>
				 			<a href="delete_year.php" class="btn-teritory">Delete Year</a>
							 
				</div>
				
		
				<table class=tbl-full>
					
					
					<tr>
						<th>s.no</th>
						<th>year no</th>                    
						<th>Department name</th>
							 
							
						
				    </tr>
					<?php
				
					 $sql="SELECT * from year ";
					
					$res=mysqli_query($conn,$sql) or die(mysqli_error());
					if($res==TRUE)
					{
						$s_no=1;
						$count=mysqli_num_rows($res);
						if($count>0)
						{
						while($rows=mysqli_fetch_assoc($res))
						{
							$year_number=$rows['year_number'];
							$year_department_name=$rows['year_department_name'];
						
							?>
							<tr>
							    <td><?php  echo $s_no++; ?></td>
				    			<td><?PHP echo $year_number;   ?></td>
								<td><?PHP echo $year_department_name; ?></td>
							
				    			
				   			</tr>

							<?PHP

						}
						
					}
					}

					
					?>
				    	
				</table>
			</div>
		</div>
		<!.......main ends......>

		<!.......footer starts starts......>
		
		<!.......footer starts starts......>
		<?php include('footer.php');?>


		
