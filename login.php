<?php

error_reporting(E_ALL);
ini_set("display_errors",1);

session_start(); // 세션
include ("connect.php"); // DB접속



$id = $_POST['id']; // 아이디 
$pw = $_POST['pw']; // 패스워드
   
$query = "select * from id_pw where _id='$id' and _pw ='$pw'";
$result = mysqli_query($con, $query);

if(mysqli_num_rows($result)>=1 ){ // id와 pw가 맞다면 login

   		echo "<script>window.alert('Login success!! ');</script>"; // 잘못된 아이디 또는 비빌번호 입니다
   		echo "<script>location.href='front.php';</script>";
	



}else{ // id 또는 pw가 다르다면 login 폼으로
   echo "<script>window.alert('invalid username or password ');</script>"; // 잘못된 아이디 또는 비빌번호 입니다
   echo "<script>location.href='index.php';</script>";

}

?>
