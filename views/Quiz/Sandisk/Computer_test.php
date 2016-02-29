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







$userid = $_POST['userid'];

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
    <h2>TECHNICAL TEST</h2>

    <br />
    <br />


    <b>Chose the right answer</b>

    <form action="Math_test.php" method="post" id="quiz">




        <ol>

            <li>

                <h3>
                    1.	How to check the Computer&#8217;s version of Operating System?</h3>

                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A)  Access System Properties by Right-clicking &quot;My Computer&quot; then Left-clicking Properties </label>
                </div>

                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B)Right-clicking &quot;My Computer&quot; then clicking &quot;Manage&quot;</label>
                </div>
                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                    <label for="question-1-answers-B">C) Left-clicking &quot;Start&quot; Button, then &quot;Run&quot; & typing &quot;winver&quot; then clicking OK</label>
                </div>
                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                    <label for="question-1-answers-B">D) Right-clicking &quot;My Computer&quot; then clicking &quot;Properties&quot;, then &quot;Device Manager&quot;</label>
                </div>
                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-E" value="E" />
                    <label for="question-1-answers-B">E) A & C</label>
                </div>
                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-F" value="F" />
                    <label for="question-1-answers-F">F) B & D</label>
                </div>
                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-G" value="G" />
                    <label for="question-1-answers-G">B) None of above </label>
                </div>


            </li>

            <li>

                <h3>2.	What does USB stands for?

                    Universal Sequential Bus
                    Universal Series Bus
                    Universal Serial Bus
                    Universal Serial-line Bus
                    None of the above
                </h3>

                <div>
                    <input type="radio" name="question-2-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A) Universal Sequential Bus</label>
                </div>


                <div>
                    <input type="radio" name="question-2-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B) Universal Series Bus </label>
                </div>

                <div>
                    <input type="radio" name="question-2-answers" id="question-1-answers-C" value="C" />
                    <label for="question-1-answers-C">C) Universal Serial Bus </label>
                </div>
                <div>
                    <input type="radio" name="question-2-answers" id="question-1-answers-D" value="D" />
                    <label for="question-1-answers-D">D) Universal Serial-line Bus </label>
                </div>
            </li>

            <li>

                <h3>3.	What is Data Encryption?</h3>

                <div>
                    <input type="radio" name="question-3-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A) The translation of data into a secret code for data security</label>
                </div>


                <div>
                    <input type="radio" name="question-3-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B)The compression of data to save storage space</label>
                </div>

                <div>
                    <input type="radio" name="question-3-answers" id="question-1-answers-C" value="C" />
                    <label for="question-1-answers-C">C) The modification of data to by means of changing the extension name</label>
                </div>

                <div>
                    <input type="radio" name="question-3-answers" id="question-1-answers-D" value="D" />
                    <label for="question-1-answers-D">D) Technology used to back up data</label>
                </div>

            </li>

            <li>

                <h3>4	4.	How to copy files on a Windows OS?</h3>

                <div>
                    <input type="radio" name="question-4-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A) 	 Drag the file from source folder to target folder     </label>
                </div>


                <div>
                    <input type="radio" name="question-4-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B)Drag the file to the Recycle Bin</label>
                </div>

                <div>
                    <input type="radio" name="question-4-answers" id="question-1-answers-C" value="C" />
                    <label for="question-1-answers-C">C)Drag the file from the target folder to the source folder</label>
                </div>

                <div>
                    <input type="radio" name="question-4-answers" id="question-1-answers-D" value="D" />
                    <label for="question-1-answers-D">D)     A & C</label>
                </div>

            </li>

            <li>

                <h3>	5.	Where is the Windows folder usually located?</h3>

                <div>
                    <input type="radio" name="question-5-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A)     C: Drive</label>
                </div>


                <div>
                    <input type="radio" name="question-5-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B)   B: Drive</label>
                </div>

                <div>
                    <input type="radio" name="question-5-answers" id="question-1-answers-C" value="C" />
                    <label for="question-1-answers-C">C)    Floppy Drive</label>
                </div>

                <div>
                    <input type="radio" name="question-5-answers" id="question-1-answers-D" value="D" />
                    <label for="question-1-answers-D">D)   A & B</label>
                </div>

            </li>



            <li>

                <h3>
                    6.	What type of cable is needed to connect a Hard Drive to the Motherboard?
                </h3>

                <div>
                    <input type="radio" name="question-6-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A)   IDE Cable</label>
                </div>


                <div>
                    <input type="radio" name="question-6-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B)   ATI Cable</label>
                </div>

                <div>
                    <input type="radio" name="question-6-answers" id="question-1-answers-C" value="C" />
                    <label for="question-1-answers-C">C)     ITE Cable</label>
                </div>

                <div>
                    <input type="radio" name="question-6-answers" id="question-1-answers-D" value="D" />
                    <label for="question-1-answers-D">D)    USB Cable</label>
                </div>


            </li>

            <li>

                <h3>
                    7.	Quick Format also means:</h3>

                <div>
                    <input type="radio" name="question-7-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A)  Deleting the files from the drive</label>
                </div>


                <div>
                    <input type="radio" name="question-7-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B)  Scanning the files from the drive</label>
                </div>

                <div>
                    <input type="radio" name="question-7-answers" id="question-1-answers-C" value="C" />
                    <label for="question-1-answers-C">C)   Replacing the files from the drive</label>
                </div>

                <div>
                    <input type="radio" name="question-7-answers" id="question-1-answers-D" value="D" />
                    <label for="question-1-answers-D">D)Editing the files from the drive</label>
                </div>

                <div>
                    <input type="radio" name="question-7-answers" id="question-1-answers-E" value="E" />
                    <label for="question-1-answers-E">E)  None of the Above</label>
                </div>

            </li>

            <li>

                <h3>8.8.	FAT stands for</h3>

                <div>
                    <input type="radio" name="question-8-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A)   File Attributes Table</label>
                </div>


                <div>
                    <input type="radio" name="question-8-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B) File Allocation Table</label>
                </div>
                <div>
                    <input type="radio" name="question-8-answers" id="question-1-answers-C" value="C" />
                    <label for="question-1-answers-C">C) File Association Table</label>
                </div>
                <div>
                    <input type="radio" name="question-8-answers" id="question-1-answers-D" value="D" />
                    <label for="question-1-answers-D">D) File Acquisition Table</label>
                </div>
            </li>

            <li>

                <h3>	9.	If one Hard Drive is divided into 4 partitions with 1 CD ROM Drive included, how many Drive Letters (total) will it consume?

                    2
                    4
                    3
                    5
                    None
                </h3>

                <div>
                    <input type="radio" name="question-9-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A) 	2</label>
                </div>


                <div>
                    <input type="radio" name="question-9-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B) 4</label>
                </div>

                <div>
                    <input type="radio" name="question-9-answers" id="question-1-answers-C" value="C" />
                    <label for="question-1-answers-C">C) 3</label>
                </div>

                <div>
                    <input type="radio" name="question-9-answers" id="question-1-answers-D" value="D" />
                    <label for="question-1-answers-D">D) 5</label>
                </div>

            </li>


            <li>

                <h3>10.	Which of the following application software can we use to compress & decompress file or folder?


                </h3>

                <div>
                    <input type="radio" name="question-10-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A) WinZip </label>
                </div>


                <div>
                    <input type="radio" name="question-10-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B) WinSock</label>
                </div>
                <div>
                    <input type="radio" name="question-10-answers" id="question-1-answers-C" value="C" />
                    <label for="question-1-answers-C">C) WinME</label>
                </div>
                <div>
                    <input type="radio" name="question-10-answers" id="question-1-answers-D" value="D" />
                    <label for="question-1-answers-D">D) WinCom</label>
                </div>
            </li>
        </ol>
        <?php
        echo    "<input type='hidden' value=". $_POST['userid'] ." name = 'userid'>";
        echo    "<input type='hidden' value=".  $totalCorrect ." name = 'tc'>";
        ?>

        <input type="submit" value="Next Test" style="
    margin-bottom: 7%;-:center;
    background-color: teal;
    font-size: 200%;"  />

    </form>


</div>


</body>

</html>