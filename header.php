<?php
    function printHeader($current_page) {
    echo(
    '<div class="topnav">
    <nav>
        <a href="index.html" class="logo">
            Jan Pawłowski<br>
            <hr>Mini portfolio
        </a>
        <a'
    );
    if ($current_page == "index"){
        echo(' class="active" ');
    }
    else {
        echo(' class="inactive" ');
    }
    echo(
        'href="index.php">Home</a>
        <a'
    );
    if ($current_page == "projects"){
        echo(' class="active" ');
    }
    else {
        echo(' class="inactive" ');
    }
    echo('href="projects.php">Projects</a>
        <a '
    );
    if ($current_page == "resources"){
        echo(' class="active" ');
    }
    else {
        echo(' class="inactive" ');
    }
    echo('href="resources.php">Resources</a>');

    if ($_SESSION["nick"]){
        echo '<a class="inactive"> Aloha ';
        echo $_SESSION["nick"];
        echo '!</a>';
        echo '<a class="inactive" href="logout.php"> Log out </a>';
        echo '<a class="inactive" href="delete_account.php"> Delete account </a>';
    }
    else{
        echo(
            '<a class="inactive" href="login_page.php">LogIn</a>
            <a class="inactive" href="register_page.php">Register</a>'
        );
    }

    echo (
    '</nav>
    </div>'
    );
}

?>
