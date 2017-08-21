<?php
  if(isset($_POST['submit'])){
    $dbhost = 'localhost:3306';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'employeesurvey';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    $sql="INSERT INTO storeresponse(SurveyID,QuestionID,AssessedEmp,Response,CompetencyID) VALUES(%d,%d,%s,%d,%d)";
    //$SurveyID=$_POST[];
    $sql2="SELECT QuestionID,CompetencyID FROM question";
    $res=mysqli_query($conn,$sql2);
    $res=mysqli_fetch_all($res,MYSQLI_ASSOC);
    /*$Assessed=$_POST[];
    $Response=$_POST[];
    $CompID=$_POST[];*/
    echo "1";
  }
?>
<html>
<body>
  hi
</body>
</html>
