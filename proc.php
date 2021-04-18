<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "maindatabase";

$con = new mysqli($servername, $username, $password, $dbname);

if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$reply=[];

if(empty($_POST['email']))
{
    $reply['emailErr']= 'email error';
}
 if(empty($_POST['username']))
{
    $reply['userErr']= 'user error';
}
 if(empty($_POST['comment']))
{
    $reply['commentErr']= 'comment error';
}
if(!empty($_POST['comment']) && !empty($_POST['username']) && !empty($_POST['email']))
{ 
    $stmt = $con->prepare("INSERT INTO comments (username,comment, email) VALUES (?, ?,?)");
    $stmt->bind_param('sss', $_POST['username'], $_POST['comment'], $_POST['email']);
    $username=$_POST['username'];
    $comment=$_POST['comment'];
    $email=$_POST['email'];
    $stmt->execute();
    
    $stmt->close();
    
    
}

echo json_encode($reply);