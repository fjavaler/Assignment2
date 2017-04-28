<html>
    <head>
        <meta charset="UTF-8">
        <title>Login Successful</title>
        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
        <link href="css/normalize.css" rel = "stylesheet" type = "text/css">
        <link rel="stylesheet" type="text/css" href="css/assignment2Styles.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
        <link rel="shortcut icon" href="images/favicon.ico"/>
    </head>
    <body>
        <!-- !PAGE CONTENT! -->
        <div class="container-fluid" id="pageContent">
            <!-- Header -->
            <nav class="navbar navbar-default navbar-collapse" id="navbar">
                <div class='navbar-header'>
                    <div class='btn-group btn-group-justified' role='group' id="navButtons">
                        <a href="/myWebPage.php" role="button" class="btn btn-lg btn-secondary" id="navButton">Home</a>
                        <a href="/assignment2.php" role="button" class="btn btn-lg btn-secondary" id="navButton">Friends and Family</a>
                        <a href="/eCommerce.php" role="button" class="btn btn-lg btn-secondary" id="navButton">E-commerce</a>
                    </div>
                </div>
            </nav>
            <!-- Login Prompt -->
            <div class="container-fluid" id="imgContainer">
                <div class="row" style="padding-top: 150px; text-align: center; padding-bottom: 150px; color: white">
                    <?php
                    echo $_SESSION['user'] . " has logged in";
                    echo "<p></p><p></p><p></p><a href='catalogue.php'><h1>To Shopping</h1></a></p>";
                    ?>
                </div>
            </div>
        </div>
        <div class="container" id="border">
            <img id="border-image" src="images/MosaicBorder.png" alt="Border">
        </div>
        <div class="container" id="spacer" style="padding-top: 123px; padding-bottom: 122px">
        </div>
        <!--copyright row-->
        <div class="container" id="copyright">
            Copyright &copy; 2017 - All rights reserved - Frederick Javalera
        </div>
    </body>
</html>