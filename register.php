<?php include 'meta.php';?>

<?php 
    $visits_file = fopen("users.txt", "r");
    $serialized_array = fread($visits_file, 5000);
    fclose ($visits_file);

    $unserialized_array = unserialize($serialized_array);
    // $unserialized_array = [];

    $nick = $_POST["nick"];
    $password = $_POST["password"];

    if ($nick and $password and !$unserialized_array[$nick]){
        $unserialized_array[$nick] = $password;

        $visits_file = fopen("users.txt", "w");
        fwrite($visits_file, serialize($unserialized_array));
        fclose ($visits_file);
    
        session_start();
        $_SESSION['nick'] = $nick;

        header('Location: index.php');
    }
    else{
        echo "<script type='text/javascript'>alert('Registration failed!');</script>";
    }
?>

<a href="index.php"> Home</a>
<a href="register_page.php"> Go back</a>
