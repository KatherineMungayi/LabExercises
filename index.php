<?php

include_once 'database.php';
include_once 'user.php';
if(!isset($_SESSION)) {session_start();}

$con=new Connect();
$pdo=$con->DBconnect();
if(isset($_POST["register"])){
$first_name=$_POST["first_name"];
$second_name=$_POST["second_name"];
$Email=$_POST["Email"];
$city_of_residence=$_POST["city_of_residence"];
$password=password_hash($_POST["password"], PASSWORD_DEFAULT);

//Creating a new object
$user=new User();
$user->setFirstName($first_name);
$user->setSecondName($second_name);
$user->setMail($Email);
$user->setResidence($city_of_residence);
$user->setPassword($password);

if($user->register($pdo)=='success'){
   $_SESSION['name']=$first_name.' '.$second_name;
	 header("location:dashboard.php");
} else {
	print_r( $user->register($pdo) );
}
//echo $user->register($pdo);
/*$message=$user->register($pdo);
echo "$message";*/


}
if (isset($_POST["login"])) {

	$Email=$_POST["email"];
	$password=$_POST["password"];

	$user=new User();
    $user->setMail($Mail);
    $user->setPassword($password);

    if($user->login($pdo)=="success"){

    $details=$user->login($pdo);

    $_SESSION['username']=$first_name;
    header("location:home.php");
}
else{
	$_SESSION['message']="Incorrect credentials";
	header("location:login.php");
}

}
?>
