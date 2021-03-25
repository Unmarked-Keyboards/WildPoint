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
    <title>WildPoint/NewPost</title>
    <link rel="stylesheet" href="newsstyle.css">
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
      <div class = "MakeNewPost">
        <form method = "POST" action = "#">
          <input name = "Title" type = "text" placeholder = "Write a title of your Post! " class = "GoodPosition">
          <textarea name="Description" rows="12" cols="128" placeholder = "Write everything about your Post!" class = "GoodPosition"></textarea>
          <button class = "GoBack" name = "GoBackToDashboard"> Go Back </button>
          <button class = "Make" name = "MakeNewHelpRequest">Make It! </button>
          <?php
            if(isset($_POST['GoBack'])) header('Location: timeline.php'); 
            else if(isset($_POST['Make'])){
              $Name = $_POST['Title'];
              $Text = $_POST['Description'];
              $WhichUser = $_SESSION['userid']; 

              $Query = "INSERT INTO `posts` VALUES (NULL, '$Name', '$Text', 'There is no image yet. ', '$WhichUser')";
              $Result = mysqli_query($Link, $Query) or die("Error appeared when you tried to make you account. We are so so sorry. Please please try again later on. "); 

              $Number = mysqli_affected_rows($Link);
              if($Number > 0) {
                  echo "You have just made a new Post! Awesome! ";
              }
              else {
                  echo "There was an error :(, please try again, later and we are excited that you want to let us know  :D . )";
              }
            }
          ?>
        </from>
      </div>
    </div>
    <div class="footer"></div>
</body>

</html>