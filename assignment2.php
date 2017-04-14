<!DOCTYPE html>
<html>
    <head>
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
        <script src="js/bootstrap.min.js" type="text/javascript">
        </script>
        <script src="js/jquery-3.1.1.min.js" type="text/javascript">
        </script>
    </head>
    <body>
        <!-- !PAGE CONTENT! -->
        <div class="w3-container" id="picAndBackground">
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
                <img src="/images/friendsAndFamily.png" id="friendsPic" class="img-rounded" alt="Friends and Family">
            </div>
        </div>
        <div class="container" id="border">
            <img id="border-image" src="images/MosaicBorder.png" alt="Border">
        </div>
        <!-- Footer and form -->
        <div class="container" id="phpAndTableContainer">
            <footer class="w3-center" id="friendsAndFamily">
                <h1 id="friendsAndFamilyH1"><span id="friendsAndFamilyText">Friends and Family</span></h1>
                <p>Please enter the first and last name, or phone number, of the person whose contact information you are searching for.</p>
                <p>Or feel free to create an account! Just fill out all of the fields below.</p>
                <br><br>
                <div class="container col-lg-3" id="tan">
                    <form style="margin:auto;width:90%" method="post" role="form" action="assignment2Return.php">
                        <div class="container">
                            <div class="form-group">
                                <label for="first">First Name:</label>
                                <input name="first" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="last">Last Name:</label>
                                <input name="last" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number:</label>
                                <input name="phone" type="text" class="form-control"  placeholder="(555) 555-5555">
                            </div>
                            <div class="form-group">
                                <label for="address">Address:</label>
                                <input name="address" type="text" class="form-control">
                            </div>
                        </div>

                        <div class="container">
                            <div class="form-group">
                                <label for="city">City:</label>
                                <input name="city" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="state">State:</label>
                                <br>
                                <select name="state">
                                    <option value="AL">Alabama</option>
                                    <option value="AK">Alaska</option>
                                    <option value="AZ">Arizona</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="CA">California</option>
                                    <option value="CO">Colorado</option>
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="DC">District Of Columbia</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="HI">Hawaii</option>
                                    <option value="ID">Idaho</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IN">Indiana</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NV">Nevada</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="OH">Ohio</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="OR">Oregon</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="TX">Texas</option>
                                    <option value="UT" selected>Utah</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WA">Washington</option>
                                    <option value="WV">West Virginia</option>
                                    <option value="WI">Wisconsin</option>
                                    <option value="WY">Wyoming</option>
                                    <option value="MX">Mexico</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="zip">Zip:</label>
                                <input name="zip" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="birthDate">Birth Date:</label>
                                <input name="birthDate" type="date" class="form-control">
                            </div>
                        </div>

                        <div class="container">
                            <div class="form-group">
                                <label for="username">Username:</label>
                                <input name="username" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password">Password:</label>
                                <input name="password" type="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="sex">Sex:</label><br>
                                <select name="sex">
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="relationship">Relationship:</label><br>
                                <select name="relationship">
                                    <option value="friend">Friend</option>
                                    <option value="family">Family</option>
                                    <option value="co-worker">Co-worker</option>
                                </select>
                            </div>
                        </div>

                        <!--buttons-->
                        <div class="btn-group">
                            <button type="submit" value="Search" name="action" class="btn btn-default">Search</button>
                            <button type="submit" value="Update" name="action" class="btn btn-default">Update</button>
                            <button type="submit" value="Create" name="action" class="btn btn-default">Create</button>
                        </div>
                    </form>
                </div>
            </footer>
        </div>

        <!--copyright row-->
        <div class="container" id="copyright">
            Copyright &copy; 2017 - All rights reserved - Frederick Javalera
        </div>
    </body>
</html>
