<?php
        $user='';
        $pass='';
        if (isset($_POST['user']) and isset($_POST['pass'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
        }        

        if($user == "admin" && $pass == "admin")
        {
                include("storeone.php");
        }
        else
        {
                if(isset($_POST))
                {

                        /*
                        echo '<form method="POST" action="secure.php">';
                        echo 'User <input type="text" name="user"><br>';
                        echo 'Pass <input type="password" name="pass"><br>';
                        echo '<input type="submit" name="submit" value="Go">';
                        echo '</form>';         
                        */
                        include('login.html');   
                }
        }

?>