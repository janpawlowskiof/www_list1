<?php include 'meta.php';?>

<?php 
    $visits_file = fopen("comments.txt", "r");
    $serialized_array = fread($visits_file, 5000);
    fclose ($visits_file);

    $unserialized_array = unserialize($serialized_array);
    $full_comment = $_SESSION['nick'];
    $full_comment .= ': ';
    $full_comment .= $_POST["comment"];
    array_push($unserialized_array, $full_comment);

    $visits_file = fopen("comments.txt", "w");
    fwrite($visits_file, serialize($unserialized_array));
    fclose ($visits_file);

    header('Location: projects.php');
?>
