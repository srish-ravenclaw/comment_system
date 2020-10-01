<html>
    <h1>Comment</h1>
</html>

<?php 

    mysqli_connect("localhost:8080","srish","");
    mysql_select_db("comments");

    $find_comments = mysql_query("SELECT * FROM comments");
    while($row = mysql_fetch_assoc($find_comments))
    {
        $comment_name = $row['name'];
        $comment = $row['comments'];
        echo "$comment_name - $comment<p>";
    }

    if(isset($_GET['error']))
    {
        echo "<p> 100 Character Limit";
    }

?>

<html>
    <form action="post_comment.php" method="POST">
        <input type="text" name="name" value="Your Name"><br>
        <textarea name="comment" cols="50" rows="2">Enter your Comment</textarea>
        <input type="submit" value="Comment">
    </form>
</html>