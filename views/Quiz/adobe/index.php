<?php
error_reporting(0);
 $userid = $_POST['userid'];

session_start();

if (isset($_SESSION['user_name'])){
    $user_name = $_SESSION['user_name'];

}
else
{

    echo "hello1";
}

    ?>

    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

        <title>Adobe Test</title>

        <link rel="stylesheet" type="text/css" href="css/style.css"/>
    </head>

    <body>
<div id="content" >
    <div id="page-wrap">

        <h1>Teleperformance Test Adobe</h1>

        <h2>Analytical Ability</h2>

        <p>Directions:<br/>
            Each question or a group of questions is based on a passage or set of conditions.
            In answering some of the questions, it may be useful to draw a diagram for each question, select the best
            answer choice given.


        </p>
        <br/>
        <br/>


        <b>Questions 1-4</b>

        <p>Michael attends Saddle Rock School on the 9:00-3:00 session, except on Thursdays when he is dismissed at noon
            so the teachers can conduct special help classes and parent conferences. Michael takes a piano lesson at
            home on Mondays from 3:30-4:30. On Tuesdays he goes to a karate class from 4:00-6:00.
            His art class meets from 4:00-6:00 on Wednesdays. He remains in school after dismissal on Fridays to
            participate in a 90 minute club program.</p>

        <form action="Aptitude_test.php" method="post" id="quiz">

<div class="radio-toolbar">
            <ul>

                <li>

                    <h3> The most convenient afternoon for Michael to do library research is</h3>

                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A"/>
                        <label for="question-1-answers-A">A) Tuesday </label>
                    </div>

                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B"/>
                        <label for="question-1-answers-B">B) Wednesday</label>
                    </div>

                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C"/>
                        <label for="question-1-answers-C">C) Thursday</label>
                    </div>

                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D"/>
                        <label for="question-1-answers-D">D) Friday</label>
                    </div>

                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-E" value="E"/>
                        <label for="question-1-answers-E">E) Monday</label>
                    </div>

                </li>

                <li>

                    <h3> Keeping the same 3:30-4:30 schedule, Michael can conveniently change his piano lesson to
                        which of the following days?</h3>

                    <div>
                        <input type="radio" name="question-2-answers" id="question-1-answers-A" value="A"/>
                        <label for="question-1-answers-A">A) Monday </label>
                    </div>


                    <div>
                        <input type="radio" name="question-2-answers" id="question-1-answers-B" value="B"/>
                        <label for="question-1-answers-B">B) Tuesday </label>
                    </div>

                    <div>
                        <input type="radio" name="question-2-answers" id="question-1-answers-C" value="C"/>
                        <label for="question-1-answers-C">C) Wednesday</label>
                    </div>

                    <div>
                        <input type="radio" name="question-2-answers" id="question-1-answers-D" value="D"/>
                        <label for="question-1-answers-D">D)Thursday</label>
                    </div>

                    <div>
                        <input type="radio" name="question-2-answers" id="question-1-answers-E" value="E"/>
                        <label for="question-1-answers-E">E) Friday</label>
                    </div>

                </li>

                <li>

                    <h3> Michael was invited to join an advanced art class instead of his regular art class. He could
                        accept this advancement without interfering with his other activities, if the class met on which
                        of the following days?</h3>

                    <div>
                        <input type="radio" name="question-3-answers" id="question-1-answers-A" value="A"/>
                        <label for="question-1-answers-A">A) Monday and Wednesdays</label>
                    </div>


                    <div>
                        <input type="radio" name="question-3-answers" id="question-1-answers-B" value="B"/>
                        <label for="question-1-answers-B">B) Tuesday and Wednesdays</label>
                    </div>

                    <div>
                        <input type="radio" name="question-3-answers" id="question-1-answers-C" value="C"/>
                        <label for="question-1-answers-C">C) Wednesdays and Thursdays</label>
                    </div>

                    <div>
                        <input type="radio" name="question-3-answers" id="question-1-answers-D" value="D"/>
                        <label for="question-1-answers-D">D) Thursdays and Fridays</label>
                    </div>

                    <div>
                        <input type="radio" name="question-3-answers" id="question-1-answers-E" value="E"/>
                        <label for="question-1-answers-E">E) Mondays and Thursdays</label>
                    </div>


                </li>

                <li>

                    <h3> Michael is chosen to play for the varsity basketball team. To attend daily 5:00 practice
                        sessions, he will have to suspend which of the following activities</h3>

                    <div>
                        <input type="radio" name="question-4-answers" id="question-1-answers-A" value="A"/>
                        <label for="question-1-answers-A">A) Piano instructions and karate

                        </label>
                    </div>


                    <div>
                        <input type="radio" name="question-4-answers" id="question-1-answers-B" value="B"/>
                        <label for="question-1-answers-B">B) Karate and the club program</label>
                    </div>

                    <div>
                        <input type="radio" name="question-4-answers" id="question-1-answers-C" value="C"/>
                        <label for="question-1-answers-C">C) The art class and the club program</label>
                    </div>

                    <div>
                        <input type="radio" name="question-4-answers" id="question-1-answers-D" value="D"/>
                        <label for="question-1-answers-D">D) Piano instruction and the art class</label>
                    </div>

                    <div>
                        <input type="radio" name="question-4-answers" id="question-1-answers-E" value="E"/>
                        <label for="question-1-answers-E">E) The art class and karate</label>
                    </div>

                </li>

                <li>

                    <h3> If CURD is written as 321184. How would you write MILK? </h3>

                    <div>
                        <input type="radio" name="question-5-answers" id="question-1-answers-A" value="A"/>
                        <label for="question-1-answers-A">A) 14131012 </label>
                    </div>


                    <div>
                        <input type="radio" name="question-5-answers" id="question-1-answers-B" value="B"/>
                        <label for="question-1-answers-B">B) 1312911</label>
                    </div>

                    <div>
                        <input type="radio" name="question-5-answers" id="question-1-answers-C" value="C"/>
                        <label for="question-1-answers-C">C) 1391211</label>
                    </div>

                    <div>
                        <input type="radio" name="question-5-answers" id="question-1-answers-D" value="D"/>
                        <label for="question-1-answers-D">D) 1281110s</label>
                    </div>

                    <div>
                        <input type="radio" name="question-5-answers" id="question-1-answers-E" value="E"/>
                        <label for="question-1-answers-E">E) None of the above</label>
                    </div>

                </li>


                <li>

                    <h3> Which number looks most unlikely to belong to the following set of numbers: 9,23,46,75,116

                    </h3>

                    <div>
                        <input type="radio" name="question-6-answers" id="question-1-answers-A" value="A"/>
                        <label for="question-1-answers-A">A) 9 </label>
                    </div>


                    <div>
                        <input type="radio" name="question-6-answers" id="question-1-answers-B" value="B"/>
                        <label for="question-1-answers-B">B) 23</label>
                    </div>

                    <div>
                        <input type="radio" name="question-6-answers" id="question-1-answers-C" value="C"/>
                        <label for="question-1-answers-C">C) 46</label>
                    </div>

                    <div>
                        <input type="radio" name="question-6-answers" id="question-1-answers-D" value="D"/>
                        <label for="question-1-answers-D">D) 75</label>
                    </div>

                    <div>
                        <input type="radio" name="question-6-answers" id="question-1-answers-E" value="E"/>
                        <label for="question-1-answers-E">E) 116</label>
                    </div>

                </li>

                <li>

                    <h3> If you rearrange the letters AURIDAM to form the name of a City. What would be the first
                        letter?

                    </h3>

                    <div>
                        <input type="radio" name="question-7-answers" id="question-1-answers-A" value="A"/>
                        <label for="question-1-answers-A">A) A </label>
                    </div>


                    <div>
                        <input type="radio" name="question-7-answers" id="question-1-answers-B" value="B"/>
                        <label for="question-1-answers-B">B) R</label>
                    </div>

                    <div>
                        <input type="radio" name="question-7-answers" id="question-1-answers-C" value="C"/>
                        <label for="question-1-answers-C">C) D</label>
                    </div>

                    <div>
                        <input type="radio" name="question-7-answers" id="question-1-answers-D" value="D"/>
                        <label for="question-1-answers-D">D) M</label>
                    </div>

                    <div>
                        <input type="radio" name="question-7-answers" id="question-1-answers-E" value="E"/>
                        <label for="question-1-answers-E">E) I</label>
                    </div>

                </li>

                <p>Questions 8-12 <br/>
                    The Berkley-Sothenay gallery displays seven paintings one each by Degas, Ernst, Fragonard, Greuze,
                    Hartley, Ingres, and Johns. Each has been valued by the gallery&#8217;s curator.<br/>
                    - The value of the Johns is three times that of the Ingres.<br/>
                    - The Greuze has the lowest valuation of any of the paintings<br/>
                    - The Fragonard and the Degas are valued at the same amount<br/>
                    - The value of the Ernst is as much as that of the Johns and the Ingres together<br/>
                    - The value of the Hartley is as much as that of the Fragonard, the Ernst and the Johns
                    together<br/>
                    - The value of the Degas is as much as that of the Johns and the Ernst together.<br/>
                </p><br/>

                <li>

                    <h3> Which correctly lists six of the paintings in order of increasing value?</h3>

                    <div>
                        <input type="radio" name="question-8-answers" id="question-1-answers-A" value="A"/>
                        <label for="question-1-answers-A">A) Greuze, Ernst, Fragonard, Johns, Ingres, Hartley </label>
                    </div>


                    <div>
                        <input type="radio" name="question-8-answers" id="question-1-answers-B" value="B"/>
                        <label for="question-1-answers-B">B) Greuze, Johns, Degas, Ernst, Fragonard, Hartley</label>
                    </div>

                    <div>
                        <input type="radio" name="question-8-answers" id="question-1-answers-C" value="C"/>
                        <label for="question-1-answers-C">C) Greuze, Ernst, Johns, Degas, Fragonard, Hartley</label>
                    </div>

                    <div>
                        <input type="radio" name="question-8-answers" id="question-1-answers-D" value="D"/>
                        <label for="question-1-answers-D">D) Greuze, Ingres, Johns, Degas, Ernst, Hartley</label>
                    </div>

                </li>

                <li>

                    <h3> The value of the Degas is</h3>

                    <div>
                        <input type="radio" name="question-9-answers" id="question-1-answers-A" value="A"/>
                        <label for="question-1-answers-A">A) Twice the value of the Johns </label>
                    </div>


                    <div>
                        <input type="radio" name="question-9-answers" id="question-1-answers-B" value="B"/>
                        <label for="question-1-answers-B">B) Twice the value of the Ernst</label>
                    </div>

                    <div>
                        <input type="radio" name="question-9-answers" id="question-1-answers-C" value="C"/>
                        <label for="question-1-answers-C">C) Three times the value of the Johns, less the value of the
                            Ingres</label>
                    </div>

                    <div>
                        <input type="radio" name="question-9-answers" id="question-1-answers-D" value="D"/>
                        <label for="question-1-answers-D">D) Six times the value of the Ingres</label>
                    </div>
                    <div>
                        <input type="radio" name="question-9-answers" id="question-1-answers-E" value="E"/>
                        <label for="question-1-answers-E">E) Half the value of the Hartley</label>
                    </div>

                </li>


                <li>

                    <h3> A buyer who decided not to buy the Hartley could buy for the same money<br/>
                        I. the Degas, the Ingres, and the Fragonard<br/>
                        II. the Ernst, the Johns, and the Degas<br/>
                        III. the Ingres, the Ernst, and the Johns
                    </h3>

                    <div>
                        <input type="radio" name="question-10-answers" id="question-1-answers-A" value="A"/>
                        <label for="question-1-answers-A">A) I only </label>
                    </div>


                    <div>
                        <input type="radio" name="question-10-answers" id="question-1-answers-B" value="B"/>
                        <label for="question-1-answers-B">B) II only</label>
                    </div>

                    <div>
                        <input type="radio" name="question-10-answers" id="question-1-answers-C" value="C"/>
                        <label for="question-1-answers-C">C) I and II only</label>
                    </div>

                    <div>
                        <input type="radio" name="question-10-answers" id="question-1-answers-D" value="D"/>
                        <label for="question-1-answers-D">D) I and III only</label>
                    </div>
                    <div>
                        <input type="radio" name="question-10-answers" id="question-1-answers-E" value="E"/>
                        <label for="question-1-answers-E">E) I, II, and III</label>
                    </div>

                </li>

                <li>

                    <h3>  If the Ernst and the Ingres together are valued at ten times the value of the Greuze,
                        the Hartley is valued at how many times the value of the Greuze?
                    </h3>

                    <div>
                        <input type="radio" name="question-11-answers" id="question-1-answers-A" value="A"/>
                        <label for="question-1-answers-A">A) 12</label>
                    </div>


                    <div>
                        <input type="radio" name="question-11-answers" id="question-1-answers-B" value="B"/>
                        <label for="question-1-answers-B">B) 14</label>
                    </div>

                    <div>
                        <input type="radio" name="question-11-answers" id="question-1-answers-C" value="C"/>
                        <label for="question-1-answers-C">C) 21</label>
                    </div>

                    <div>
                        <input type="radio" name="question-11-answers" id="question-1-answers-D" value="D"/>
                        <label for="question-1-answers-D">D) 28</label>
                    </div>
                    <div>
                        <input type="radio" name="question-11-answers" id="question-1-answers-E" value="E"/>
                        <label for="question-1-answers-E">E) 49</label>
                    </div>

                </li>

                <li>

                    <h3> The paintings are bought by seven rich collectors who then trade with each other.
                        Which trade represents an exchange of even value?</h3>

                    <div>
                        <input type="radio" name="question-12-answers" id="question-1-answers-A" value="A"/>
                        <label for="question-1-answers-A">A) The Hartley for the Degas, the Ernst, and the
                            Ingres </label>
                    </div>

                    <div>
                        <input type="radio" name="question-12-answers" id="question-1-answers-B" value="B"/>
                        <label for="question-1-answers-B">B) The Hartley and the Ernst for all the others except the
                            Greuze</label>
                    </div>

                    <div>
                        <input type="radio" name="question-12-answers" id="question-1-answers-C" value="C"/>
                        <label for="question-1-answers-C">C) The Degas and the Fragonard for the Hartley and the
                            Ingres</label>
                    </div>

                    <div>
                        <input type="radio" name="question-12-answers" id="question-1-answers-D" value="D"/>
                        <label for="question-1-answers-D">D) The Ingres,the Johns, the Ernst, and the Fragonard for the
                            Hartley</label>
                    </div>
                    <div>
                        <input type="radio" name="question-12-answers" id="question-1-answers-E" value="E"/>
                        <label for="question-1-answers-E">E) The Johns and the Ernst for the Degas and the
                            Ingres</label>
                    </div>

                </li>

                <p>Questions 13-15<br/>


                    1) All P and X are N <br/>
                    2) All N except P are X <br/>
                    3) No P are M <br/>
                    4) No R are N <br/>
                    5) All M are either X or R <br/>
                    6) No Q are X <br/>

                </p>

                <li>

                    <h3> Which of the following statements must be true if the above six statements are true?
                        i. No R are P <br/>
                        ii. Some X are P <br/>
                        iii. Some X are M <br/>
                    </h3>

                    <div>
                        <input type="radio" name="question-13-answers" id="question-1-answers-A" value="A"/>
                        <label for="question-1-answers-A">A) I only</label>
                    </div>

                    <div>
                        <input type="radio" name="question-13-answers" id="question-1-answers-B" value="B"/>
                        <label for="question-1-answers-B">B)I and II only</label>
                    </div>

                    <div>
                        <input type="radio" name="question-13-answers" id="question-1-answers-C" value="C"/>
                        <label for="question-1-answers-C">C) I and III only</label>
                    </div>

                    <div>
                        <input type="radio" name="question-13-answers" id="question-1-answers-D" value="D"/>
                        <label for="question-1-answers-D">D)I , II and III</label>
                    </div>
                    <div>
                        <input type="radio" name="question-13-answers" id="question-1-answers-E" value="E"/>
                        <label for="question-1-answers-E">E) Neither I,II , nor III</label>
                    </div>

                </li>


                <li>

                    <h3> Which of the following must be false given the conditions as stated?</h3>

                    <div>
                        <input type="radio" name="question-14-answers" id="question-1-answers-A" value="A"/>
                        <label for="question-1-answers-A">A) No Q are P</label>
                    </div>

                    <div>
                        <input type="radio" name="question-14-answers" id="question-1-answers-B" value="B"/>
                        <label for="question-1-answers-B">B)Some Q are neither N nor R </label>
                    </div>

                    <div>
                        <input type="radio" name="question-14-answers" id="question-1-answers-C" value="C"/>
                        <label for="question-1-answers-C">C) Some R are X </label>
                    </div>

                    <div>
                        <input type="radio" name="question-14-answers" id="question-1-answers-D" value="D"/>
                        <label for="question-1-answers-D">D)All R are M</label>
                    </div>
                    <div>
                        <input type="radio" name="question-14-answers" id="question-1-answers-E" value="E"/>
                        <label for="question-1-answers-E">E) Some X are not M</label>
                    </div>

                </li>


                <li>

                    <h3> Which of the numbered statements can logically be deduced from one or more of the above
                        statements</h3>

                    <div>
                        <input type="radio" name="question-15-answers" id="question-1-answers-A" value="A"/>
                        <label for="question-1-answers-A">A) 2</label>
                    </div>

                    <div>
                        <input type="radio" name="question-15-answers" id="question-1-answers-B" value="B"/>
                        <label for="question-1-answers-B">B)3 </label>
                    </div>

                    <div>
                        <input type="radio" name="question-15-answers" id="question-1-answers-C" value="C"/>
                        <label for="question-1-answers-C">C) 4 </label>
                    </div>

                    <div>
                        <input type="radio" name="question-15-answers" id="question-1-answers-D" value="D"/>
                        <label for="question-1-answers-D">D)5</label>
                    </div>
                    <div>
                        <input type="radio" name="question-15-answers" id="question-1-answers-E" value="E"/>
                        <label for="question-1-answers-E">E) 6</label>
                    </div>

                </li>


            </ul>
            <?php
            echo "<input type='hidden' value='". $userid . "' name = 'userid'>";

            ?>

            <script src="http://mrrio.github.io/jsPDF/dist/jspdf.debug.js"></script>

            <script type="text/javascript" src="https://mrrio.github.io/jsPDF/examples/js/jquery/jquery-1.7.1.min.js"></script>
            <script type="text/javascript" src="https://mrrio.github.io/jsPDF/examples/js/jquery/jquery-ui-1.8.17.custom.min.js"></script>
            <script type="text/javascript" src="https://mrrio.github.io/jsPDF/examples/js/basic.js"></script>


            <script>
                $(function ()
                {
                    var doc = new jsPDF();
                    var specialElementHandlers = {
                        '#editor': function (element, renderer) {
                            return true;
                        }
                    };
                    $('#cmd').click(function () {
                        doc.fromHTML($('#content').html(), 15, 15, {
                            'width': 170,
                            'elementHandlers': specialElementHandlers
                        });
                        doc.save('sample-file.pdf');
                    });
                });
            </script>

            <input type="submit" id="cmd" value="Next Test"  style="
    margin-bottom: 7%;-:center;
    background-color: teal;
    font-size: 200%;"/>
</div>
        </form>


    </div>

</div>
    </body>

    </html>


