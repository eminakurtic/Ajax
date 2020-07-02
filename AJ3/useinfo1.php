<?php

require_once 'connection1.php';
$userID = $_REQUEST['name'];

if($userID == 0){
    $sql = "SELECT * FROM users";
}else{
$sql = "SELECT * FROM isers WHERE id = '{$userID}'";
}

$result = mysqli_query($connection, $sql);

?>

<table>
    <tr>
        <th>ID</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Age</th>
        <th>Hometown</th>
        <th>Job</th>