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
$answer6 = $_POST['question-6-answers'];
$answer7 = $_POST['question-7-answers'];
$answer8 = $_POST['question-8-answers'];
$answer9 = $_POST['question-9-answers'];
$answer10 = $_POST['question-10-answers'];


$totalCorrect = $tc;

if ($answer1 == "A") { $totalCorrect++; }
if ($answer2 == "B") { $totalCorrect++; }
if ($answer3 == "B") { $totalCorrect++; }
if ($answer4 == "D") { $totalCorrect++; }
if ($answer5 == "B") { $totalCorrect++; }
if ($answer6 == "B") { $totalCorrect++; }
if ($answer7 == "B") { $totalCorrect++; }
if ($answer8 == "A") { $totalCorrect++; }
if ($answer9 == "C") { $totalCorrect++; }
if ($answer10 == "B") { $totalCorrect++; }



echo $userid = $_POST['userid'];

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
    <h2>Grammar and Comprehension Test</h2>
    <p>Make an appropriate choice from the available options: </p>
    <br />
    <br />


    <b>Questions 1-4</b>

    <form action="grade.php" method="post" id="quiz">




        <ol>

            <li>

                <h3>
                    1.	Not again! This is the third time that I __________ my keys since I ____________ home this morning.</h3>

                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A)  am losing/was leaving  </label>
                </div>

                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B)	had lost/left</label>
                </div>

                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                    <label for="question-1-answers-C">C)	lose/had left</label>
                </div>

                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                    <label for="question-1-answers-D">D)	have lost/left</label>
                </div>
            </li>

            <li>

                <h3>2.	He _________ of retiring until after he ___________ enough to afford a life abroad after retirement.
                    a) hasn't thought/will save				c) won't think/is saving
                    b) isn't thinking/has been saving 			d) doesn't think/has saved

                </h3>

                <div>
                    <input type="radio" name="question-2-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A) hasn't thought/will save </label>
                </div>


                <div>
                    <input type="radio" name="question-2-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B) isn't thinking/has been saving </label>
                </div>

                <div>
                    <input type="radio" name="question-2-answers" id="question-1-answers-C" value="C" />
                    <label for="question-1-answers-C">C)	won't think/is saving</label>
                </div>

                <div>
                    <input type="radio" name="question-2-answers" id="question-1-answers-D" value="D" />
                    <label for="question-1-answers-D">D) doesn't think/has saved</label>
                </div>

            </li>

            <li>

                <h3>	3.	For a year now, Mr. Harris _______________ charity balls to collect money for the homeless.</h3>

                <div>
                    <input type="radio" name="question-3-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A) was organizing </label>
                </div>


                <div>
                    <input type="radio" name="question-3-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B) organized</label>
                </div>

                <div>
                    <input type="radio" name="question-3-answers" id="question-1-answers-C" value="C" />
                    <label for="question-1-answers-C">C)would be organizing </label>
                </div>

                <div>
                    <input type="radio" name="question-3-answers" id="question-1-answers-D" value="D" />
                    <label for="question-1-answers-D">D) has been organizing</label>
                </div>
            </li>

            <li>

                <h3>	4.	By the time it _______________ mid-summer, I _______________ at this firm for about ten years.
                  </h3>

                <div>
                    <input type="radio" name="question-4-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A) will be/will have worked

                    </label>
                </div>


                <div>
                    <input type="radio" name="question-4-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B) would be/had worked</label>
                </div>

                <div>
                    <input type="radio" name="question-4-answers" id="question-1-answers-C" value="C" />
                    <label for="question-1-answers-C">C)  has been/will be working </label>
                </div>

                <div>
                    <input type="radio" name="question-4-answers" id="question-1-answers-D" value="D" />
                    <label for="question-1-answers-D">D)  is/will have worked</label>
                </div>
            </li>

            <li>

                <h3>	5.	When Bilal called me I _______________ that we _______________ fishing soon.</h3>

                <div>
                    <input type="radio" name="question-5-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A) remembered/had gone </label>
                </div>


                <div>
                    <input type="radio" name="question-5-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B) was remebering/would be going </label>
                </div>

                <div>
                    <input type="radio" name="question-5-answers" id="question-1-answers-C" value="C" />
                    <label for="question-1-answers-C">C)  remembered/ would go</label>
                </div>

                <div>
                    <input type="radio" name="question-5-answers" id="question-1-answers-D" value="D" />
                    <label for="question-1-answers-D">D) remember/will be going</label>
                </div>
            </li>



            <li>

                <h3>	6.	_______________ program has been arranged for this special tracking up to this date, but _______________ them are suitable to carry out economically.

                </h3>

                <div>
                    <input type="radio" name="question-6-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A)Many a / none of	 </label>
                </div>


                <div>
                    <input type="radio" name="question-6-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B) Each / all of</label>
                </div>

                <div>
                    <input type="radio" name="question-6-answers" id="question-1-answers-C" value="C" />
                    <label for="question-1-answers-C">C)  Neither / both of</label>
                </div>

                <div>
                    <input type="radio" name="question-6-answers" id="question-1-answers-D" value="D" />
                    <label for="question-1-answers-D">D) Either / few</label>
                </div>

            </li>

            <li>

                <h3>	7.	_______________ questions were asked in the in the interview and those _______________ candidates who were able to answer 70 % of the questions were recruited.</h3>

                <div>
                    <input type="radio" name="question-7-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A) A lot / some	 </label>
                </div>


                <div>
                    <input type="radio" name="question-7-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B) Plenty of / whole</label>
                </div>

                <div>
                    <input type="radio" name="question-7-answers" id="question-1-answers-C" value="C" />
                    <label for="question-1-answers-C">C)  Few / plenty</label>
                </div>

                <div>
                    <input type="radio" name="question-7-answers" id="question-1-answers-D" value="D" />
                    <label for="question-1-answers-D">D) Many / few</label>
                </div>
            </li>


            <li>

                <h3>	8.	You _______________ because you _______________ too fast.</h3>

                <div>
                    <input type="radio" name="question-8-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A)are stopping / were driving </label>
                </div>


                <div>
                    <input type="radio" name="question-8-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B)have been stopped / were driven</label>
                </div>

                <div>
                    <input type="radio" name="question-8-answers" id="question-1-answers-C" value="C" />
                    <label for="question-1-answers-C">C) would stop / had driven</label>
                </div>

                <div>
                    <input type="radio" name="question-8-answers" id="question-1-answers-D" value="D" />
                    <label for="question-1-answers-D">D) were stopped / were driving</label>
                </div>

            </li>

            <li>

                <h3>	9.	Traditionally, this school _______________ by donations and the tuitions students pay.</h3>

                <div>
                    <input type="radio" name="question-9-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A) 	 has supported </label>
                </div>


                <div>
                    <input type="radio" name="question-9-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B) was supporting</label>
                </div>

                <div>
                    <input type="radio" name="question-9-answers" id="question-1-answers-C" value="C" />
                    <label for="question-1-answers-C">C) is supported</label>
                </div>

                <div>
                    <input type="radio" name="question-9-answers" id="question-1-answers-D" value="D" />
                    <label for="question-1-answers-D">D) has been supporting</label>
                </div>
            </li>


            <li>

                <h3>	10.	Selim usually keeps the lights on, but now they are off. He _______________ at home.</h3>

                <div>
                    <input type="radio" name="question-10-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A) 	 didn't have to be</label>
                </div>


                <div>
                    <input type="radio" name="question-10-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B) must not be 		</label>
                </div>

                <div>
                    <input type="radio" name="question-10-answers" id="question-1-answers-C" value="C" />
                    <label for="question-1-answers-C">C) would rather not be</label>
                </div>

                <div>
                    <input type="radio" name="question-10-answers" id="question-1-answers-D" value="D" />
                    <label for="question-1-answers-D">D) isn't allowed to</label>
                </div>

            </li>



                <p>Please read the passage given below and answer the following questions:<br /><br />

                    The world's nuclear plants have accumulated vast stocks of highly radioactive waste. Worldwide,
                    high-level waste is currently stored above ground, and no government has a clear policy on its eventual disposal.
                    While most experts believe that burying the waste is the safest bet in the long term, the problem is finding sites that everyone can agree
                    are geologically stable. Decaying radioactive isotopes release heat. As a result, high-level waste must be constantly cooled; otherwise,
                    it becomes dangerously hot. This is why many experts want to store waste above ground until it has decayed and is cool enough to be stored
                    safely in sealed repositories several hundreds of meters below ground. According to one recent theory, however, waste should be lowered down
                    boreholes drilled to 4 kilometers. The trick is to exploit heat generated by the waste to fuse the surrounding rock and contain any leaking
                    radioactivity.
                </p>

            <li>
                <b>Quetions :</b>
                <h3>	1.	It is clear from the passage that the safe disposal of radioactive waste ------------

                </h3>

                <div>
                    <input type="radio" name="question-11-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A) 	Has been satisfactorily dealt with by scientists in conjunction with governments.</label>
                </div>


                <div>
                    <input type="radio" name="question-11-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B)Is a problem that each government must decide on for its own country.</label>
                </div>

                <div>
                    <input type="radio" name="question-11-answers" id="question-1-answers-C" value="C" />
                    <label for="question-1-answers-C">C) Remains a global problem of great magnitude.</label>
                </div>

                <div>
                    <input type="radio" name="question-11-answers" id="question-1-answers-D" value="D" />
                    <label for="question-1-answers-D">D) Is a problem that has not attracted enough attention..</label>
                </div>
            </li>

            <li>

                <h3>	2.	As it is pointed out in the passage, many exports are of the opinion that radioactive waste -------</h3>

                <div>
                    <input type="radio" name="question-12-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A) 	Should never be stored underground as it can not then be monitored. </label>
                </div>

                <div>
                    <input type="radio" name="question-12-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B) Should not be stored underground while the radioactive isotopes continue to let off substantial amounts of heat.</label>
                </div>

                <div>
                    <input type="radio" name="question-12-answers" id="question-1-answers-C" value="C" />
                    <label for="question-1-answers-C">C) 	Does not require to be cooled when stored above ground.</label>
                </div>

                <div>
                    <input type="radio" name="question-12-answers" id="question-1-answers-D" value="D" />
                    <label for="question-1-answers-D">D) Cannot be safely disposed of anywhere and the problem of what to do with it intensifies as the amount increases.</label>
                </div>

            </li>


            <li>

                <h3>	3.	The passage describes a new method, still only a theoretical one, for the disposal of radioactive waste, ---------------- </h3>

                <div>
                    <input type="radio" name="question-13-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A)Which uses bore holes so that all sites are suitable.</label>
                </div>

                <div>
                    <input type="radio" name="question-13-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B)At a depth considerably less than that normally recommended but the chosen site must meet certain geological requirements.</label>
                </div>

                <div>
                    <input type="radio" name="question-13-answers" id="question-1-answers-C" value="C" />
                    <label for="question-1-answers-C">C) Which, unfortunately, increases the time needed for cooling the waste before final disposal?</label>
                </div>

                <div>
                    <input type="radio" name="question-13-answers" id="question-1-answers-D" value="D" />
                    <label for="question-1-answers-D">D)In which the radioactive isotopes are prevented from releasing heat.</label>
                </div>
            </li>


            <li>

                <h3>
                    4.	Give a suitable title to this passage: _____________________________________________
                </h3>

                <div>
                    <input type="radio" name="question-14-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A) </label>
                </div>

                <div>
                    <input type="radio" name="question-14-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B)  </label>
                </div>

                <div>
                    <input type="radio" name="question-14-answers" id="question-1-answers-C" value="C" />
                    <label for="question-1-answers-C">C)  </label>
                </div>

                <div>
                    <input type="radio" name="question-14-answers" id="question-1-answers-D" value="D" />
                    <label for="question-1-answers-D">D)</label>
                </div>
                <div>
                    <input type="radio" name="question-14-answers" id="question-1-answers-E" value="E" />
                    <label for="question-1-answers-E">E) </label>
                </div>

            </li>


            <li>

                <h3>	5.	What does the word Accumulated mean in this passage?

                </h3>

                <div>
                    <input type="radio" name="question-15-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A) Designed</label>
                </div>

                <div>
                    <input type="radio" name="question-15-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B)Generated</label>
                </div>

                <div>
                    <input type="radio" name="question-15-answers" id="question-1-answers-C" value="C" />
                    <label for="question-1-answers-C">C) Gathered</label>
                </div>

                <div>
                    <input type="radio" name="question-15-answers" id="question-1-answers-D" value="D" />
                    <label for="question-1-answers-D">D)wasted</label>
                </div>
            </li>




        </ol>
        <?php
        echo    "<input type='hidden' value=". $userid ." name = 'userid'>";
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

