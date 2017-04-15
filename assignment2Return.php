<?php
require_once 'DataBaseConnection.php';
$first = $_POST['first'];
$first = htmlentities($first);

$last = $_POST['last'];
$last = htmlentities($last);

$phone = $_POST['phone'];
$phone = htmlentities($phone);

$address = $_POST['address'];
$address = htmlentities($address);

$city = $_POST['city'];
$city = htmlentities($city);

$state = $_POST['state'];
$state = htmlentities($state);

$zip = $_POST['zip'];
$zip = htmlentities($zip);

$birthDate = $_POST['birthDate'];

$username = $_POST['username'];
$username = htmlentities($username);

$password = $_POST['password'];
$password = htmlentities($password);

$sex = $_POST['sex'];
$sex = htmlentities($sex);

$relationship = $_POST['relationship'];
$relationship = htmlentities($relationship);

$action = $_POST['action'];
?>
<!DOCTYPE html>
<html>
    <head>
        <script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <title>Assignment 2</title>
        <meta charset="UTF-8">
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
        <div class="w3-container" id="picAndBackground">
            <!-- Header -->
            <nav class="navbar navbar-default navbar-collapse" id="navbar">
                <div class='navbar-header'>
                    <div class='btn-group btn-group-justified' role='group' id="navButtons">
                        <a href="/myWebPage.php" role="button" class="btn btn-lg btn-secondary" id="navButton">Home</a>
                        <a href="#about" role="button" class="btn btn-lg btn-secondary" id="navButton">About</a>
                        <a href="/assignment1.php" role="button" class="btn btn-lg btn-secondary" id="navButton">Assignment 1</a>
                        <a href="/assignment2.php" role="button" class="btn btn-lg btn-secondary" id="navButton">Assignment 2</a>
                        <a href="/assignment3.php" role="button" class="btn btn-lg btn-secondary" id="navButton">Assignment 3</a>
                        <a href="/e-commerce.php" role="button" class="btn btn-lg btn-secondary" id="navButton">E-commerce</a>
                        <a href="/exercises.php" role="button" class="btn btn-lg btn-secondary" id="navButton">Exercises</a>
                    </div>
                </div>
            </nav>

            <!-- Photo -->
            <div class="container-fluid" id="imgContainer">
                <div class="row container-fluid">
                    <div class="span4"></div>
                    <div class="span4"></div><img src="/images/friendsAndFamily.png" id="friendsPic" class="img-rounded img-responsive center-block" alt="Friends and Family">
                    <div class="span4"></div>
                </div>
            </div>
        </div>
        <div class="container" id="border">
            <img id="border-image" src="images/MosaicBorder.png" alt="Border">
        </div>
        <!-- Footer and form -->
        <div class="container" id="phpAndTableContainer">
            <?php
            switch ($action)
            {
                case "Create":
                    $insert = "INSERT INTO `Assignment2`.`FriendDB` (`Username`, `First_Name`, `Last_Name`, `Phone_Number`, `Address`, `City`, `State`, `Zip`, `Birthdate`, `Password`, `Sex`, `Relationship`) VALUES ( '$username', '$first', '$last', '$phone', '$address', '$city', '$state', '$zip', '$birthDate', '$password', '$sex', '$relationship')";
                    $success = $con->query($insert);
                    if ($success == FALSE)
                    {
                        $failmess = "Whole query " . $insert . "<br>";
                        echo $failmess;
                        die('Invalid query: ' . mysqli_error($con));
                    }
                    else
                    {
                        echo "Friend or family member was added<br>";
                        echo "<br><br><a href='assignment2.php'><span id='span'><b>Back</b></span></a>";
                    }
                    break;

                case "Update":
//                            $update = "";
                    break;

                case "Search":
                    if ($first != '')
                    {
//                            look for matching first name
                        $search = "SELECT `First_Name`, `Last_Name`, `Phone_Number`, `Username`, `Address`, `City`, `State`, `Zip`, `Birthdate`, `Sex`, `Relationship` FROM `Assignment2` . `FriendDB` WHERE `First_Name` = '$first';";
                        $return = $con->query($search);
                        if ($return == FALSE)
                        {
                            $message = "No one with the first name" . $first . "was found.<br>";
                            echo $Message;
                            die('Invalid query: ' . mysqli_error($con));
                        }
                        else
                        {
                            echo "<table class=\"table\"><th><b>Username</b></th><th><b>First Name</b></th><th><b>Last Name</b></th><th><b>Phone Number</b></th><th><b>Address</b></th><th><b>City</b></th><th><b>State</b></th><th><b>Zip</b></th><th><b>Birth Date</b></th><th><b>Sex</b></th><th><b>Relationship</b></th>";
                            while ($row = $return->fetch_assoc())
                            {
                                echo "<tr><td>" . $row['Username']
                                . "</td><td>" . $row['First_Name']
                                . "</td><td>" . $row['Last_Name']
                                . "</td><td>" . $row['Phone_Number']
                                . "</td><td>" . $row['Address']
                                . "</td><td>" . $row['City']
                                . "</td><td>" . $row['State']
                                . "</td><td>" . $row['Zip']
                                . "</td><td>" . $row['Birthdate']
                                . "</td><td>" . $row['Sex']
                                . "</td><td>" . $row['Relationship']
                                . "</td></tr>";
                            }
                            echo "</table><hr>";
                        }
                    }
                    else if ($last != '')
                    {
//                            look for matching last name
                        $search2 = "SELECT `First_Name`, `Last_Name`, `Phone_Number`, `Username`, `Address`, `City`, `State`, `Zip`, `Birthdate`, `Sex`, `Relationship` FROM `Assignment2` . `FriendDB` WHERE `Last_Name` = '$last';";
                        $return2 = $con->query($search2);
                        if ($return2 == FALSE)
                        {
                            $message2 = "No one with the last name" . $last . "was found.<br>";
                            echo $Message2;
                            die('Invalid query: ' . mysqli_error($con));
                        }
                        else
                        {
                            echo "<table class=\"table\"><th>Username</th><th>First Name</th><th>Last Name</th><th>Phone Number</th><th>Address</th><th>City</th><th>State</th><th>Zip</th><th>Birth Date</th><th>Sex</th><th>Relationship</th>";
                            while ($row2 = $return2->fetch_assoc())
                            {
                                echo "<tr><td>" . $row2['Username']
                                . "</td><td>" . $row2['First_Name']
                                . "</td><td>" . $row2['Last_Name']
                                . "</td><td>" . $row2['Phone_Number']
                                . "</td><td>" . $row2['Address']
                                . "</td><td>" . $row2['City']
                                . "</td><td>" . $row2['State']
                                . "</td><td>" . $row2['Zip']
                                . "</td><td>" . $row2['Birthdate']
                                . "</td><td>" . $row2['Sex']
                                . "</td><td>" . $row2['Relationship']
                                . "</td></tr>";
                            }
                            echo "</table><hr>";
                        }
                    }
                    break;

                default:
                    echo "An unexpected error occurred. Pleases try again.";
                    break;
            }
            mysqli_close($con);
            ?>
        </div>
        <footer class="container" id="anchorAndCopywrite">
            <a href='assignment2.php'><span id='span'><b>Back</b></span></a>
            <div class='container' id='copyright'>Copyright &copy; 2017 - All rights reserved - Frederick Javalera</div>
        </footer>
    </body>
</html>
