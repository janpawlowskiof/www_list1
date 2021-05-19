<?php include 'meta.php';?>

<?php 
    $visits_file = fopen("visits.txt", "r");
    $serialized_array = fread($visits_file, 5000);
    fclose ($visits_file);

    $unserialized_array = unserialize($serialized_array);

    $ip = $_SERVER['REMOTE_ADDR'];
    $date = date("Y-m-d");
    $last_ip_login_date = $unserialized_array[$ip];
    if($last_ip_login_date !== $date){
        $unserialized_array[$ip] = $date;

        $unserialized_array["counter_value"] = (int)$unserialized_array["counter_value"] + 1;

        $visits_file = fopen("visits.txt", "w");
        fwrite($visits_file, serialize($unserialized_array));
        fclose ($visits_file);
    }

    echo($unserialized_array["counter_value"]);
?>
