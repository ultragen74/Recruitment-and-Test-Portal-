<?php

/**
 * Class registration
 * handles the user registration
 */
error_reporting(0);
class Registration
{
    /**
     * @var object $db_connection The database connection
     */
    protected $db_connection = null;
    /**
     * @var array $errors Collection of error messages
     */
    public $errors = array();
    /**
     * @var array $messages Collection of success / neutral messages
     */
    public $messages = array();

    /**
     * the function "__construct()" automatically starts whenever an object of this class is created,
     * you know, when you do "$registration = new Registration();"
     */
    public function __construct()
    {
        if (isset($_POST["register"])) {
            $this->registerNewUser();
        }
    }

    /**
     * handles the entire registration process. checks all error possibilities
     * and creates a new user in the database if everything is fine  year--
     */
    private function registerNewUser()
    {

      $dob=date('Y-m-d',strtotime($_POST['year'].'-'.$_POST['month'].'-'.$_POST['day']));






        if (empty($_POST['user_name'])) {
            $this->errors[] = "Empty Username";
        } elseif (empty($_POST['user_password_new']) || empty($_POST['user_password_repeat'])) {
            $this->errors[] = "Empty Password";
        } elseif ($_POST['user_password_new'] !== $_POST['user_password_repeat']) {
            $this->errors[] = "Password and password repeat are not the same";
        } elseif (strlen($_POST['user_password_new']) < 6) {
            $this->errors[] = "Password has a minimum length of 6 characters";
        } elseif (strlen($_POST['user_name']) > 64 || strlen($_POST['user_name']) < 2) {
            $this->errors[] = "Username cannot be shorter than 2 or longer than 64 characters";
        } elseif (!preg_match('/^[a-z\d]{2,64}$/i', $_POST['user_name'])) {
            $this->errors[] = "Username does not fit the name scheme: only a-Z and numbers are allowed, 2 to 64 characters";
        } elseif (empty($_POST['user_email'])) {
            $this->errors[] = "Email cannot be empty";
        } elseif (strlen($_POST['user_email']) > 64) {
            $this->errors[] = "Email cannot be longer than 64 characters";
        } elseif (!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)) {
            $this->errors[] = "Your email address is not in a valid email format";
        }
            
          elseif (empty($_POST['Technology'])) {
            $this->errors[] = "Chose the appropriate technology";
        }
          elseif (empty($_POST['Type'])) {
            $this->errors[] = "Chose the appropriate Type";
        }
          elseif (empty($_POST['Location'])) {
            $this->errors[] = "Chose the appropriate Location";
        }
         
          elseif (empty($_POST['Full_name'])) {
            $this->errors[] = "Full name can not be empty";
        }
           elseif (empty($_POST['Father_name'])) {
            $this->errors[] = "Father name can not be empty";
        }
           elseif (empty($_POST['Gender'])) {
            $this->errors[] = "Father name can not be empty";
        }
           elseif (empty($_POST['Marital_status'])) {
            $this->errors[] = "Father name can not be empty";
        }
           /*
             elseif (empty($_POST['dob'])) {
            $this->errors[] = "Father name can not be empty";
        } */
           elseif (empty($_POST['Contact_no'])) {
            $this->errors[] = "Father name can not be empty";
        }
          elseif (empty($_POST['Address'])) {
            $this->errors[] = "Father name can not be empty";
        }
          elseif (empty($_POST['City'])) {
            $this->errors[] = "Father name can not be empty";
        }
          elseif (empty($_POST['State'])) {
            $this->errors[] = "Father name can not be empty";
        } 
          elseif (empty($_POST['Qualification'])) {
            $this->errors[] = "Father name can not be empty";
        } 
          elseif (empty($_POST['Course'])) {
            $this->errors[] = "Father name can not be empty";
        } 
          elseif (empty($_POST['Percentage'])) {
            $this->errors[] = "Father name can not be empty";
        } 
          elseif (empty($_POST['University'])) {
            $this->errors[] = "Father name can not be empty";
        } 
          elseif (empty($_POST['Passing_year'])) {
            $this->errors[] = "Father name can not be empty";
        } 
          elseif (empty($_POST['Study'])) {
            $this->errors[] = "Father name can not be empty";
        } 
            /*
          elseif (empty($_POST['Rname'])) {
            $this->errors[] = "Father name can not be empty";
        } 
          elseif (empty($_POST['Rcompany'])) {
            $this->errors[] = "Father name can not be empty";
        } 
          elseif (empty($_POST['Designation'])) {
            $this->errors[] = "Father name can not be empty";
        } 
          elseif (empty($_POST['Rcontact_no'])) {
            $this->errors[] = "Father name can not be empty";
        }*/
          elseif (empty($_POST['Sourcee'])) {
            $this->errors[] = "Father name can not be empty";
        }
          elseif (empty($_POST['Process'])) {
            $this->errors[] = "Father name can not be empty";
        }

                elseif (!empty($_POST['user_name'])
            && strlen($_POST['user_name']) <= 64
            && strlen($_POST['user_name']) >= 2
            && preg_match('/^[a-z\d]{2,64}$/i', $_POST['user_name'])
            && !empty($_POST['user_email'])
            && strlen($_POST['user_email']) <= 64
            && filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)
            && !empty($_POST['user_password_new'])
            && !empty($_POST['user_password_repeat'])
            && ($_POST['user_password_new'] === $_POST['user_password_repeat'])
            && !empty($_POST['Technology'])
            && !empty($_POST['Type'])
            && !empty($_POST['Location'])
            && !empty($_POST['Father_name'])
            && !empty($_POST['Full_name'])
            && !empty($_POST['Gender'])
            && !empty($_POST['Marital_status'])

            && !empty($_POST['Contact_no'])
            && !empty($_POST['Address'])
            && !empty($_POST['City'])
            && !empty($_POST['State'])
            && !empty($_POST['Qualification'])
            && !empty($_POST['Course'])
            && !empty($_POST['Percentage'])
            && !empty($_POST['University'])
            && !empty($_POST['Passing_year'])
            && !empty($_POST['Study'])
            /*&& !empty($_POST['Rname'])
            && !empty($_POST['Rcompany'])
            && !empty($_POST['Designation'])
            && !empty($_POST['Rcontact_no'])
            && !empty($_POST['Sourcee']) */
             && !empty($_POST['Process'])

        )   

         {
            // create a database connection
            $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

            // change character set to utf8 and check it
            if (!$this->db_connection->set_charset("utf8")) {
                $this->errors[] = $this->db_connection->error;
            }

            // if no connection errors (= working database connection)
            if (!$this->db_connection->connect_errno) {

                // escaping, additionally removing everything that could be (html/javascript-) code
                $user_name = $this->db_connection->real_escape_string(strip_tags($_POST['user_name'], ENT_QUOTES));
                $user_email = $this->db_connection->real_escape_string(strip_tags($_POST['user_email'], ENT_QUOTES));

                $Technology = $this->db_connection->real_escape_string(strip_tags($_POST['Technology'], ENT_QUOTES));
                $Type = $this->db_connection->real_escape_string(strip_tags($_POST['Type'], ENT_QUOTES));
                $Location = $this->db_connection->real_escape_string(strip_tags($_POST['Location'], ENT_QUOTES));
                $Full_name = $this->db_connection->real_escape_string(strip_tags($_POST['Full_name'], ENT_QUOTES));
                $Father_name = $this->db_connection->real_escape_string(strip_tags($_POST['Father_name'], ENT_QUOTES));
                $Gender = $this->db_connection->real_escape_string(strip_tags($_POST['Gender'], ENT_QUOTES));
                $Marital_status = $this->db_connection->real_escape_string(strip_tags($_POST['Marital_status'], ENT_QUOTES));

                $Contact_no = $this->db_connection->real_escape_string(strip_tags($_POST['Contact_no'], ENT_QUOTES));
                $Address = $this->db_connection->real_escape_string(strip_tags($_POST['Address'], ENT_QUOTES));
                $City = $this->db_connection->real_escape_string(strip_tags($_POST['City'], ENT_QUOTES));
                $State = $this->db_connection->real_escape_string(strip_tags($_POST['State'], ENT_QUOTES));
                $Qualification = $this->db_connection->real_escape_string(strip_tags($_POST['Qualification'], ENT_QUOTES));
                $Course = $this->db_connection->real_escape_string(strip_tags($_POST['Course'], ENT_QUOTES));
                $Percentage = $this->db_connection->real_escape_string(strip_tags($_POST['Percentage'], ENT_QUOTES));
                $University = $this->db_connection->real_escape_string(strip_tags($_POST['University'], ENT_QUOTES));
                $Passing_year = $this->db_connection->real_escape_string(strip_tags($_POST['Passing_year'], ENT_QUOTES));
                $Study = $this->db_connection->real_escape_string(strip_tags($_POST['Study'], ENT_QUOTES));
                $Rname = $this->db_connection->real_escape_string(strip_tags($_POST['Rname'], ENT_QUOTES));
                $Rcompany = $this->db_connection->real_escape_string(strip_tags($_POST['Rcompany'], ENT_QUOTES));
                $Designation = $this->db_connection->real_escape_string(strip_tags($_POST['Designation'], ENT_QUOTES));
                $Rcontact_no = $this->db_connection->real_escape_string(strip_tags($_POST['Rcontact_no'], ENT_QUOTES));
                $Sourcee = $this->db_connection->real_escape_string(strip_tags($_POST['Sourcee'], ENT_QUOTES));
                $Process = $this->db_connection->real_escape_string(strip_tags($_POST['Process'], ENT_QUOTES));
                $dob = $this->db_connection->real_escape_string(strip_tags($dob, ENT_QUOTES));


                $Paddress = $this->db_connection->real_escape_string(strip_tags($_POST['Paddress'], ENT_QUOTES));
                $Pstate = $this->db_connection->real_escape_string(strip_tags($_POST['Pstate'], ENT_QUOTES));
                $Pcity = $this->db_connection->real_escape_string(strip_tags($_POST['Pcity'], ENT_QUOTES));
                $Vender_name = $this->db_connection->real_escape_string(strip_tags($_POST['Vender_name'], ENT_QUOTES));
                $Student_code = $this->db_connection->real_escape_string(strip_tags($_POST['Student_code'], ENT_QUOTES));
                $Exp_year = $this->db_connection->real_escape_string(strip_tags($_POST['Exp_year'], ENT_QUOTES));

                $user_password = $_POST['user_password_new'];

                // crypt the user's password with PHP 5.5's password_hash() function, results in a 60 character
                // hash string. the PASSWORD_DEFAULT constant is defined by the PHP 5.5, or if you are using
                // PHP 5.3/5.4, by the password hashing compatibility library
                $user_password_hash = password_hash($user_password, PASSWORD_DEFAULT);


              //  $sql_check = "SELECT * FROM users WHERE Full_name = '" . $Full_name . "' AND Father_name = '" . $Father_name . "';";
                //$query_check_Fullname = $this->db_connection->query($sql_check);


                    // check if user or email address already exists
                    $sql = "SELECT * FROM users WHERE user_name = '" . $user_name . "' OR user_email = '" . $user_email . "';";
                $query_check_user_name = $this->db_connection->query($sql);

                if ($query_check_user_name->num_rows == 1) {
                    $this->errors[] = "Sorry, that username / email address is already taken.";


                } else {


                    // write new user's data into database
                    $sql = "INSERT INTO users (`user_name`, `user_password_hash`, `user_email`, `Technology`,`Type`,`Location`,`Full_name`,`Father_name`,`Gender`,`Marital_status`,`dob`,`Contact_no`,`Address`,`City`,`State`,`Qualification`,`Course`,`Percentage`,`University`,`Passing_year`,`Study`,`Rname`,`Rcompany`,`Designation`,`Rcontact_no`,`Sourcee`,`Process`,`Paddress`,`Pstate`,`Pcity`,`Vender_name`,`Student_code`,`Exp_year`)
                            VALUES('" . $user_name . "', '" . $user_password_hash . "', '" . $user_email . "', '" . $Technology . "', '" . $Type . "', '" . $Location . "', '" . $Full_name . "', '" . $Father_name . "', '" . $Gender . "', '" . $Marital_status . "', '" . $dob . "', '" . $Contact_no . "', '" . $Address . "', '" . $City . "', '" . $State . "', '" . $Qualification . "', '" . $Course . "', '" . $Percentage . "', '" . $University . "', '" . $Passing_year . "', '" . $Study . "', '" . $Rname . "', '" . $Rcompany . "', '" . $Designation . "', '" . $Rcontact_no . "', '" . $Sourcee . "', '" . $Process . "', '" . $Paddress . "', '" . $Pstate . "', '" . $Pcity . "', '" . $Vender_name . "', '" . $Student_code . "', '" . $Exp_year . "');";
                    $query_new_user_insert = $this->db_connection->query($sql);

                    // if user has been added successfully
                    if ($query_new_user_insert) {
                        $this->messages[] = "Your account has been created successfully. You can now log in.";
                    } else {
                        $this->errors[] = "Sorry, your registration failed. Please go back and try again.";
                    }

                }




            } else {
                $this->errors[] = "Sorry, no database connection.";
            }
        } else {
            $this->errors[] = "An unknown error occurred.";
        }
    }
}
