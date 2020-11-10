<?php


    if(isset($_POST['submit']))
    {
        
        if(empty($_POST["name"]))
        {
            echo "Name field is empty! Please enter your name";
        }
        else if(empty($_POST["id"]))
        {
            echo "Email field is empty! Please enter your email!";
        }
       // else if(!isValidGender())
        //{
           // echo "Gender is not selected";
        //}
        else if(empty($_POST["password"]))
        {
            echo "Day field of DOB is empty! Please enter your DOB properly!";
        }
        else if(empty($_POST["confirmpassword"]))
        {
            echo "Month field of DOB is empty! Please enter your DOB properly!";
        }
      
            else
            {
                echo "Your name is {$_POST["name"]} <br>";
                echo "Your email address is {$_POST["password"]} <br>";
                echo "Your gender is {$_POST["id"]} <br>";
               
               

                
                if( isset($_POST["user"]) && !isset($_POST["admin"]) )
                {
                    echo "You have completed SSC";
                }
                else if( !isset($_POST["user"]) && isset($_POST["admin"]))
                {
                    echo "You have completed HSC";
                }
               
                else if( isset($_POST["user"]) && isset($_POST["admin"]) )
                {
                    echo "You have completed SSC and HSC";
                }
                
                
                
            }


        }



        

        
    


  


?>