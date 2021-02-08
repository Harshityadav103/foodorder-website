<?php
$firstname=$_POST['firstname'];
$email=$_POST['email'];
$number=$_POST['number'];
$transation=$_POST['transation'];

$conn=new mysqli('localhost','root','','harshit');
if($conn->connect-error){
    die('connection failed :'.$conn->connection-error);
}else{
    $stmt=$conn->prepare("insert into fooditem(firstname,email,number,transaction)value(?,?,?,?)");
    $stmt->bind_param("ssis",$firstname,$email,$number,$transation);
    $stmt->execute();
    echo "add succesfully.....";
    $stmt->close();
    $conn->close();
}
?>