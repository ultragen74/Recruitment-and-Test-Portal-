<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv='refresh' content='3;url=http://172.21.50.44/' />
	
	<title>Just Wait For Test</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>

	<div id="page-wrap">

		<h1> Thank you for giving Test HR will Contact you Soon</h1>
		
        <?php
		error_reporting(0);
		session_start();

		if (isset($_SESSION['user_name'])){
			$user_name = $_SESSION['user_name'];

		}
		else
		{

			echo "hello1";
		}


		$tc = $_POST['tc'];

		$answer1 = $_POST['question-1-answers'];
		$answer2 = $_POST['question-2-answers'];
		$answer3 = $_POST['question-3-answers'];
		$answer4 = $_POST['question-4-answers'];
		$answer5 = $_POST['question-5-answers'];


		$totalCorrect = $tc;

		if ($answer1 == "C") { $totalCorrect++; }
		if ($answer2 == "D") { $totalCorrect++; }
		if ($answer3 == "D") { $totalCorrect++; }
		if ($answer4 == "B") { $totalCorrect++; }
		if ($answer5 == "D") { $totalCorrect++; }




		echo "<div id='results'>$totalCorrect / 40 correct</div>";

		echo $userid = $_POST['userid'];


		$servername = "localhost";
		$dbname = "tp";
		$username = "root";
		$password = "";

		// Create connection
		$conn = new mysqli($servername, $username, $password,$dbname);

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		$sql_edit = "UPDATE `USERS` SET `Marks` = '$totalCorrect' WHERE `users`.`user_id` =$userid";
		$result1= $conn->query($sql_edit);





        ?>
	
	</div>
	


</body>

</html>