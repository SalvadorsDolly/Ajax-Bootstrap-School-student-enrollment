<?php 
	include 'db.php';
	$sql = "SELECT * FROM student_data";
	$run = mysqli_query($conn, $sql);
	while ($rows = mysqli_fetch_assoc($run)) { ?>
		<tr>
			<td>3</td>
			<td><?php echo $rows['Studerande']; ?></td>
			<td><?php echo $rows['Kurs ämne']; ?></td>
			<td><?php echo $rows['Studentavgift']; ?>/=</td>
			<td>
				<div class="dropdown">
					<button class="btn btn-primary" data-toggle="dropdown">Handling<span class="caret"></span></button>
		 			<ul class="dropdown-menu">
						<li><a href="#">Redigera-Edit</li>
						<li><a href="#">Radera-Delete</li>
					</ul>
				</div>
			</td>
		</tr>
	<?php }
?>

