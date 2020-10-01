<?php

mysqli_connect("localhost:8080","srish","");
mysql_select_db("comments");
    $name = $_POST["name"];
    $comment = $_POST["comment"];

    $comment_length = strlen($comment);

    if($comment_length > 100)
    {
        header("location: index.php?error=1");
    }
    else
    {
        mysql_query("INSERT INTO comments VALUES('','$name','$comment')");
        header("location: index.php");
    }
    
?>