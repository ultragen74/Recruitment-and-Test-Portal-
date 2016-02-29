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

echo $userid = $_POST['userid'];


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
$answer11 = $_POST['question-11-answers'];
$answer12 = $_POST['question-12-answers'];
$answer13 = $_POST['question-13-answers'];
$answer14 = $_POST['question-14-answers'];
$answer15 = $_POST['question-15-answers'];

$totalCorrect = 0;

if ($answer1 == "C") { $totalCorrect++; }
if ($answer2 == "D") { $totalCorrect++; }
if ($answer3 == "C") { $totalCorrect++; }
if ($answer4 == "E") { $totalCorrect++; }
if ($answer5 == "C") { $totalCorrect++; }
if ($answer6 == "A") { $totalCorrect++; }
if ($answer7 == "D") { $totalCorrect++; }
if ($answer8 == "E") { $totalCorrect++; }
if ($answer9 == "E") { $totalCorrect++; }
if ($answer10 == "B") { $totalCorrect++; }
if ($answer11 == "D") { $totalCorrect++; }
if ($answer12 == "B") { $totalCorrect++; }
if ($answer13 == "A") { $totalCorrect++; }
if ($answer14 == "C") { $totalCorrect++; }
if ($answer15 == "B") { $totalCorrect++; }



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

    <h1>Teleperformance Test Adobe</h1>
    <h2>Aptitude Test</h2>

    <br />
    <br />


    <b>Chose the right answer</b>

    <form action="Grammar_and_Comprehension_Test.php" method="post" id="quiz">




        <ol>

            <li>

                <h3>1.	The number 25 is the next logical number in the following sequence of numbers: 5, 7, 10, 14, 19....</h3>

                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A) True </label>
                </div>

                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B)	False</label>
                </div>

            </li>

            <li>

                <h3>2.	Five horses, two people, three dogs and seven chickens have a total of fifty-two     legs.  </h3>

                <div>
                    <input type="radio" name="question-2-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A) True	 </label>
                </div>


                <div>
                    <input type="radio" name="question-2-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B) False </label>
                </div>

            </li>

            <li>

                <h3>3.What is the missing number?   (83 - 17 = 56 +?)</h3>

                <div>
                    <input type="radio" name="question-3-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A) 6</label>
                </div>


                <div>
                    <input type="radio" name="question-3-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B) 10</label>
                </div>

                <div>
                    <input type="radio" name="question-3-answers" id="question-1-answers-C" value="C" />
                    <label for="question-1-answers-C">C) 16</label>
                </div>

                <div>
                    <input type="radio" name="question-3-answers" id="question-1-answers-D" value="D" />
                    <label for="question-1-answers-D">D) 20</label>
                </div>

            </li>

            <li>

                <h3>4	. An aircraft flies 930 miles in 75 minutes. How many miles does it fly in 4 hours 45 minutes assuming a constant speed?

                </h3>

                <div>
                    <input type="radio" name="question-4-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A) 	3122        </label>
                </div>


                <div>
                    <input type="radio" name="question-4-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B) 3477</label>
                </div>

                <div>
                    <input type="radio" name="question-4-answers" id="question-1-answers-C" value="C" />
                    <label for="question-1-answers-C">C) 3512</label>
                </div>

                <div>
                    <input type="radio" name="question-4-answers" id="question-1-answers-D" value="D" />
                    <label for="question-1-answers-D">D)  3534</label>
                </div>

            </li>

            <li>

                <h3>	5. What is the missing letter in this series?   (a     c     e     ?     l)

                </h3>

                <div>
                    <input type="radio" name="question-5-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A) f </label>
                </div>


                <div>
                    <input type="radio" name="question-5-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B) g</label>
                </div>

                <div>
                    <input type="radio" name="question-5-answers" id="question-1-answers-C" value="C" />
                    <label for="question-1-answers-C">C)  h</label>
                </div>

                <div>
                    <input type="radio" name="question-5-answers" id="question-1-answers-D" value="D" />
                    <label for="question-1-answers-D">D) j</label>
                </div>

            </li>



            <li>

                <h3>	6. A driver drives 8 km South then 6 km W. and 2 km S. again. She then drives 3 km E.
                    to avoid a traffic jam before driving 6 km N. How many kilometers is she from her starting point?
                </h3>

                <div>
                    <input type="radio" name="question-6-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A) 4</label>
                </div>


                <div>
                    <input type="radio" name="question-6-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B) 5</label>
                </div>

                <div>
                    <input type="radio" name="question-6-answers" id="question-1-answers-C" value="C" />
                    <label for="question-1-answers-C">C)  6</label>
                </div>

                <div>
                    <input type="radio" name="question-6-answers" id="question-1-answers-D" value="D" />
                    <label for="question-1-answers-D">D) 7</label>
                </div>


            </li>

            <li>

                <h3>	7. What is the missing number?   (56 / 7 =? - 5)</h3>

                <div>
                    <input type="radio" name="question-7-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A) 11</label>
                </div>


                <div>
                    <input type="radio" name="question-7-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B) 13</label>
                </div>

                <div>
                    <input type="radio" name="question-7-answers" id="question-1-answers-C" value="C" />
                    <label for="question-1-answers-C">C)  14</label>
                </div>

                <div>
                    <input type="radio" name="question-7-answers" id="question-1-answers-D" value="D" />
                    <label for="question-1-answers-D">D) 15</label>
                </div>

                <div>
                    <input type="radio" name="question-7-answers" id="question-1-answers-E" value="E" />
                    <label for="question-1-answers-E">E)  15</label>
                </div>

            </li>

            <li>

                <h3>	Walter's grandmother's daughter could be Walter's son's grandmother.</h3>

                <div>
                    <input type="radio" name="question-8-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A) True</label>
                </div>


                <div>
                    <input type="radio" name="question-8-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B) False</label>
                </div>
            </li>

            <li>

                <h3>	9. What is the missing letter in this series?    (a     a     b     b     ?     c)</h3>

                <div>
                    <input type="radio" name="question-9-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A) 	A </label>
                </div>


                <div>
                    <input type="radio" name="question-9-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B) B</label>
                </div>

                <div>
                    <input type="radio" name="question-9-answers" id="question-1-answers-C" value="C" />
                    <label for="question-1-answers-C">C) C</label>
                </div>

                <div>
                    <input type="radio" name="question-9-answers" id="question-1-answers-D" value="D" />
                    <label for="question-1-answers-D">D) D</label>
                </div>

            </li>


            <li>

                <h3>10. If all Boogles are Battuns, and some Battuns are Trandles, all Trandles must be Boogles.</h3>

                <div>
                    <input type="radio" name="question-10-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A) 	True </label>
                </div>


                <div>
                    <input type="radio" name="question-10-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B) False</label>
                </div>
            </li>
        </ol>
        <?php
        echo    "<input type='hidden' value=". $userid ." name = 'userid'>";
        echo    "<input type='hidden' value=".  $totalCorrect ." name = 'tc'>";

        ?>

        <input type="submit" value="Next Test" style="
    margin-bottom: 7%;-:center;
    background-color: teal;
    font-size: 200%;" />

    </form>


</div>


</body>

</html>
