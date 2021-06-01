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
				<?php if(isset($_SESSION['update']))
				{
					echo $_SESSION['update'];
					unset($_SESSION['update']);
				}
				?>

				<div class=tbl-full1>
				
					
			    		  
				
				<!......to add admin......>
							<a href="add_student.php" class='btn-primary'>Add student</a>
		         			<a href='update_student.php' class="btn-secondary">update admin</a>
				 			<a href="deletestudent.php" class="btn-teritory">Delete student</a>
					
				</div>
				
		
				<table class=tbl-full>
					
					
					<tr>
						<th>student_id</th>
						<th>student_name</th>                   
						<th>student_mail</th>
						<th>student_class</th>
						<th>student_year</th>
						<th>student_department</th>
						
						
						
						
				    </tr>
					<?php
					
					 $sql="SELECT * from student";
					
					$res=mysqli_query($conn,$sql) or die(mysqli_error());
					if($res==TRUE)
					{
						$count=mysqli_num_rows($res);
						if($count>0)
						{
						while($rows=mysqli_fetch_assoc($res))
						{
							$student_id=$rows['student_id'];
							$student_name=$rows['student_name'];
							$student_mail=$rows['student_mail'];
							$student_class=$rows['student_class'];
							$student_year=$rows['student_year'];
							$student_department=$rows['student_department'];
							
							
							

						
							?>
							<tr>
							   
				    			<td><?PHP echo $student_id   ?></td>
								<td><?PHP echo $student_name   ?></td>
								<td><?PHP echo $student_mail   ?></td>
								<td><?PHP echo $student_class   ?></td>
								<td><?PHP echo $student_year   ?></td>
								<td><?PHP echo $student_department  ?></td>
								
				    			
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


		
