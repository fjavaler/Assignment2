<!DOCTYPE html>
<html>
    <head>
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
        <script src="js/jquery.min.js" type="text/javascript">
        </script>
    </head>
    <body>
        <!-- !PAGE CONTENT! -->
        <div class="w3-content" style="max-width:100%">
            <!-- Header -->
            <header class="w3-container w3-xlarge w3-padding-18">
                <a href="/myWebPage.php" class="w3-left w3-btn w3-blue-grey">Home</a>

                <a href="#about" class="w3-right w3-btn w3-blue-grey">About</a>
                <a href="/exercises.php" class="w3-right w3-btn w3-blue-grey">Exercises</a>
                <a href="/e-commerce.php" class="w3-right w3-btn w3-blue-grey">E-commerce</a>
                <a href="/assignment3.php" class="w3-right w3-btn w3-blue-grey">Assignment 3</a>
                <a href="/assignment2.php" class="w3-right w3-btn w3-blue-grey">Assignment 2</a>
                <a href="/assignment1.php" class="w3-right w3-btn w3-blue-grey">Assignment 1</a>
            </header>

            <!-- Photo -->
            <div class="w3-row">
                <img class="img-rounded" id="mePic" src="images/me.png" alt="">
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
                        <img class="card-img" src="images/tech.jpg" alt="My Interests">
                        <div class="card-img-overlay">
                            <h4 class="card-title"><b>Interests</b></h4>
                            <p class="card-text">Hi, my name is Fred Javalera.</p>
                            <p class="card-text">Welcome to my site.</p>
                            <p class="card-text">I'm into programming and all things
                                tech.</p>
                            <p class="card-text">I love learning and outdoor activities like hiking, biking, and running.</p>
                            <p class="card-text">I'm currently enjoying
                                learning about web development and hope to gain some cool skills from this class.</p>
                        </div>
                    </div>
                </div>
                <div class="container" id="bookDiv">
                    <div class="card card-inverse" id="cardInverse">
                        <img class="card-img" src="images/enquiry.jpg" alt="My Favorite Book">
                        <div class="card-img-overlay">
                            <h4 class="card-title"><b>Book</b></h4>
                            <p class="card-text">My favorite book
                                is <u>An Enquiry Concerning Human Understanding</u> by David Hume.</p>
                        </div>
                    </div>
                </div>
                <div class="container" id="movieDiv">
                    <div class="card card-inverse" id="cardInverse">
                        <img class="card-img" src="images/pulpFiction.jpg" alt="My Favorite Movie">
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
                    <label><b>Name</b></label>
                    <input class="w3-input w3-border" type="text" required name="Name">
                </div>
                <div class="w3-group">
                    <label><b>Email</b></label>
                    <input class="w3-input w3-border" type="text" required name="Email">
                </div>
                <div class="w3-group">
                    <label><b>Message</b></label>
                    <input class="w3-input w3-border" type="text" required name="Message" id="messageText">
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
