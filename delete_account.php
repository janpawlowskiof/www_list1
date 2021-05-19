<?php include 'meta.php';?>

<?php 
    $visits_file = fopen("users.txt", "r");
    $serialized_array = fread($visits_file, 5000);
    fclose ($visits_file);

    $unserialized_array = unserialize($serialized_array);

    $nick = $_SESSION["nick"];

    if ($nick){
        unset($unserialized_array[$nick]);

        $visits_file = fopen("users.txt", "w");
        fwrite($visits_file, serialize($unserialized_array));
        fclose ($visits_file);

        header('Location: logout.php');
    }
    else{
        echo "<script type='text/javascript'>alert('Cannot delete your account!');</script>";
    }    
?>

<a href="index.php"> Home</a>
<a href="login_page.php"> Go back</a>
