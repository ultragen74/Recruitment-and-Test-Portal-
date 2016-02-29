<!-- if you need user information, just put them into the $_SESSION variable and output them here -->

<!-- because people were asking: "index.php?logout" is just my simplified form of "index.php?logout=true" $sql_Test = "SELECT `Test` FROM `users` WHERE user_id =13 ";-->



 <?php
 error_reporting(0);
echo" <!DOCTYPE html>
<html lang='en'>
	<head>
		<meta http-equiv='content-type' content='text/html; charset=UTF-8'>
		<meta charset='utf-8'>
		<title>TP Agent Profile</title>
		<meta name='generator' content='Bootply' />
		<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>
		<link href='http://172.21.50.44/views/css/bootstrap.min.css' rel='stylesheet'>

		<!--[if lt IE 9]>
			<script src='//html5shim.googlecode.com/svn/trunk/html5.js'></script>
		<![endif]-->
		<link href='C:\wamp\www\getstarted\views\css\styles.css' rel='stylesheet'>
	</head>
	<body>";


 if (isset($_SESSION['user_name'])){
      $user_name = $_SESSION['user_name'];
     echo $user_name;
 }
 else
 {

     echo "hello1";
 }




 $servername = "localhost";
 $dbname = "tp";
 $usernam = "root";
 $password = "";

 // Create connection
 $conn = new mysqli($servername, $usernam, $password,$dbname);

 // Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }
 $sql_Test = "SELECT * FROM `users` WHERE user_name = '$user_name'";
 $result1= $conn->query($sql_Test);
 while($row = $result1->fetch_assoc()) {
     $Test_output = $row['Test'];
     $userid = $row['user_id'];
     $Test_Marks = $row['Marks'];
     echo "


<div class='navbar navbar-fixed-top navbar-inverse'>
    <div class='container'>
     <!-- <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-collapse'>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
      </button> -->
      <a class='navbar-brand' href='index.php?logout'>Logout</a>

    </div><!-- /.container -->
</div><!-- /.navbar -->

<!-- HEADER
=================================-->

<div class='jumbotron text-center'>
    <div class='container'>
      <div class='row'>
        <div class='col col-lg-12 col-sm-12'>
          <h1>Hey ".$row['Full_name'] .", Welcome To Teleperformance </h1>
          <p>";
     if ($Test_output == 1 && $Test_Marks == NULL) {
         echo "<form action = 'views/Quiz/adobe/index.php'  method = 'post'>
            <input type='hidden' value =" . $userid . " name = 'userid'>
            <input type='hidden' value =" . $user_nameX ." name = 'user_nameX'>
             <input type='hidden' value =" . $user_name . " name = 'user_name'>
            <input type= 'submit' value = 'Start Test'>
            </form>";
             }

     elseif ($Test_output == 2 && $Test_Marks == NULL) {
         echo "<form action = 'views/Quiz/GA/Aptitude_test.php'  method = 'post'>
            <input type='hidden' value =" . $userid . " name = 'userid'>
            <input type= 'submit' value = 'Start Test'>
            </form>";
     }

     elseif($Test_output == 3 && $Test_Marks == NULL) {
         echo "<form action = 'views/Quiz/atnt/Aptitude_test.php'  method = 'post'>
            <input type='hidden' value =" . $userid . " name = 'userid'>
            <input type= 'submit' value = 'Start Test'>
            </form>";
     }

     elseif ($Test_output == 4 && $Test_Marks == NULL) {
         echo "<form action = 'views/Quiz/Sandisk/Aptitude_test.php'  method = 'post'>
            <input type='hidden' value =" . $userid . " name = 'userid'>
            <input type= 'submit' value = 'Start Test'>
            </form>";
     }

     else {
         echo "<p> Hold On For Result Form HR !</p>";
     }

       echo " </p>

        </div>
      </div>
    </div>
</div>
<!-- /header container-->


<!-- CONTENT
=================================-->
<div class='container' style='
    text-align: center;
    font-family: sans-serif;
    font-size: 18px;
'>
    <div class='row'>
        <div class='col-lg-12'><div class='well'><p >Address : ".$row['Address']." City :".$row['Address']." State :".$row['State']."  </p></div></div>
    </div>
    <div class='row'>
        <div class='col-md-4'><div class='well'><p>Father Name : ".$row['Father_name']."</p></div></div>
        <div class='col-md-4'><div class='well'><p>Date of Birth:".$row['dob']."</p></div></div>
        <div class='col-md-4'><div class='well'><p>Contact No :".$row['Contact_no']."</p></div></div>
    </div>
    <div class='row'>
        <div class='col-lg-6 col-sm-6'><div class='well'><p>Gender : ".$row['Gender']."</p></div></div>
        <div class='col-lg-6 col-sm-6'><div class='well'><p>Marital Status : ".$row['Marital_status']."</p></div></div>
    </div>
    <div class='row'>
        <div class='col-lg-4 col-sm-6'><div class='well'>Qualification : ".$row['Qualification']."</div></div>
        <div class='col-lg-4 col-sm-6'><div class='well'>Course :".$row['Course']."</div></div>
        <div class='col-lg-4 col-sm-12'><div class='well'>University ".$row['University']."</div></div>
    </div>
  	<div class='row'>
        <div class='col-md-3'><div class='well'><p>Percentage : ".$row['Percentage']."</p></div></div>
        <div class='col-md-3'><div class='well'><p>Passing : ".$row['Passing_year']."</p></div></div>
        <div class='col-md-3'><div class='well'><p>Study : ".$row['Study']."</p></div></div>
      	<div class='col-md-3'><div class='well'><p>Reference Com :".$row['Rcompany']."</p></div></div>
    </div>
  	<div class='row'>
        <div class='col-xs-3'><div class='well'><p>Reference Name : ".$row['Rname']."</p></div></div>
        <div class='col-xs-3'><div class='well'><p>Designation : ".$row['Designation']."</p></div></div>
        <div class='col-xs-3'><div class='well'><p>Contact no: ".$row['Rcontact_no']."</p></div></div>
      	<div class='col-xs-3'><div class='well'><p>Source : ".$row['Sourcee']."</p></div></div>

    </div>
  	<hr>

  	</div>
<hr>
<!-- /CONTENT ============-->

	<!-- script references -->
		<script src='//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js'></script>
		<script src='js/bootstrap.min.js'></script>
	</body>
</html>

";

 }