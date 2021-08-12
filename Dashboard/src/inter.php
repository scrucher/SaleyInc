<?php 


include_once('dbcon/db.php');



#############################################
#############################################
#########                            ########
#########    USER RULES AND TASKS    ########  
#########                            ########
#############################################
#############################################







#############################################################################################
#############################################################################################
#############################################################################################





class About 
{
    public $errors;
    public $success;



    function __construct()
    {
        $this->errors  = array();
        $this->success = array();
    }



    function updateAboutP()
    {

        global $con;
        
        if(isset($_POST['about-btn']))
        {
            // retrieve data from request

            $paragraph1 = ($_POST['p1']);
            $paragraph2 = ($_POST['p2']);
            $paragraph3 = ($_POST['p3']);

            // handle Empty fields

            if (!empty($paragraph1) 
            && !empty($paragraph2)
            && !empty($paragraph3))
            {
                $qry = " INSERT INTO aboutp 
                ( paragraph1, paragraph2, paragraph3 ) 
                VALUES ('$paragraph1', '$paragraph2', '$paragraph3') ";
                $res = $con->prepare($qry);
                $res->execute();
            }else 
            {
                array_push($this->errors, 'Hey!! Are You Drunk <br> All Fields Must Be filled');
            }

        }else 
        {
            array_push($this->errors, 
            'Something Went Wrong Please Try In a Whilen && If There is an Issue Please Contact the Technical Team. ');
        }
    }


    function updtAbtL()
    {

        global $con;
        
        if(isset($_POST['btn-li']))
        {
            $args1 = ($_POST['args1']);
            $args2 = ($_POST['args2']);
            $args3 = ($_POST['args3']);
            $args4 = ($_POST['args4']);
            $args5 = ($_POST['args5']);

            if (!empty($args1) 
            && !empty($args2)
            && !empty($args3) 
            && !empty($args4)
            && !empty($args5))
            {
                $qry = " INSERT INTO aboutli 
                ( args1, args2, args3, args4, args5 ) 
                VALUES ('$args1', '$args2', '$args3' , '$args4' , $args5) ";
                $res = $con->prepare($qry);
                $res->execute();
                array_push($this->success, " Data Inserted Successfully");
            }else
            {
                array_push($this->errors, 'Hey!! Are You Drunk <br> All Fields Must Be filled');
            }

        }else 
        {
            array_push($this->errors, 
            'Something Went Wrong Please Try In a Whilen && If There is an Issue Please Contact the Technical Team. ');
        }
    }






    function ftchAbtP ()
    {
        global $con;

        $qry = " SELECT * FROM aboutp ORDER BY id ASC ";
        $sql = $con->prepare($qry);
        $sql->execute();
        $res = $sql->fetch();

        while ($res > 0 )
        {

        }

    }




    function FtchAbtlLi ()
    {
        global $con;

        $qry = " SELECT * FROM aboutli ORDER BY id ASC ";
        $sql = $con->prepare($qry);
        $sql->execute();
        $res = $sql->fetch();

        while ($res > 0 )
        {
            
        }

    }

    function FtchAbtP3 ()
    {
        global $con;

        $qry = " SELECT * FROM aboutp ORDER BY id ASC ";
        $sql = $con->prepare($qry);
        $sql->execute();
        $res = $sql->fetch();

        while ($res > 0 )
        {
            
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



class WhyUs 
{

    public $errors;
    public $success;


    function __construct()
    {
        $this->errors  = array();
        $this->success = array();
    }





    function whyUs()
    {

        global $con;
        
        if(isset($_POST['about-btn']))
        {
            $name  = ($_POST['res']);
            $title = ($_POST['title']);
            $body  = ($_POST['body']);

            if (!empty($name) 
            && !empty($title)
            && !empty($body))
            {
                $qry = " INSERT INTO whyus 
                ( name, title, body ) 
                VALUES ('$name', '$title', '$body') ";
                $res = $con->prepare($qry);
                $res->execute();
            }else
            {
                array_push($this->errors, 'Hey!! Are You Drunk <br> All Fields Must Be filled');
            }

        }else 
        {
            array_push($this->errors, 
            'Something Went Wrong Please Try In a Whilen && If There is an Issue Please Contact the Technical Team. ');
        }
    }



    function Desscription ()
    {
        global $con;

        $qry = " SELECT * FROM whyus ORDER BY id ASC ";
        $sql = $con->prepare($qry);
        $sql->execute();
        $res = $sql->fetch();

        while ($res > 0 )
        {
            
        }

    }





    function FtchWhyUs ()
    {
        global $con;

        $qry = " SELECT * FROM whyus ORDER BY id ASC ";
        $sql = $con->prepare($qry);
        $sql->execute();
        $res = $sql->fetch();

        while ($res > 0 )
        {
            
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



class Service 
{
    public $errors;
    public $success;

    function __construct()
    {
        $this->errors  = array();
        $this->success = array();
    }



    function updatSrvc() 
    {
        
        global $con;
        
        if(isset($_POST['btn-srvc']))
        {
            $title = ($_POST['title']);
            $body  = ($_POST['body']);

            if (!empty($name) 
            && !empty($title)
            && !empty($body))
            {
                $qry = " INSERT INTO services 
                ( name, title, body ) 
                VALUES ('$name', '$title', '$body') ";
                $res = $con->prepare($qry);
                $res->execute();
            }else
            {
                array_push($this->errors, 'Hey!! Are You Drunk <br> All Fields Must Be filled');
            }

        }else 
        {
            array_push($this->errors, 
            'Something Went Wrong Please Try In a Whilen && If There is an Issue Please Contact the Technical Team. ');
        }
    }



    function ftchService ()
    {
        global $con;

        $qry = " SELECT * FROM servce  ORDER BY id ASC ";
        $sql = $con->prepare($qry);
        $sql->execute();
        $res = $sql->fetch();
        if ($res->fetch() > 0) {
            while ($this->row = $res->fetch()) 
            {

                echo ('<tr><td>' .$this->row['name'].
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








class Pack_Isrt
{
    public $errors;
    public $success;



    function __construct()
    {
        $this->errors  = array();
        $this->success = array();
    }




    function updtOffr()
    {

        global $con;
        
        if(isset($_POST['offr-btn']))
        {
            $name  = ($_POST['pack']);
            $offr1 = ($_POST['offr_1']);
            $offr2 = ($_POST['offr_2']);
            $offr3 = ($_POST['offr_3']);
            $offr4 = ($_POST['offr_4']);
            $offr5 = ($_POST['offr_5']);
            $offr6 = ($_POST['offr_6']);


            if (!empty($name) 
            && !empty($offr1)
            && !empty($offr2) 
            && !empty($offr3)
            && !empty($offr4)
            && !empty($offr5)
            && !empty($offr6))
            {
                $qry = " INSERT INTO offr 
                ( name, offr1, offr2, offr3, offr4, offr5, offr6 ) 
                VALUES ('$name', '$offr1', '$offr2' , '$offr3' , $offr4, '$offr5', '$offr6') ";
                $res = $con->prepare($qry);
                $res->execute();
            }else
            {
                array_push($this->errors, 'Hey!! Are You Drunk <br> All Fields Must Be filled');
            }

        }else 
        {
            array_push($this->errors, 
            'Something Went Wrong Please Try In a Whilen && If There is an Issue Please Contact the Technical Team. ');
        }
    }



    function ftchPack ()
    {
        global $con;

        $qry = " SELECT * FROM pack  ORDER BY id ASC ";
        $sql = $con->prepare($qry);
        $sql->execute();
        $res = $sql->fetch();

        if ($res->fetch() > 0) {
            while ($this->row = $res->fetch()) 
            {

                echo ('<tr><td>' .$this->row['id'].
                '</td> <td>'  .$this->row['pack']. 
                '</td>  <td>' . $this->row['email'] .
                '</td> <td>' . $this->row['phone'] .'</td> <tr>' );


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





















?>