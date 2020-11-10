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
                $myfile = fopen('users.txt', 'a');
                fwrite($myfile, $_POST["id"] ."|".$_POST["name"] );
                fclose($myfile);
                
                
                
            }


        }



        

        
    


  


?>