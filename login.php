<?php
session_start();
$host="localhost";
$user="root";
$pass="";
$db="sample";

$conn=mysqli_connect($host,$user,$pass,$db);
if(!$conn){
    die('Connection Failed:' .mysqli_connect_error());
}
else{
if(isset($_POST['phone'])){
    $phone=$_POST['phone'];
    $password=md5($_POST['password']);

    $sql="SELECT * FROM registeration WHERE phone='".$phone."'AND password='".$password."'";

    $result = mysqli_query($conn, $sql);
    if(($result->num_rows)==1){
        $_SESSION['phone']=$phone;
        header('location:welcome.html');
    }
    else{
        echo "incorrect phno or password";
        exit();
    }
    $result->close();
}
}
$conn->close();


?>
