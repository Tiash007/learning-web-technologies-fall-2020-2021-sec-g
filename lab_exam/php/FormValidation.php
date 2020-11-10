<?php


    if(isset($_POST['submit']))
    {
        
        if(empty($_POST["name"]))
        {
            echo "Name field is empty! Please enter your name";
        }
        else if(empty($_POST["id"]))
        {
            echo "ID field is empty! Please enter your ID!";
        }
       
        else if(empty($_POST["password"]))
        {
            echo " field  password is empty! Please enter your password properly!";
        }
        else if(empty($_POST["confirmpassword"]))
        {
            echo "Confirm your password";
        }
      
            else
            {
                $myfile = fopen('users.txt', 'a');
                fwrite($myfile, $_POST["id"] ."|".$_POST["name"]."|".$_POST["password"] );
                fclose($myfile);
                
                
                
            }


        }



        

        
    


  


?>