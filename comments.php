<?php
    $visits_file = fopen("comments.txt", "r");
    $serialized_array = fread($visits_file, 5000);
    fclose ($visits_file);

    $unserialized_array = unserialize($serialized_array);


    echo '<ul>';
    foreach($unserialized_array as $comment){
        echo '<li>';
        echo $comment;
        echo '</li>';
    }
    echo '</ul>';


    if($_SESSION['nick']){
        echo '<form action="add_comment.php" method="post">
        <h2>Your Comment: </h2><input type="text" name="comment"><br>
        <input type="submit">
        </form>';
    }
    else{
        echo '<h2>You must be logged in to comment!</h2>';
    }
?>