<?php
  session_start();
  include "connection.php";

 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="timelinestyle.css">
    <script src="profile.js"></script>
    <title>CourseFull - Profile</title>
    <style>
        
    </style>
</head>

<body onload="init()">
    <div id="sidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" id="navclose">&times;</a>
      <a href="timeline.php">HOME</a>
      <a href="profile.php">PROFILE</a>
      <a href="hubs.php">EVENTS</a>
      <a href="groups.php">TOURNAMENTS</a>
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
                <button id="user" class="user-btn btn-style" name = "NewPost">New Post!!</button>
                <button id="user" class="user-btn btn-style" name = "NewTournament">New Tournament!!</button>
                <button id="user" class="user-btn btn-style" name = "NewEvent">New Event!!</button>
                <?php 
                    if(isset($_POST['LogOut'])){
                        header('Location: logout.php');
                    }
                    if(isset($_POST['NewPost'])){
                      header('Location: newpost.php');
                    }
                    if(isset($_POST['NewTournament'])){
                      header('Location: newtournament.php');
                    }
                    if(isset($_POST['NewEvent'])){
                      header('Location: newevent.php');
                    }
                ?>
            </form>
        </div>

    </div>
    <div class = "main">
      <div class = "Post">
        <h2 class = "Title">Title</h2>
        <div class = "PostContent">
          <h4 class = "Text">This is a example of text. </h4>
          <img class = "PostPicture" src = "#" alt = "There is no picture or it can not be loaded. ">
        </div>
        <div class = "Comments">
          
        </div>
      </div>
    </div>
    <div class="footer"></div>
</body>

</html>