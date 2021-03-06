<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <title>Jan Pawłowski - Mini portfolio</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php include 'header.php';?>
    <div>
        <div class="column-left">
            <section>
                <h2>About me</h2>
                <p>
                    <img src="me.jpg" alt="Moje zdjęcie">
                    My name is Jan Pawłowski. I am currently studying Computer Science 
                    at the Faculty of Fundamental Problems of Technology 
                    at Wrocław University of Science and Technology.
                    <br>
                    I am a member of Solvro science club and take part in various Machine Learning related projects.
                </p>

                <p>
                    My main interests revolve around Machine Learning and sometimes game engines.
                    When it comes to sports I am a big fan of cycling and various winter sports.
                </p>
            </section>

        </div>
        <div class="column-right">
            <section>
            <h2>Contact</h2>
            <p>
                Feel free to contact me or visit my socials!
            </p>
            <ul>
                <li>email: <a href="mailto:250345@student.pwr.edu.pl">250345@student.pwr.edu.pl</a></li>
                <li><a href="https://gitlab.com/eg4l">GitLab</a></li>
                <li><a href="https://github.com/janpawlowskiof">GitHub</a></li>
            </ul>
        </section>
        </div>
    </div>

    <?php include 'footer.php';?>
</body>
<script src="script.js"></script>

</html>