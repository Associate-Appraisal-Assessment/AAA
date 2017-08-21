<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * CakePHP Task
 * @author RDRL
 */
session_start();
$error='';
if (isset($_POST['submit'])){
    if($_POST['empid']=='' || $_POST['password']==''){
        $error = "Username or Password Empty";
        echo $error;
    }
    else{
      $dbhost = "localhost:3306";
      $dbuser = "root";
      $dbpass = "";
      $dbname = "employeesurvey";
      $db = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
      $empid = $_POST['empid'];
      $password = $_POST['password'];
      $sql = "select empid, password from employeeinformation where empid=$empid";
      $result = mysqli_query($db,$sql);
      $res = mysqli_fetch_row($result);
      if (($empid==$res[0])&&($password==$res[1])){
          $_SESSION['empid'] = $empid;
          header("location:Feedback.php");
        }
        else{
          $error = "Username or Password Invalid";
          echo $error;
          echo '<html><meta http-equiv="refresh" content="3;url=login.php"></html>';
        }
    }
  }
?>
