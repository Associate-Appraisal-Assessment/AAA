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

<body>
<header>
		<center><div class="imgcontainer">
			<img src="Images/ATG.png" alt="Avatar" class="avatar">
		</div></center>
		<h1 id="bkgndTxt">Competency survey</h1>
</header>
<div class="col-3">
<header> <h3 id="bkgndTxt"> Evaluation Rating </h3></header>
<center><table cellspacing="0" cellpadding="2" border="1">
<tr>
<th> A</th>
<td> Usually </td>
</tr>
<tr>
<th> B</th>
<td> Often </td>
</tr>
<tr>
<th> C</th>
<td> Sometimes </td>
</tr>
<tr>
<th> D</th>
<td> Occasionally </td>
</tr>
<tr>
<th> E</th>
<td> Never </td>
</tr>
</table>
</center>
<br>
<header> <h3 id="bkgndTxt"> Assessee </h3> </header>
<center> <table id="assessee" cellspacing="0" cellpadding="2" class="col-11" style="float:none">

  <?php

  $dbhost = 'localhost:3306';
  $dbuser = 'root';
  $dbpass = '';
  $dbname = 'employeesurvey';
  $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  $sql = ("SELECT * FROM Department");
  $rs = mysqli_query($conn,$sql);
  while($rows=mysqli_fetch_array($rs))
  {
    $idd = $rows["DeptID"];
    $ques = $rows["DepartmentName"];
    echo '
    <tr>
    <td><b>'.$ques.'</b></td>
    </tr>
    <tr>
    ';
    $sql2 = ("SELECT * FROM employeeinformation WHERE DeptID=$idd");
    $rs2 = mysqli_query($conn,$sql2);
    while($rows2=mysqli_fetch_array($rs2))
    {
      $emp = $rows2['EmployeeName'];
      $dept = $rows2['DeptID'];
      $getDept=mysqli_query($conn,"SELECT DepartmentName from department where DeptID=$dept");
      $getDept=mysqli_fetch_array($getDept);
      $department=$getDept['DepartmentName'];
      printf('
        <tr>
        <td>
        <td><button onclick="printNameAndTitle(\'%s\',\'%s\')">%s</button></td>
        </tr>
      ',$emp,$department,$emp);
    }

    ;
  } ?>
</table>
</center>
<br><br>
</div>
<div class="col-9">
<ul>
<li> <span id="dispName">Name : </span> <span id="name">&nbsp;</span></li>
<li> <span id="dispDept">Department : </span> <span id="dept">&nbsp;</span> </li>
<li>&nbsp;</li>
</ul>
<hr width="100%">
<header> <h3 id="bkgndTxt"> evaluation questions </h3> </header>
<form>
<center>
<table width="95%" id="questions" cellspacing="0" cellpadding="2" border="2">
<tr>
<th>S.no</td>
<th>Competencies</td>
<th>a</th>
<th>b</th>
<th>c</th>
<th>d</th>
<th>e</th>
</tr>
<form action="FeedbackScript.php" method="POST">
<?php

$dbhost = 'localhost:3306';
$dbuser = 'root';
$dbpass = '';
$dbname = 'employeesurvey';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
$sql = ("SELECT * FROM question");
$rs = mysqli_query($conn,$sql);
while($rows=mysqli_fetch_array($rs))
{
  $idd = $rows["QuestionID"];
  $ques = $rows["Question"];
  echo '
<tr>
<td>'.$idd.'</td>
<td>'.$ques.'</td>
<th><input type="radio" value="5" name='.$idd.'></th>
<th><input type="radio" value="4" name='.$idd.'></th>
<th><input type="radio" value="3" name='.$idd.'></th>
<th><input type="radio" value="2" name='.$idd.'></th>
<th><input type="radio" value="1" name='.$idd.' checked></th>
</tr>
';
}
?>
</table>
</center>
<br>
<center>
<button type="submit" name="submit">Submit</button>
</form>
<br>
</div>
<?php

 ?>

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
