<?php
include_once 'user.php';
include_once 'dbconnect.php';
$conn=new dbconnect();
$pdo=$conn->connectToDB  ();
$event=$_POST['event'];
if($event=="register"){
    //register
    $fullname=$_POST['fullname'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $password = $_POST['password'];
   // $fullname = $_POST['fullname'];

   $user=new User($fullname,$email,$city,$password);
   $user->setFullName($fullname);
    $user->setEmailAddress($email);
    $user->setCity($city);
   echo $user->register($pdo);
   
   }
else{
    //login
    $email=$_POST['email'];
    $password=$_POST['password'];
    $user=new User($email,$password);
    echo $user->login($pdo);
}
