<?php

include_once('dbcon/development.db.php');
include_once('./vendor/autoload.php');
//include_once('dbcon/production.db.php');

session_start();


###################################################################################
###################################################################################
#########                                                                  ########
######### User & Admin Logic (Register, SignIn, UpdateData & Authenticate) ########
#########                                                                  ########
###################################################################################
###################################################################################




############################################################################################
############################################################################################
############################################################################################


class User
{

    public $errors;
    public $success;

    // Put The Errors Into An Array

    function __construct ()

    {
        $this->errors  = array();
        $this->success = array();
    }



    ################################
    #### Register Users Method #####
    ################################

    function register(){
        // call these variables with the global keyword to make them available in function

        global $con;

        if (isset($_POST['signup'])){

            // receive all input values from the form.
            // defined below to store value
            $username    =  ($_POST['username']);
            $email       =  ($_POST['email']);
            $password_1  =  ($_POST['password_1']);
            $password_2  =  ($_POST['password_2']);
            $user_type   =  ($_POST['user']);
            $first_name  =  ($_POST['first_name']);
            $last_name   =  ($_POST['last_name']);
            $address     =  ($_POST['address']);
            $position    =  ($_POST['position']);
            $phone       =  ($_POST['phone']);
            $city        =  ($_POST['city']);

            // form validation: ensure that the form is correctly filled
            if (empty($username))
            {
                array_push($this->errors, "Username is required");
            }
            if (empty($email))
            {
                array_push($this->errors, "Email is required");
            }
            if (empty($password_1))
            {
                array_push($this->errors, "Password is required");
            }
            if (empty($first_name))
            {
                array_push($this->errors, "First Name is required");
            }
            if (empty($last_name))
            {
                array_push($this->errors, "Last Name is required");
            }
            if (empty($address))
            {
                array_push($this->errors, "Address is required");
            }
            if (empty($position))
            {
                array_push($this->errors, "Position is required");
            }
            if (empty($phone))
            {
                array_push($this->errors, "Phone is required");
            }
            if ($city)
            {
                array_push($this->errors, "City is required");
            }
            if ($password_1 != $password_2)
            {
                array_push($this->errors, "Password do not match");
            }

            // register user if there are no errors in the form

            if (!($this->errors))
            {
                // hash password before store it into databse
                $password = password_hash($password_1, PASSWORD_DEFAULT);

                $qry = "INSERT INTO users
                ( `username`,
                `email`,
                `user_type`,
                `password`,
                `first_name`,
                `last_name`,
                `adress`,
                `phone`,
                `position`,
                `city`)
                VALUES ('$username',
                '$email',
                '$user_type',
                '$password',
                '$first_name',
                '$last_name',
                '$address',
                '$phone',
                '$position',
                '$city')";

                $sql = $con->prepare($qry);
                $sql->execute();
                // if no problem detected  take user to the index page
                header('location: index.php');
            } else {
                array_push($this->errorsn, "Something We,t Wrong Please Try Again");
            }
        }
    }

    ########################
    ##### LogIn Method #####
    ########################

    function login()
    {
        global $con;



        $username = ($_POST['username']);
	    $password = ($_POST['password']);

    	// make sure form is filled properly
	    if (empty($username))
        {
	    	array_push($this->errors, "Username is required");
	    }
	    if (empty($password))
        {
		    array_push($this->errors, "Password is required");
	    }

	        // attempt login if no errors on form
	    if (!($this->errors))
        {

	    	$querry = "SELECT password FROM users
            WHERE username = '$username' LIMIT 1";
		    $results = $con->prepare($querry);
            $results->execute();

		    if ($results->rowCount() == 1)
            { // user found
			    //verify password

			    $row  = $results->fetch();
			    $hash = $row['password'];

			    if(password_verify($password, $hash))
                {

				    $qry = "SELECT  * FROM users WHERE
                    username = '$username' LIMIT 1";
				    $sql =  $con->prepare($qry);
                    $sql->execute();
				    // check if user is admin or user
				    $logged_in_user = $sql->fetch();

				    if ($logged_in_user['user_type'] == 'admin')
                    {
                        // store user's data into a session to authenticate
					    $_SESSION['user']      = $logged_in_user;
					    $_SESSION['username']  = $logged_in_user['username'];
					    header('location: home.php');
				    }else
                    {

					    $_SESSION['user']      = $logged_in_user;
					    $_SESSION['username']  = $username;

					    header('location: home.php');
				    }
			    }else
                {
			        array_push($this->errors, "Wrong username/password combination");
			    }
		    }else
            {
			    array_push($this->errors, "Something Went Wrong Please Try Again ...");

            }
        }
	}

    ###################################
    #### User Athentication Method ####
    ###################################

    function isLoggedIn()
    {
	    /// if user is logged session.user == user returns true
	    if (isset($_SESSION['user']))
        {
		    return true;
	    }else
        {
		    return false;
	    }
    }

    ####################################
    #### Admin Athentication Method ####
    ####################################


    function isAdmin()
    {
        /// if user is logged session.user == admin returns true
	    if (isset($_SESSION['user']) &&
        $_SESSION['user']['user_type'] == 'admin' )
        {
		    return true;
	    }else
        {
		    return false;
	    }
    }


    #######################
    #### LogOut Method ####
    #######################


    function logOut ()
    {
        if (isset($_GET['logout']))
        {
            session_unset();
            session_destroy();

            unset($_SESSION['user']);

            header("location: index.php");
        }
    }



    ####################################
    #### Update User's Data Method  ####
    ####################################


    function updateUserData ()
    {
        global $con;

        if(isset($_POST['save-dt']))
        {
			$id        = ($_SESSION['user']['id']);
			$username    =  ($_POST['username']);
            $email       =  ($_POST['email']);
            $first_name  =  ($_POST['name']);
            $last_name   =  ($_POST['lname']);
            $address     =  ($_POST['address']);
            $position    =  ($_POST['position']);
            $phone       =  ($_POST['phone']);
            $city        =  ($_POST['city']);

			if (empty($password)&&
            !empty($first_name) &&
            !empty($last_name) &&
            !empty($username) &&
            !empty($email) &&
            !empty($phone) &&
            !empty($adress) &&
            !empty($position))
            {

				$qry      = "UPDATE users SET
                email     = '$email',
                first_name= '$first_name',
                last_name = '$last_name',
                username  = '$username',
                adress    = '$adress',
                phone     = '$phone' ,
                position  = '$position'
                WHERE id  = '$id'";

				$sql=$con->prepare($qry);
                $sql->execute();

				array_push($this->errors, 'Data Have Been Updated Successfully.');

			}
			if (!empty($password) &&
            !empty($first_name) &&
            !empty($last_name) &&
            !empty($username) &&
            !empty($email) &&
            !empty($phone) &&
            !empty($adress) &&
            !empty($position))
            {

				$qry = " UPDATE users SET
                'email'     = '$email',
                'first_name'= '$first_name',
                'last_name' = '$last_name',
                'username'  = '$username',
                'adress'    = '$adress',
                'phone'     ='$phone' ,
                'position'  = '$position'
                'password'  = '$password'
                WHERE id    = '$id' ";
				$sql= $con->prepare($qry);
                $sql->execute();

				array_push($this->errors, 'Data Have Been Updated Successfully.');

			}else
            {
				array_push($this->errors, 'Please Try Again');

			}
		}
    }

    function updateUserRole ()
    {
        global $con;

        $user_type = ($_POST['user_type']);

        if (empty($user_type))
        {
            array_push($this->errors, 'Cannot Update User Role Please Try Again');
        }

        if ($this->errors > 0)
        {
            $qry = " UPDATE users SEt user_type = '$user_type'";
            $res = $con->prepare($qry);
            $res->execute();
            array_push($this->success, 'User Role Updated Successfully ...');
        }
    }


    function deleteUser ()
    {
        global $con;
        $user_id = ($_POST['id']);
        $qry = "DELETE * FROM users WHERE id = '$user_id' LIMIT 1";
        $res = $con->prepare($qry);
        if (!$res->execute())
        {
            array_push($this->errors, "User Couldn't be Deleted");
        }else
        {
            array_push($this->success, "User Have Been Deleted Successfully ");
        }

    }



    #############################
    ## Display Errors Function ##
    #############################

    function display_error()
    {

        // If Errors are more than 0 Then Print The Messages As A loop

        if (count($this->errors) > 0)
        {
            echo '<div style="font:16px red italic ;" class="error">';
                foreach ($this->errors as $error)
                {
                    echo $error .'<br>'. '<br>';
                }
            echo '</div>';
        }
    }

    ##############################
    ## Display Success Function ##
    ##############################


    function displaySucess()
    {

        if (count($this->success) > 0)
        {
            echo '<div style="font:16px red italic ;" class="error">';
                foreach ($this->success as $error)
                {
                    echo $error .'<br>'. '<br>';
                }
            echo '</div>';
        }
    }





}




######################################################################
######################################################################
#########                                                     ########
######### Retrive Data From Website Interface And Store Data  ########
#########    Into Contact Packs And News Letter Databases     ########
#########                                                     ########
######################################################################
######################################################################









#######################################################################################################
#######################################################################################################
#######################################################################################################

class Offers
{


    public $errors;
    public $success;



    function __construct()
    {
        $this->errors  = array();
        $this->success = array();
    }



    function pack()
    {

        global $con;

        if (isset($_POST['demand']))
        {

            $packs  = $_POST['packs'];
            $name   = $_POST['name'];
            $email  = $_POST['email'];
            $phone  = $_POST['phone'];
            $toMail = "contact@saley.ma";
            $subject= " A Client Ordered A Pack !!";
            $message= "SomeOne has Ordered A Pack From Saley WebSite Please Visit Dashboard Immediatly. Thank You In Advance And Hope Your Having A Nice Day.";
            // Build email header
            $header = "From: <". $email .">\r\n";
            $querry= "INSERT INTO offr_dm
            ( pack,
            name,
            email,
            phone )
            VALUES
            ('$packs',
            '$name',
            '$email',
            '$phone')";
            $sql = $con->prepare($querry);
            $sql->execute();


            if ($sql)
            {
                mail($toMail, $subject ,$message, $header);
                array_push($this->success,
                "We Have Recieved Your Request And We will Contact You Soon ");
            } else
            {
                array_push($this->errors, "Something Went Wrong Please Try Again");
            }
        }
    }




    function DisplayPAcks ()
    {
        global $con;

        $sql = "SELECT * FROM pack ";
        $results = $con->prepare($sql);
        if ($results->fetch() > 0)
        {
            while ($this->row = $results->fetch())
            {
                echo ('<tr><td>' .$this->row['id'].
                '</td> <td>'  .$this->row['pack'].
                '</td>  <td>' . $this->row['email'] .
                '</td> <td>' . $this->row['phone'] .'</td> <tr>' );
            }
        }else
        {
            echo "0 result";
        }
    }


    function display_error()
    {

        if (count($this->errors) > 0)
        {
            echo '<div style="font:16px red italic ;" class="error">';
                foreach ($this->errors as $error)
                {
                    echo $error .'<br>'. '<br>';
                }
            echo '</div>';
        }
    }



    function displaySucess()
    {

        if (count($this->success) > 0)
        {
            echo '<div style="font:16px red italic ;" class="error">';
                foreach ($this->success as $error)
                {
                    echo $error .'<br>'. '<br>';
                }
            echo '</div>';
        }
    }

}




class Contact
{
    public $errors;
    public $success;

    function __construct()
    {
        $this->errors  = array();
        $this->success = array();
    }

    function ContactUs()
    {
        global $con;

      	$name    = ($_POST["name"]);
        $email   = ($_POST["email"]);
        $phone   = ($_POST["phone"]);
        $message = ($_POST["message"]);

        // Recipient email
        $toMail  = "contact@saley.ma";
        $subject = "Message Sent From Saley Please Reply Immediatly";

        // Build email header
        $header = "From: " . $name . "<". $email .">\r\n";
        // querry syntax
        $qry = "INSERT INTO mailing
         (name,
          email,
          phone,
          message)
          VALUES
          ('$name',
            '$email',
            '$phone',
            '$message')";
      			 // run and execute querry
         $res = $con->prepare($qry);
      	$res->execute();
        if(!$res)
     		{
     			array_push($this->errors,"Try Again ... ");
     		} else
        {
          mail($toMail,$subject, $message, $header);
          array_push($this->success, "We Have Recieved Your Message And We Will Contact You As Soon As Possible");
        }


    }




    function DisplayMessages ()
    {
        global $con;

        $sql = "SELECT * FROM mailing ";
        $results= $con->prepare($sql);
        $results->execute();
        if ($results->fetch() > 0) {
            while ($this->row = $results->fetch())
            {

                echo ('<tr><td>' .$this->row['id'].
                '</td> <td>'  .$this->row['name'].
                '</td>  <td>' . $this->row['email'] .
                '</td> <td>' . $this->row['phone'] .
                '</td><td>' . $this->row['message'] .'</td> <tr>' );


            }
        }else {
            echo "0 result";
        }

    }



    function display_error()
    {

        if (count($this->errors) > 0)
        {
            echo '<div style="font:16px red italic ;" class="error">';
                foreach ($this->errors as $error)
                {
                    echo $error .'<br>'. '<br>';
                }
            echo '</div>';
        }
    }



    function displaySucess()
    {

        if (count($this->success) > 0)
        {
            echo '<div style="font:16px red italic ;" class="error">';
                foreach ($this->success as $error)
                {
                    echo $error .'<br>'. '<br>';
                }
            echo '</div>';
        }
    }
}






class Newsletter
{


    public $errors;
    public $success;



    function __construct()
    {
        $this->errors  = array();
        $this->success = array();
    }


    function newsLetter ()
    {
        global $con;

        $email = $_POST["email"];
		    $query = "INSERT INTO
  			newsletter (email)
  			VALUES ('$email')";
        $res   = $con->prepare($query);
  			$res->execute();
        if (!$res)
      	{
      		array_push($erro, "Something Went Wrong Please try Again ...") ;
      	}else
      	{
      		array_push($succss, "You Have Been Subscribed Successfully,
  				Welcome To Paradise Inn News Letter") ;
      	}


    }


    function DisplayNewsLetter()
    {
        global $con;

        $sql = "SELECT * FROM newsletter ";
        $results= $con->prepare($sql);
        $results->execute();
        if ($results->fetch() > 0)
        {
            while ($this->row = $results->fetch())
            {

                echo ('<tr><td>'.$this->row['id'].
                '</td><td>' . $this->row['email'] .'</td>');
            }
        }else
        {
            echo "0 result";
        }
    }





    function display_error()
    {

        if (count($this->errors) > 0)
        {
            echo '<div style="font:16px red italic ;" class="error">';
                foreach ($this->errors as $error)
                {
                    echo $error .'<br>'. '<br>';
                }
            echo '</div>';
        }
    }



    function displaySucess()
    {

        if (count($this->success) > 0)
        {
            echo '<div style="font:16px red italic ;" class="error">';
                foreach ($this->success as $error)
                {
                    echo $error .'<br>'. '<br>';
                }
            echo '</div>';
        }
    }


}

class Portfolio
{
    public $errors;
    public $success;



    function __construct()
    {
        $this->errors  = array();
        $this->success = array();
    }


    function in_Portfolio()
    {
        global $con;

        $filename = ($_FILES["uploadfile"]["name"]);
        $tempname = ($_FILES["uploadfile"]["tmp_name"]);
        $folder = "image/portfolio/".$filename;
              // Get all the submitted data from the form
        if (!empty($filename)
        && !empty($tempname))
        {
            $sql = "INSERT INTO image (filename) VALUES ('$filename')";
            $res = $con->prepare($sql);
              // Execute query
            $res->execute();
              // Now let's move the uploaded image into the folder: image
            if (move_uploaded_file($tempname, $folder))
            {
                array_push($this->success, "Image uploaded successfully");
            }else
            {
                array_push($this->errors,"Failed to upload image") ;
            }
        }
    }


}




?>
