<?php
	require 'conn.php';
	if(ISSET($_POST['search'])){
		$from_date = date("Y-m-d", strtotime($_POST['from_date']));
		$to_date = date("Y-m-d", strtotime($_POST['to_date']));
		$query=mysqli_query($conn, "SELECT * FROM `user_tbl` WHERE date(`created_at`) BETWEEN '$from_date' AND '$to_date'") or die(mysqli_error());
		$fetch=mysqli_num_rows($query);
		if($fetch>0){
			while($fetch=mysqli_fetch_array($query)){
?>
	<tr>
				<td><?php echo $fetch['user_name'];?></td>
<td><?php echo $fetch['user_type'];?></td>
<td><?php echo $fetch['user_age'];?></td>
<td><?php echo $fetch['from_stop'];?></td>
<td><?php echo $fetch['to_stop'];?></td>
		<td><?php echo $fetch['clg_name']?></td>
		<td><?php echo $fetch['created_at']?></td>
	</tr>
<?php
			}
		}else{
			echo'
			<tr>
				<td colspan = "4"><center>Record Not Found</center></td>
			</tr>';
		}
	}else{
		$query=mysqli_query($conn, "SELECT * FROM `user_tbl`") or die(mysqli_error());
		while($fetch=mysqli_fetch_array($query)){
?>
	<tr>
		<td><?php echo $fetch['user_name'];?></td>
<td><?php echo $fetch['user_type'];?></td>
<td><?php echo $fetch['user_age'];?></td>
<td><?php echo $fetch['from_stop'];?></td>
<td><?php echo $fetch['to_stop'];?></td>
		<td><?php echo $fetch['clg_name']?></td>
		<td><?php echo $fetch['created_at']?></td>
	</tr>
<?php
		}
	}
?>