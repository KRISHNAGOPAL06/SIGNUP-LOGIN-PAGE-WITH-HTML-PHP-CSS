<?php      
    $con = mysqli_connect("localhost", "root",'', "login");  //a variable store like a function call that is mysqli_connect("hostname","username of db","password of db","db name")
    $username = $_POST['user'];  //fetching value of username from html form  
    $password = $_POST['pass'];  //fetching value of password from html form  
    $sql = "select *from users where username = '$username' and password = '$password'";  //store query in a variable named sql
   /* $sql1 = "INSERT INTO users(id,username,password) VALUES (1,'krishna',1234)";
    if(mysqli_query($con,$sql1))
    {
        echo "hello";
    }
    else{ echo"failed";}*/
    $result = mysqli_query($con, $sql);  //store result of connection & query with db
    $count = mysqli_num_rows($result);   
    if($count == 1)   
        {  
            echo "<h1><center> Login successful </center></h1>";  //for printing
        }  
        else
        {  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     

?>  