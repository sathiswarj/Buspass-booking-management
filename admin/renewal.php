<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></link>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
<form method="POST" action="renewal.php">
	<input type="date" name="date_from">
<br>
<input type="date" name="date_to">
<input type="submit" name="submit">submit

</body>
<script >
	$(function(){
		$(".datepicker").datepicker({
			dateFormat:`yy-mm-dd`,
			changeMonth:true,
			changeYear:true
		});
	});
</script>
</html>
<?php
	if(!empty($_POST['date_from']) AND !empty($_POST['date_to']));
	$date1=new DateTime($_POST['date_from']);	
	$date2=new DateTime($_POST['date_to']);
	$interval=$date1->diff($date2);
	echo "difference" . $interval->y."years," .$interval->m."months,"  . $interval->d."days";

	?> 