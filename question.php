<?php

   $dbhost = 'localhost:3306';
   $dbuser = 'root';
   $dbpass = '';
   $dbname = 'employeesurvey';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }

   echo 'Connected successfully';
   mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Competency Survey</title>
<meta name="viewport" content="width=device-width,initial-zoom=1.0" />
<link rel="stylesheet" type="text/css" href="css3/style1.css">
<script lang="javascript" type="text/javascript" src="Scripts/Login.js"></script>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<title>Survey</title>
</head>

<body style="font-family:'Roboto';font-size:1.5em;">

<header>
		<center><div class="imgcontainer">
			<img src="Images/ATG.png" alt="Avatar" class="avatar">
		</div></center>
		<h1 id="bkgndTxt">Competency survey</h1>
</header>
<div style="float:left;width: 20%;" class="col-9">
Employee Toolbar

</div>
<div style="margin: 0 auto;" class="col-9">
<ul>
<li> <span id="dispName">Name : </span> <span id="name">&nbsp;</span></li>
<li> <span id="dispDept">Department : </span> <span id="dept">&nbsp;</span> </li>
<li>&nbsp;</li>
</ul>

<hr width="100%">
<header> <h3 id="bkgndTxt"> evaluation questions </h3> </header>
<form>
<center>
<?php
$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '';
$dbname = 'employeesurvey';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
$sqlc = ("SELECT * FROM Competency where CompetencyID=1");
$coms = mysqli_query($conn,$sqlc);
while($cc=mysqli_fetch_array($coms)){
  echo '&emsp;';
$com = $cc["CompetencyName"];
echo '<br>
'.$com.'
<br><br><br>
<form action="FeedbackScript.php" method="POST">
</center>
';

$sql = ("SELECT * FROM question");
$rs = mysqli_query($conn,$sql);
while($rows=mysqli_fetch_array($rs))
{
  $idd = $rows["QuestionID"];
  $ques = $rows["Question"];
  echo '

'.$idd.'
'.$ques.'<br><center>
A<input type="radio" value="5" name='.$idd.'>&emsp;&emsp;
B<input type="radio" value="4" name='.$idd.'>&emsp;&emsp;
C<input type="radio" value="3" name='.$idd.'>&emsp;&emsp;
D<input type="radio" value="2" name='.$idd.'>&emsp;&emsp;
E<input type="radio" value="1" name='.$idd.' checked><br>&emsp;&emsp;
</center>
';
}
}
?>
</table>
<br>
<center>
<button type="submit" name="submit">Submit</button>
</form>
<br>
</div>
<?php

 ?>
</center>
</body>
</html>
