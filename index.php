<?php
    include "connection.php"; 
    session_start(); 
?>
<!DOCTYPE html>
<head>
    <title>WildPoint Home</title>
    <link rel = "stylesheet" href = "style.css">
</head>
<body>
    <header>
        <h1>WildPoint</h1>
    </header>
    <main>
        <div class = "LogIn">
            <h2 class=" log">Welcome Home</h2>
            <form method = "POST" action = "#">
                <input name = "LIUsername" type = "text" placeholder = "Enter your Username" >
                <input name = "LIPassword" type = "password" placeholder = "Enter your Password" >
                <button name = "LogIn" type = "submit">Log In</button>
                <?php
                    if(isset($_POST['LogIn'])){
                        $Username = $_POST['LIUsername']; 
                        $Password = $_POST['LIPassword'];
                        $Query = "SELECT * FROM `users` WHERE username = '$Username' AND password = '$Password'"; 
                        $QueryResult = mysqli_query($Link, $Query) or die ("Error happened while trying to log you in. Be nice and try again later on. "); 
                        $Rows = $QueryResult->num_rows;
                        if($Rows > 0){

                            $Row = mysqli_fetch_row($QueryResult); 

                            $_SESSION['userid'] = $Row[0]; 
                            $_SESSION['name'] = $Row[1]; 
                            $_SESSION['lastname'] = $Row[2]; 
                            $_SESSION['username'] = $Row[3]; 
                            $_SESSION['email'] = $Row[4]; 
                            $_SESSION['password'] = $Row[5]; 

                            header('Location: profile.php'); 

                        }
                        else{
                            echo "<h5 style = 'position: absolute; left: 24%; color: #e0e0e0'>NO! You entered wrong E-mail or Password</h5>";
                        } 
                    } 
                ?>
            </form>
        </div>
        <div class = "Register">
            <h2 class="reg">Join The Team</h2>
            <form method = "POST" action = "#">
                <div class = "FullName">
                    <input name="RName" type="text" placeholder="Enter your Name" class = "Name">
                    <input name="RLastName" type="text" placeholder="Enter your Lastname" class = "Name">
                </div>
                <input name="RUsername" type="text" placeholder="Create your Username">
                <input name="REmail" type="text" placeholder="Enter your Email">
                <input name="RPassword" type="password" placeholder="Create your Password">
                <button name = "UserSignIn" class = "RegButton">Register</button>
                <?php
                if(isset($_POST['UserSignIn'])){

                    $FirsName = $_POST['RName'];
                    $LastName = $_POST['RLastName'];
                    $Username = $_POST['RUsername']; 
                    $Mail = $_POST['REmail'];
                    $Password = $_POST['RPassword'];

                    $Query = "INSERT INTO `users` VALUES (NULL, '$FirsName', '$LastName', '$Username', '$Mail', '$Password')";
                    $Result = mysqli_query($Link, $Query) or die("Error appeared when you tried to make you account. We are so so sorry. Please please try again later on. "); 

                    $Number = mysqli_affected_rows($Link);
                    if($Number > 0) {
                        echo "Registration went successful, Log in to your new account";
                    }
                    else {
                        echo "There was an error :(, please try again, later and we are excited that you want to join CourseFull :D . )";
                    }
              }
            ?>
            </form>
        </div>
    </main>
    <footer>

    </footer>
</body>