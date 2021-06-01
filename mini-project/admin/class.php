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
							<a href="add_class.php" class='btn-primary'>Add class</a>
		         			<a href="update_class.php" class="btn-secondary">Update Class</a>
				 			<a href="delete_class.php" class="btn-teritory">Delete Class</a>
							 
				</div>
				
		
				<table class=tbl-full>
					
					
					<tr>
						<th>s.no</th>
						<th>Class name </th>
						<th>Year Number</th>                
						<th>Department name</th>
						<th> </th>  
							 
							
						
				    </tr>
					<?php
				
					 $sql="SELECT * from class ";
					
					$res=mysqli_query($conn,$sql) or die(mysqli_error());
					if($res==TRUE)
					{
						$s_no=1;
						$count=mysqli_num_rows($res);
						if($count>0)
						{
						while($rows=mysqli_fetch_assoc($res))
						{
							$class_name=$rows['class_name'];
							$class_year_number=$rows['class_year_number'];
				
							$class_department_name=$rows['class_department_name'];
						
							?>
							<tr>
							    <td><?php  echo $s_no++; ?></td>
				    			<td><?PHP echo $class_name;   ?></td>
								<td><?PHP echo $class_year_number;   ?></td>
								<td><?PHP echo $class_department_name;   ?></td>
							
				    			
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


		
