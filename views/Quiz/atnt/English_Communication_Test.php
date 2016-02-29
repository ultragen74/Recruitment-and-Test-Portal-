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

$userid = $_POST['userid'];

$tc = $_POST['tc'];

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
$answer11 = $_POST['question-6-answers'];
$answer12 = $_POST['question-7-answers'];
$answer13 = $_POST['question-8-answers'];
$answer14 = $_POST['question-9-answers'];
$answer15 = $_POST['question-10-answers'];

$totalCorrect = $tc;
if ($answer1 == "D") { $totalCorrect++; }
if ($answer2 == "D") { $totalCorrect++; }
if ($answer3 == "D") { $totalCorrect++; }
if ($answer4 == "D") { $totalCorrect++; }
if ($answer5 == "B") { $totalCorrect++; }
if ($answer6 == "A") { $totalCorrect++; }
if ($answer7 == "D") { $totalCorrect++; }
if ($answer8 == "D") { $totalCorrect++; }
if ($answer9 == "B") { $totalCorrect++; }
if ($answer10 == "C") { $totalCorrect++; }
if ($answer11 == "C") { $totalCorrect++; }
if ($answer12 == "B") { $totalCorrect++; }
if ($answer13 == "A") { $totalCorrect++; }
if ($answer14 == "A") { $totalCorrect++; }
if ($answer15 == "C") { $totalCorrect++; }


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <title>Adobe Test</title>

    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>

<div id="page-wrap">

    <h1>Teleperformance Test AT&T</h1>
    <h2>   ENGLISH GRAMMAR QUESTIONS </h2>

    <br />
    <br />


    <b>Chose the right answer</b>

    <form action="grade.php" method="post" id="quiz">




        <ol>

            <li>

                <h3>1.	You____ to work very hard if you want to pass your English exam.
                </h3>

                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A) are having </label>
                </div>

                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B)	 will have</label>
                </div>
                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                    <label for="question-1-answers-C">C)  have</label>
                </div>

            </li>

            <li>

                <h3>2. You will be tired tomorrow if you ______to bed soon.      </h3>

                <div>
                    <input type="radio" name="question-2-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A) don&#8217;t go </label>
                </div>


                <div>
                    <input type="radio" name="question-2-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B) aren&#8217;t going </label>
                </div>
                <div>
                    <input type="radio" name="question-2-answers" id="question-1-answers-C" value="C" />
                    <label for="question-1-answers-C">C) won&#8217;t go </label>
                </div>
            </li>

            <li>

                <h3>3. I will see you at the cinema if you________the time.</h3>

                <div>
                    <input type="radio" name="question-3-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A) are having</label>
                </div>


                <div>
                    <input type="radio" name="question-3-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B) have</label>
                </div>

                <div>
                    <input type="radio" name="question-3-answers" id="question-1-answers-C" value="C" />
                    <label for="question-1-answers-C">C)will have</label>
                </div>
            </li>

            <li>

                <h3>4. If you sell more than you did last year you_____soon on your way.</h3>

                <div>
                    <input type="radio" name="question-4-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A) 	are        </label>
                </div>


                <div>
                    <input type="radio" name="question-4-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B) will be</label>
                </div>

                <div>
                    <input type="radio" name="question-4-answers" id="question-1-answers-C" value="C" />
                    <label for="question-1-answers-C">C) are being</label>
                </div>

            </li>

            <li>

                <h3>	5. If he ________ a good job, he will pay all his bills.</h3>

                <div>
                    <input type="radio" name="question-5-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A) will find </label>
                </div>


                <div>
                    <input type="radio" name="question-5-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B) finds</label>
                </div>

                <div>
                    <input type="radio" name="question-5-answers" id="question-1-answers-C" value="C" />
                    <label for="question-1-answers-C">C) is finding</label>
                </div>

            </li>



            <li>

                <h3>	6. If he _______ our offer, we will have to withdraw.</h3>

                <div>
                    <input type="radio" name="question-6-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A) is not accepting</label>
                </div>


                <div>
                    <input type="radio" name="question-6-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B) won&#8217;t accept</label>
                </div>

                <div>
                    <input type="radio" name="question-6-answers" id="question-1-answers-C" value="C" />
                    <label for="question-1-answers-C">C) doesn&#8217;t accept</label>
                </div>
            </li>

            <li>

                <h3>	7. If you_________me a 10% discount, I&#8217;ll buy two.  </h3>

                <div>
                    <input type="radio" name="question-7-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A)are giving</label>
                </div>


                <div>
                    <input type="radio" name="question-7-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B) will give</label>
                </div>

                <div>
                    <input type="radio" name="question-7-answers" id="question-1-answers-C" value="C" />
                    <label for="question-1-answers-C">C)  give</label>
                </div>

            </li>

            <li>

                <h3>	8. If sales________ soon, we will have to lay off some workers.</h3>

                <div>
                    <input type="radio" name="question-8-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A) don&#8217;t improve</label>
                </div>


                <div>
                    <input type="radio" name="question-8-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B) won&#8217;t improve</label>
                </div>

                <div>
                    <input type="radio" name="question-8-answers" id="question-1-answers-C" value="B" />
                    <label for="question-1-answers-C">C)aren&#8217;t improving</label>
                </div>
            </li>

            <li>

                <h3>	9. If the report___________on my desk tomorrow morning, you will be in big trouble.</h3>

                <div>
                    <input type="radio" name="question-9-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A) isn&#8217;t being </label>
                </div>


                <div>
                    <input type="radio" name="question-9-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B)won&#8217;t be</label>
                </div>

                <div>
                    <input type="radio" name="question-9-answers" id="question-1-answers-C" value="C" />
                    <label for="question-1-answers-C">C) isn&#8217;t</label>
                </div>
            </li>


            <li>

                <h3>10. If I see you standing around the coffee machine talking again, you_______ a rise.</h3>

                <div>
                    <input type="radio" name="question-10-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A) won&#8217;t get </label>
                </div>


                <div>
                    <input type="radio" name="question-10-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B) don&#8217;t get</label>
                </div>
            </li>
        </ol>
        <?php
        echo    "<input type='hidden' value=". $_POST['userid'] ." name = 'userid'>";
        echo    "<input type='hidden' value=".  $totalCorrect ." name = 'tc'>";
        ?>

        <input type="submit" value="Submit Test" style="
    margin-bottom: 7%;-:center;
    background-color: teal;
    font-size: 200%;" />

    </form>


</div>


</body>

</html>