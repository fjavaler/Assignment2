<!DOCTYPE html>
<html>
    <head>
        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <title>E-Commerce</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Noto+Sans" rel="stylesheet">
        <link href="css/normalize.css" rel = "stylesheet" type = "text/css">
        <link rel="stylesheet" type="text/css" href="css/assignment2Styles.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3.css">
        <link rel="shortcut icon" href="images/favicon.ico"/>
        <script>
            function loginfilled()
            {
                name = document.getElementById('username').value;
                password = document.getElementById('password').value;
                thereturn = true;
                if (name == "")
                {
                    document.getElementById('username').style.borderColor = "red"
                    thereturn = false;
                }
                if (password == "")
                {
                    document.getElementById('password').style.borderColor = "red"
                    thereturn = false;
                }
                return thereturn
            }
        </script>
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
                <div class="row">
                    <div id="loginPanelContainer" class="col-md-6 col-md-offset-3">
                        <div class="panel panel-login" id="loginPanel">
                            <div class="panel-heading" id="panelHeading">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <a href="#" class="active" id="login-form-link">Login</a>
                                    </div>
                                    <div class="col-xs-6">
                                        <a href="assignment2.php" id="register-form-link">Register</a>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form id="login-form" action="eCommerceLoginCheck.php" method="post" role="form" style="display: block;">
                                            <div class="form-group col-sm-12">
                                                <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                            </div>
                                            <div class="form-group col-sm-12">
                                                <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                                            </div>
                                            <div class="form-group text-center col-sm-12">
                                                <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                                <label for="remember"> Remember Me</label>
                                            </div>
                                            <div class="form-group col-sm-12">
                                                <div class="row">
                                                    <div class="col-sm-6 col-sm-offset-3">
                                                        <input type="submit" name="Submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In" onclick="return loginfilled();">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" id="border">
            <img id="border-image" src="images/MosaicBorder.png" alt="Border">
        </div>
        <h1 id="eCommerceH1"><span id="eCommerceText">Login</span></h1>
        <div class="container" id="spacer">
        </div>
        <!--copyright row-->
        <div class="container" id="copyright">
            Copyright &copy; 2017 - All rights reserved - Frederick Javalera
        </div>
    </body>
</html>