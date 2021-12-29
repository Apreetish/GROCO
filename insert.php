<?php
$username = $_POST['username'];
$email = $_POST['email'];
$phno = $_POST['phno'];
$review = $_POST['review'];

$conn=new mysqli('localhost','root','','contact-info');
if(conn->connect_error){
    die('connection failed :' .$conn->connect_error);

}else{
    $stmt = $conn->prepare("insert into contact (username,email,phno,review) values(?,?,?,?)");
    $stmt->bind_param("ssis",$username,$email,$phno,$review);
    $stmt->execute();
    echo "sucessfully done job";
    $stmt->close();
    $conn->close();
}

}
?>