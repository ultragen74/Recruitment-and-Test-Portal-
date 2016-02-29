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


echo $user_name= $_SESSION['user_name'];
$tc = $_POST['tc'];
$userid = $_POST['userid'];

$answer1 = $_POST['question-1-answers'];
$answer2 = $_POST['question-2-answers'];
$answer3 = $_POST['question-3-answers'];
$answer4 = $_POST['question-4-answers'];
$answer5 = $_POST['question-5-answers'];
$answer6 = $_POST['question-6-answers'];
$answer7 = $_POST['question-7-answers'];
$answer8 = $_POST['question-8-answers'];
$answer9 = $_POST['question-9-answers'];
$answer10 = $_POST['question-10-answers'];


$totalCorrect = $tc;

if ($answer1 == "E") { $totalCorrect++; }
if ($answer2 == "C") { $totalCorrect++; }
if ($answer3 == "A") { $totalCorrect++; }
if ($answer4 == "A") { $totalCorrect++; }
if ($answer5 == "A") { $totalCorrect++; }
if ($answer6 == "A") { $totalCorrect++; }
if ($answer7 == "A") { $totalCorrect++; }
if ($answer8 == "B") { $totalCorrect++; }
if ($answer9 == "D") { $totalCorrect++; }
if ($answer10 == "A"){ $totalCorrect++; }


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <title> Test</title>

    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>

<div id="page-wrap">

    <h1>Teleperformance Test Sandisk</h1>
    <h2>Math Test</h2>

    <br />
    <br />


    <b>Chose the right answer</b>

    <form action="grade.php" method="post" id="quiz">




        <ol>


            <li>

                <h3>      1. What is 1.5 divided by .5?   </h3>

                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A) 5</label>
                </div>


                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B) 2</label>
                </div>

                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                    <label for="question-1-answers-C">C) 3</label>
                </div>

                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                    <label for="question-1-answers-D">D) 4</label>
                </div>

            </li>

            <li>

                <h3>Round 12.5861 to the nearest hundredth.</h3>

                <div>
                    <input type="radio" name="question-2-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A) 	12.586        </label>
                </div>


                <div>
                    <input type="radio" name="question-2-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B) 12.59</label>
                </div>

                <div>
                    <input type="radio" name="question-2-answers" id="question-1-answers-C" value="C" />
                    <label for="question-1-answers-C">C) 12.60</label>
                </div>

                <div>
                    <input type="radio" name="question-2-answers" id="question-1-answers-D" value="D" />
                    <label for="question-1-answers-D">D)  13.00</label>
                </div>

            </li>

            <li>

                <h3>	3. Which problem has an answer of 25%?</h3>

                <div>
                    <input type="radio" name="question-3-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A)	10 is what percent of 50? </label>
                </div>


                <div>
                    <input type="radio" name="question-3-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B)25 is what percent of 75?</label>
                </div>

                <div>
                    <input type="radio" name="question-3-answers" id="question-1-answers-C" value="C" />
                    <label for="question-1-answers-C">C) 25 is what percent of 125?</label>
                </div>

                <div>
                    <input type="radio" name="question-3-answers" id="question-1-answers-D" value="D" />
                    <label for="question-1-answers-D">D)20 is what percent of 80?</label>
                </div>

            </li>



            <li>

                <h3>	4. If a $900 computer is on sale for 20% off, what is the sale price?

                </h3>

                <div>
                    <input type="radio" name="question-4-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A) $180.00</label>
                </div>


                <div>
                    <input type="radio" name="question-4-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B) $720.00</label>
                </div>

                <div>
                    <input type="radio" name="question-4-answers" id="question-1-answers-C" value="C" />
                    <label for="question-1-answers-C">C) $855.00</label>
                </div>

                <div>
                    <input type="radio" name="question-4-answers" id="question-1-answers-D" value="D" />
                    <label for="question-1-answers-D">D) $1,080.00</label>
                </div>


            </li>

            <li>

                <h3>	5.   75. Rebecca put $4,000.00 in a savings account at an annual interest rate of 5.5%. How much interest will the principal earn in 1 year?

                </h3>

                <div>
                    <input type="radio" name="question-5-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A)$22.00</label>
                </div>


                <div>
                    <input type="radio" name="question-5-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B) $55.00</label>
                </div>

                <div>
                    <input type="radio" name="question-5-answers" id="question-1-answers-C" value="C" />
                    <label for="question-1-answers-C">C)  	$110.00</label>
                </div>

                <div>
                    <input type="radio" name="question-5-answers" id="question-1-answers-D" value="D" />
                    <label for="question-1-answers-D">D) $220.00</label>
                </div>


            </li>

        </ol>
        <?php
        echo    "<input type='hidden' value=". $_POST['userid'] ." name = 'userid'>";
        echo    "<input type='hidden' value=".  $totalCorrect ." name = 'tc'>";
        ?>

        <input type="submit" value="Submit Test"  style="
    margin-bottom: 7%;-:center;
    background-color: teal;
    font-size: 200%;" />

    </form>


</div>


</body>

</html>