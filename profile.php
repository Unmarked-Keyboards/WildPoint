<?php
  session_start();
  include "connection.php";

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profilestyle.css">
    <script src="profile.js"></script>
    <title>CourseFull - Profile</title>
    <style>
        *{
            color: #d9d9d9; 
        }
    </style>
</head>

<body onload="init()">
    <div id="sidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" id="navclose">&times;</a>
      <a href="timeline.php">HOME</a>
      <a href="profile.php">PROFILE</a>
      <a href="events.php">EVENTS</a>
      <a href="tournaments.php">TOURNAMENTS</a>
      <a href="settings.php">SETTINGS</a>
    </div>
    <div id="header" class="header">
        <div id="sidebar-btn" class="sidebar-btn">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
        <span class="site-name">Wild<span class="highlight-text">Point</span></span>
        <div class="dropdown">
            <form method = "POST" action = "#">
                <button id="user" class="user-btn btn-style" name = "LogOut">Lou Out!!</button>
                <?php 
                    if(isset($_POST['LogOut'])){
                        header('Location: logout.php');
                    }
                ?>
            </form>
        </div>

    </div>
    <div class="main-area">
        <div id="page-name" class="page-name">Welcome, <?php echo $_SESSION['name']?> <?php echo $_SESSION['lastname']?>!!</div> <br> <br>
        <div id="page-name" class="page-name">You currently have: 0 Points.</div><br><br>
        <div class="functionality">
                <div id = "scores">
                    <h1 class="section-title">YOUR SCORES</h1>
                    <h4>You currently have 0 Tournaments, that you have participated in. </h4> 
                </div>
            <div id="hubs">
                <h1 class="section-title">YOUR TOURNAMENTS</h1>
                <h4>You currently have 0 Tournaments, that you have organized. </h4> 
            </div>
            <div id="deadlines">
                <h1 class="section-title">YOUR EVENTS</h1>
                <h4>You currently have 0 Events, that you have organized. </h4> 
            </div>
            <div id="posts">
                <h1 class="section-title">YOUR POSTS</h1>
                <h4>You currently have 0 Posts, that you have posted. </h4> 
            </div>
            <div id="Account Management">
                <h1 class="section-title">ACCOUNT</h1>
                <h2>CHANGE</h2>
                <form method = "POST" action = "#">
                    <div class = "FlexBox"> <h2>Name: </h2> <input name = "NewName" type = "text" placeholder = "Enter new name: "> <button name = "ChangeName" class = "ConfirmButton">Confirm!</button> </div>
                    <div class = "FlexBox"><h2>Last Name: </h2> <input name = "NewLastName" type = "text" placeholder = "Enter new Last Name: "> <button name = "ChangeLastName" class = "ConfirmButton">Confirm!</button></div>
                    <div class = "FlexBox"><h2>Username: </h2> <input name = "NewUsername" type = "text" placeholder = "Enter new Username: "> <button name = "ChangeUsername" class = "ConfirmButton">Confirm!</button></div>
                    <div class = "FlexBox"><h2>Email: </h2> <input name = "NewEmail" type = "text" placeholder = "Enter new Email: "> <button name = "ChangeEmail" class = "ConfirmButton">Confirm!</button></div>
                    <div class = "FlexBox"><h2>Password: </h2> <input name = "NewPassword" type = "password" placeholder = "Enter new Password: "> <input name = "ReNewPassword" type = "password" placeholder = "Repeat new Password: "> <button name = "ChangePassword" class = "ConfirmButton">Confirm!</button></div>
                    <?php
                        if(isset($_POST['ChangeName'])){
                            $Name = $_POST['NewName']; 
                            if($Name != ""){
                                $WhichUser = $_SESSION['userid']; 
                                $Query = "UPDATE `users` SET `name`= '$Name' WHERE userid = '$WhichUser'"; 
                                $QueryResult = mysqli_query($Link, $Query) or die ("Meeeeeeeeeeeeeeeeee. There was an Error!! Please try again later on. ");
                            }
                            header("Location: profile.php"); 
                        }
                        if(isset($_POST['ChangeLastName'])){
                            $LastName = $_POST['NewLastName']; 
                            if($LastName != ""){
                                $WhichUser = $_SESSION['userid']; 
                                $Query = "UPDATE `users` SET `lastname`= '$LastName' WHERE userid = '$WhichUser'"; 
                                $QueryResult = mysqli_query($Link, $Query) or die ("Meeeeeeeeeeeeeeeeee. There was an Error!! Please try again later on. ");
                            }
                            header("Location: profile.php"); 
                        }
                        if(isset($_POST['ChangeUsername'])){
                            $Username = $_POST['NewUsername']; 
                            if($Username != ""){
                                $WhichUser = $_SESSION['userid']; 
                                $Query = "UPDATE `users` SET `username`= '$Username' WHERE userid = '$WhichUser'"; 
                                $QueryResult = mysqli_query($Link, $Query) or die ("Meeeeeeeeeeeeeeeeee. There was an Error!! Please try again later on. ");
                            }
                            header("Location: profile.php"); 
                        }
                        if(isset($_POST['ChangeEmail'])){
                            $Email = $_POST['NewEmail']; 
                            if($Email != ""){
                                $WhichUser = $_SESSION['userid']; 
                                $Query = "UPDATE `users` SET `email`= '$Email' WHERE userid = '$WhichUser'"; 
                                $QueryResult = mysqli_query($Link, $Query) or die ("Meeeeeeeeeeeeeeeeee. There was an Error!! Please try again later on. ");
                            }
                            header("Location: profile.php"); 
                        }
                        if(isset($_POST['ChangePassword'])){
                            $Password = $_POST['NewPassword']; 
                            if($Password != ""){
                                $RePassword = $_POST['ReNewPassword']; 
                                if($Password == $RePassword){
                                    $WhichUser = $_SESSION['userid']; 
                                    $Query = "UPDATE `users` SET `password`= '$Password' WHERE userid = '$WhichUser'"; 
                                    $QueryResult = mysqli_query($Link, $Query) or die ("Meeeeeeeeeeeeeeeeee. There was an Error!! Please try again later on. ");
                                }
                                else{
                                    echo "<h5 style = 'position: absolute; left: 24%; color: #e0e0e0'>New password is not the same as repeated new password!! </h5>";
                                }
                            }
                            header("Location: profile.php"); 
                        }
                    ?>
                </form>
                <h2>DELETE ACCOUNT</h2>
                <h3 class="warning">WARNING</h3>
                <p>Account deletion is permanent. If you delete your account, all saved posts, tournaments, events,
                    and any other items attached to your account will be lost.</p>
                <form method = "POST" action = "#">
                  <button id="accountdelete" class="btn-style delete-btn" name = "DeleteYourAccount">DELETE ACCOUNT</button>
                  <?php
                    if(isset($_POST["DeleteYourAccount"])){
                      include "connection.php";
                      $WhichUser = $_SESSION['userid'];
                      $AccountDeletion = "DELETE FROM `users` WHERE `users`.`userid` = $WhichUser ";
                      $DeleteAccount = mysqli_query($Link, $AccountDeletion) or die ("Sadly error happened :( . Meeeeeeeeeeeee . Try again next time ok. Also, we are sorry that you are leaving. ");
                      include "logout.php";
                    }
                   ?>
                </form>
            </div>
        </div>
        <div id = "messenges">
            <h1 class="section-title" style = "color: #2e2e2e">YOUR MESSENGES</h1>
        </div>
    </div>
    <div class="footer"></div>
</body>

</html>