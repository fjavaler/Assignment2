<!DOCTYPE html>
<html>
    <head>
        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <title>Welcome to my Website!</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
        <link href="css/normalize.css" rel = "stylesheet" type = "text/css">
        <link rel="stylesheet" type="text/css" href="css/myWebpageStyles.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
        <link rel="shortcut icon" href="images/favicon.ico"/>
        <script src="js/bootstrap.min.js" type="text/javascript">
        </script>
    </head>
    <body>
        <!-- !PAGE CONTENT! -->
        <div class="container-fluid btn-toolbar" id="pageContent">
            <!-- Header -->
            <nav class="navbar navbar-default navbar-collapse" id="navbar">
                <div class='navbar-header'>
                    <div class='btn-group btn-group-justified' role='group' id="navButtons">
                        <a href="/myWebPage.php" role="button" class="btn btn-lg btn-secondary" id="navButton">Home</a>
                        <a href="#about" role="button" class="btn btn-lg btn-secondary" id="navButton">About</a>
                        <a href="/assignment1.php" role="button" class="btn btn-lg btn-secondary" id="navButton">Assignment 1</a>
                        <a href="/assignment2.php" role="button" class="btn btn-lg btn-secondary" id="navButton">Assignment 2</a>
                        <a href="/assignment3.php" role="button" class="btn btn-lg btn-secondary" id="navButton">Assignment 3</a>
                        <a href="/eCommerce.php" role="button" class="btn btn-lg btn-secondary" id="navButton">E-commerce</a>
                        <a href="/exercises.php" role="button" class="btn btn-lg btn-secondary" id="navButton">Exercises</a>
                    </div>
                </div>
            </nav>

            <!-- Photo -->
            <div class="container-fluid" id="imgContainer">
                <div class="row container-fluid">
                    <div class="span4"></div>
                    <div class="span4"></div><img class="img-rounded img-responsive center-block" id="mePic" src="images/me.png" alt="">
                    <div class="span4"></div>
                </div>
            </div>
        </div>
        <div class="container" id="border">
            <img id="border-image" src="images/MosaicBorder.png" alt="Border">
        </div>
        <!-- Footer / About Section -->
        <footer class="w3-center" id="about">
            <h1 id="aboutMeH1"><span id="aboutMeText">About Me</span></h1>
            <div id="aboutMeContents" class="container">
                <div class="container" id="interestsDiv">
                    <div class="card card-inverse" id="cardInverse">
                        <img class="card-img img-responsive center-block aboutPics" src="images/tech.jpg" alt="My Interests">
                        <div class="card-img-overlay">
                            <h4 class="card-title"><b>Interests</b></h4>
                            <p class="card-text">Hi, my name is Fred Javalera.
                                <br />Welcome to my site.
                                <br />I'm into programming and all things tech.</p>
                        </div>
                    </div>
                </div>
                <div class="container" id="bookDiv">
                    <div class="card card-inverse" id="cardInverse">
                        <img class="card-img img-responsive center-block aboutPics" src="images/enquiry.jpg" alt="My Favorite Book">
                        <div class="card-img-overlay">
                            <h4 class="card-title"><b>Book</b></h4>
                            <p class="card-text">My favorite book
                                is <u>An Enquiry Concerning Human Understanding</u> by David Hume.</p>
                        </div>
                    </div>
                </div>
                <div class="container" id="movieDiv">
                    <div class="card card-inverse" id="cardInverse">
                        <img class="card-img img-responsive center-block aboutPics" src="images/pulpFiction.jpg" alt="My Favorite Movie">
                        <div class="card-img-overlay">
                            <h4 class="card-title"><b>Movie</b></h4>
                            <p class="card-text"> My favorite movie is <i>Pulp
                                    Fiction</i> directed by Quentin Tarantino.</p>
                        </div>
                    </div>
                </div>
            </div>
            <form style="margin:auto;width:60%" action="form.asp" target="_blank">
                <br><br><p>Feel free to have a look around. Enjoy!</p>
                <p class="w3-large w3-text-pink">Don't hesitate to contact me!</p>
                <div class="w3-group">
                    <label><b>Name:</b></label>
                    <input class="w3-input w3-border" type="text" required name="Name">
                </div>
                <div class="w3-group">
                    <label><b>Email:</b></label>
                    <input class="w3-input w3-border" type="text" required name="Email">
                </div>
                <div class="w3-group">
                    <label for="message">Message:</label>
                    <textarea class="form-control" rows="5" id="comment"></textarea>
                </div>
                <button type="submit" class="w3-btn w3-btn-block w3-padding-12 w3-dark-grey" id="submit">Send</button>
            </form>
            <br>
        </footer>
        <div class="container" id="copyright">
            Copyright &copy; 2017 - All rights reserved - Fred Javalera
        </div>
    </body>
</html>
