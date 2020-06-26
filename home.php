<?php 
header('Content-type: text/html; charset=utf-8');
$username=$_POST['username'];
$phone=$_POST['phone'];
$password=md5($_POST['password']);
//Database connection
$conn=new mysqli('localhost','root','','sample');
if(!$conn){
    die('Connection Failed:' .mysqli_connect_error());
}
else{
    $stmt=$conn->prepare("insert into registeration(username,phone,password)values(?,?,?)");
    $stmt->bind_param("sss",$username,$phone,$password);
    $stmt->execute();
    echo "registeration success..";
    $stmt->close();
    $conn->close();
}
?>