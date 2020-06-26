<?php
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
        header('location:welcome.php');
    }
    else{
        echo "incorrect phno or password";
        exit();
    }
    $result->close();
}
}
$conn->close();
d8578edf8458ce06fbc5bb76a58c5ca4

?>
