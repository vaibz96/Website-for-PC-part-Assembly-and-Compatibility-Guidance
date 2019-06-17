<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "pca");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$user_name = mysqli_real_escape_string($link, $_REQUEST['user_name']);
$user_email = mysqli_real_escape_string($link, $_REQUEST['user_email']);
$user_password = mysqli_real_escape_string($link, $_REQUEST['user_password']);
 
// attempt insert query execution
$sql = "INSERT INTO user (username, email, password) VALUES ('$user_name', '$user_email', '$user_password')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>