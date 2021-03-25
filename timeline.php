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
    .Post{
      width: 44%;
      height: 400px;
      background-color: rgba(235, 64, 52, 0.7);
      border-radius: 12px;
      text-align: center;
      margin-left: 28%;
      margin-right: 28%;
    }
    .main{
      position: absolute;
      top: 9%; 
      left: 0; 
      right: 0;
      bottom: 0; 
    }
    .PostContent{
      width: 100%;
      height: 76%;
      position: relative;
    }
    .Title{
      margin: 0;
      padding: 0;
      font-size: 28px; 
      font-style: italic;
    }
    .Text{
      position: absolute;
      left: 1.4%; 
      top: 2%; 
      width: 56%;
      height: 84%;
      margin-left: 1.4%;
    }
    .PostPicture{
      position: absolute;
      right: 1.4%; 
      top: 2%; 
      width: 38.555%; 
      height: 94%;
    }
    .Comments{
      position: relative;
      width: 98%; 
      height: 12%;
      margin-left: 0.9787%;
      margin-top: 1%;
    }
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