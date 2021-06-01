<?php include('menu.php')?>
		<!.......main starts......>
		<div class=main>
			<div class=wrapper>
			<?php if(isset($_SESSION['delete']))
				{
					echo $_SESSION['delete'];
					unset($_SESSION['delete']);
				}
				?>

				<div class=tbl-full1>
				
					
			    		  
				
				<!......to add admin......>
							<a href="add_course.php" class='btn-primary'>Add Course</a>
		         			<a href='update_course.php' class="btn-secondary">Update Course</a>
				 			<a href="delete_course.php" class="btn-teritory">Delete Course</a>
					
				</div>
				
		
				<table class=tbl-full>
					
					
					<tr>
						<th>course_id</th>
						<th>course_name</th>                   
						<th>course_class</th>
						<th>faculty_id</th>
						<th>course_year</th>
						<th>course_department</th>
						
						
						
						
				    </tr>
					<?php
					
					 $sql="SELECT * from course";
					
					$res=mysqli_query($conn,$sql) or die(mysqli_error());
					if($res==TRUE)
					{
						$count=mysqli_num_rows($res);
						if($count>0)
						{
						while($rows=mysqli_fetch_assoc($res))
						{
							$course_id=$rows['course_id'];
							$course_name=$rows['course_name'];
							$course_class_name=$rows['course_class_name'];
							$course_faculty_id=$rows['course_faculty_id']; 
							$course_year_number=$rows['course_year_number'];
							$course_department_name=$rows['course_department_name'];
							
							

						
							?>
							<tr>
							   
				    			<td><?PHP echo $course_id   ?></td>
								<td><?PHP echo $course_name   ?></td>
								<td><?PHP echo $course_class_name   ?></td>
								<td><?PHP echo  $course_faculty_id  ?></td>
								<td><?PHP echo  $course_year_number   ?></td>


								<td><?PHP echo $course_department_name  ?></td>
								
				    			
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


		
