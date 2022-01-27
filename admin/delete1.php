<?php

include_once '../database/config.php';
;
// sending query
//mysqli_query($conn,"DELETE FROM users_table WHERE id = '$id'")
//or die(mysqli_error($conn));      
if (isset($_GET['id']) && is_numeric($_GET['id']))
{
// get the 'id' variable from the URL
$id = $_GET['id'];

echo $id;
$result=mysqli_query($conn,"DELETE FROM users_table WHERE user_id ='$id' LIMIT 1");
// redirect user after delete is successful
echo 'ok';
header("Location: ./index.php");
}
else
// if the 'id' variable isn't set, redirect the user
{
header("Location: delete.php");
}

?>

