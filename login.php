<?php

   $dbhost = 'localhost:3306';
   $dbuser = 'pooventhiran';
   $dbpass = 'poo123naveen';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);

   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }

   //echo 'Connected successfully';
?>

  <!Doctype html>
<html>
<head>
    <title>ATG Login</title>
    <meta name="Author" content="Adarsh">
    <meta name="Keywords" content="Login, Employee, feedback">
	  <link rel="icon" type="image/ico" href="Images\ATG-icon.ico" />
    <link rel="stylesheet" type="text/css" href="css3/CSSlogin.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <script lang="javascript" type="text/javascript" src="Scripts/Login.js"></script>
</head>

<body class="login">
    <div class="row">
        <div class="col-3 col-m-3">

        </div>
        <div class="col-3 col-m-3">
            <img src="Images/ATG.png" alt="ATG icon" class="avatar">
        </div>
    </div>
    <div class="row">
          <div class="col-12 col-m-12">

          </div>
    </div>
    <div class="row">
        <div class="col-2 col-m-2">

        </div>
        <div style="background-image:url(Images/background1.png);height:500px" class="col-8 col-m-8">
                    <h2 class="fontstyle6" style="text-align:center">Employee Login</h2>
                    <div>
                        <form action="LoginScript.php" method="post" name="myform1">
                        <input type="text" name="empid" id="empid" placeholder="Employee ID" value="">
                        <input type="password" name="password" id="password" placeholder="Password" value="">
                        <center>
                        <input type="submit" name="submit" value="Login" onclick="validateform1()">
                        </center>
                        </form>
                    </div>
        </div>
    </div>
    <div class="row">
        <div>
            <br>
            <br>
        </div>
    </div>
    <div class="row">
    <div class="footer">
        <p>This website created and maintaied by S.Adarsh, A.Sandeep, G.Pooventhiran<br />PhoneNumber :9942315160/7538694214<br />
            E-Mail : adarsh.srikanth@gmail.com/sandeep@gmail.com/poov@gmail.com
            <br
        </p>
    </div>
    </div>
</body>
</html>
