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
        <script type="text/javascript">
            function validate()
            {
                const firstRegex = /^[a-zA-Z]+$/;
                const lastRegex = /^[a-zA-Z]+$/
                const phoneRegex = /^[0-9]+$/;
                // first name
                if (firstRegex.exec(document.myForm.first.value) != document.myForm.first.value)
                {
                    alert("Please provide a valid first name! Oh, and please remember to capitalize the first letter.");
                    document.myForm.first.focus();
                    return false;
                }
                // last name
                if (lastRegex.exec(document.myForm.last.value) != document.myForm.last.value)
                {
                    alert("Please provide a valid last name! Oh, and please remember to capitalize the first letter.");
                    document.myForm.last.focus();
                    return false;
                }
                // phone number
                if (phoneRegex.exec(document.myForm.phone.value) != document.myForm.phone.value)
                {
                    alert("Please provide a valid phone number!");
                    document.myForm.phone.focus();
                    return false;
                }
                // address
                if (document.myForm.address.value == "")
                {
                    alert("Please provide your address!");
                    document.myForm.address.focus();
                    return false;
                }
                // city
                if (document.myForm.city.value == "")
                {
                    alert("Please provide your city!");
                    document.myForm.city.focus();
                    return false;
                }
                // state
                if (document.myForm.state.value == "")
                {
                    alert("Please provide your state!");
                    document.myForm.state.focus();
                    return false;
                }
                //zip
                if (document.myForm.zip.value == "" ||
                        isNaN(document.myForm.zip.value) ||
                        document.myForm.zip.value.length != 5)
                {
                    alert("Please provide your zip in the format #####!");
                    document.myForm.zip.focus();
                    return false;
                }
                // birthDate
                if (document.myForm.birthDate.value == "")
                {
                    alert("Please provide your birth date!");
                    document.myForm.birthDate.focus();
                    return false;
                }
                // username
                if (document.myForm.username.value == "")
                {
                    alert("Please provide your username!");
                    document.myForm.username.focus();
                    return false;
                }
                // password
                if (document.myForm.password.value == "")
                {
                    alert("Please provide your password!");
                    document.myForm.password.focus();
                    return false;
                }
                // sex
                if (document.myForm.sex.value == "")
                {
                    alert("Please provide your sex!");
                    document.myForm.sex.focus();
                    return false;
                }
                // relationship
                if (document.myForm.relationship.value == "")
                {
                    alert("Please provide your relationship!");
                    document.myForm.relationship.focus();
                    return false;
                }
                return(true);
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
            <footer class="w3-center" id="friendsAndFamily">
                <h1 id="friendsAndFamilyH1"><span id="friendsAndFamilyText">Friends and Family</span></h1>
                <p>Please enter the first and last name, or phone number, of the person whose contact information you are searching for.</p>
                <p>Or feel free to create an account! Just fill out all of the fields below.</p>
                <br><br>
                <div class="container col-lg-3" id="tan">
                    <form style="margin:auto;width:90%" method="post" name="myForm" onsubmit="return(validate());" action="assignment2Return.php">
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
