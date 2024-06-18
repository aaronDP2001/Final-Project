<?php

include_once 'connection.php';



$content_id= $_POST['content_id'];
$comment=$_POST['description'];



$sql = "INSERT INTO comments (comment_id,comment) VALUES ('$content_id' ,'$comment')" ;
mysqli_query($conn , $sql);



header("Location: CommentPg11.php?id=$content_id");

?> 