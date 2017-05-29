
<?php
	
$n = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING) or die('Oops something went wrong');
$t = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING) or die('Oops something went wrong');
$c = filter_input(INPUT_POST, 'comment', FILTER_SANITIZE_STRING) or die('Oops something went wrong');
	
	$sql = 'INSERT INTO post_it_db (name, title, comment) VALUES (?,?,?)';
	
	require_once('db_con.php');
	$stmt = $con->prepare($sql);
	$stmt->bind_param('sss', $n, $t, $c);
	
	$stmt->execute();
	
	if($stmt->affected_rows > 0) {
		
		echo '<p>Thanks  '.$n.', we have received your message.</p>';
	} 
	else {
		echo 'Something went wrong, please try again';
	}
	
	
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Response</title>
<link href="style.css" rel="stylesheet">
<style>
	.body {
		background-image: url(riverbg.png);
	}
	.margin {
		margin-top: 20%;
		margin-left:40%;
		
	}
	
	button {
		height: 50px;
		width:200px;
	}
	
	p {
		color: white;
		font-weight:900;
	}
	
	</style>
</head>

<body>

<div class="col-1-3 push-1-3 margin"> 



<button onclick="goBack()">Thanks for your message</button>




</div>

<script>
function goBack() {
    window.history.back();
}
</script>
</body>
</html>