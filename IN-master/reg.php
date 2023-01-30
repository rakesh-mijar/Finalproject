<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "DBMS3";


if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)) {

    die("failed to connect!");
}
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $First = $_POST['fname'];
    $Last = $_POST['lname'];
    $USN = $_POST['usn'];
    $Email = $_POST['umail'];
    $Mobile = $_POST['mob'];
    $Gender = $_POST['gen'];
    $SelectyourBranch = $_POST['sel'];
    $Selectcurrentsemester = $_POST['cs'];

    if (!empty($First) && !empty($Last) && !empty($USN) && !empty($Email) && !empty($Mobile) && !empty($Gender) && !empty($SelectyourBranch)) {

        //save to database
        //$user_id = random_num(20);
        $query = "INSERT INTO `regs` (`First Name`, `Last Name`, `USN`, `Email`, `Mobile`, `Gender`, `Branch`, `Semester`) VALUES ('$First', ' $Last', '$USN', '$Email', '$Mobile', '$Gender', '$SelectyourBranch', '$Selectcurrentsemester')";
        if ($query) {
            echo "<div class='alert alert-success' role='alert'>
			<h4 class='alert-heading'>Registered Succesfully</h4>
			</div>";
        }

        mysqli_query($con, $query);

        header("Location: clubs.php");
        die;
    } else {
        echo "Please enter some valid information!";
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <link rel="stylesheet" href="index.css" type="text/css">

</head>

<body>
    <div class="container">
        <div class="row register">
            <h1>Registration Form</h1>
            <div class="col-sm-3">
            </div>
            <div class="col-sm-6 reg">
                <form class="form-horizontal hr" method="post" action="reg.php">

                    <div class="form-group">
                        <label class="control-label col-sm-4" for="fname">First Name </label>
                        <div class="col-sm-8">
                            <input type="text" name="fname" class="form-control" id="uname" placeholder="Enter your First Name" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-4" for="lname">Last Name</label>
                        <div class="col-sm-8">
                            <input type="text" name="lname" class="form-control" id="uname" placeholder="Enter your LastName" />
                        </div>

                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-4" for="usn">USN</label>
                        <div class="col-sm-8">
                            <input type="text" name="usn" class="form-control" id="uname" placeholder="Enter your usn">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-4" for="umail">Email</label>
                        <div class="col-sm-8">
                            <input type="text" name="umail" class="form-control" id="uname" placeholder="Enter your mail">
                        </div>
                    </div>

                    <div class="form-group">
                        <Gender class="control-label col-sm-4" for="mob">Mobile Number </label>
                            <div class="col-sm-8">
                                <input type="number" name="mob" class="form-control" id="uname" placeholder="Enter your mobile number">
                            </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-4" for="gen">Gender :</label>
                        <div class="sam">
                            <label for="gen">
                                <input type="radio" name="gen" id="m" name="first_item" value="Male" />
                                Male
                            </label>
                        </div>
                        <div class="col-sm-2">
                            <label>
                                <input type="radio"  name="gen" id="ma" name="second_item" value="Female">
                                Female
                            </label>
                        </div>
                        <div class="col-sm-3">
                            <label>
                                <input type="radio" name="gen" id="mal" name="third_item" value="Others">
                                Others
                        </div>

                    </div>
                    <div class="form-group">
                        <select class="form-select" name="sel" aria-label="Default select example">
                            <option selected>Select your Branch</option>
                            <option value="CSE">CSE</option>
                            <option value="ISE">ISE</option>
                            <option value="ECE">ECE</option>
                            <option value="EEE">EEE</option>
                            <option value="MEC">MEC</option>
                            <option value="MEC">MEC</option>
                            <option value="MT">MT</option>
                            <option value="CIV">CIV</option>
                            <option value="IOT">IOT</option>
                            <option value="AI&ML">AI&ML</option>
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                        <select class="form-select" name="cs" aria-label="Default select example">
                           <option selected>Select current semester</option>
                            <option value="1">1st</option>
                            <option value="2">2nd</option>
                            <option value="3">3rd</option>
                            <option value="4">4th</option>
                            <option value="5">5th</option>
                            <option value="6">6th</option>
                            <option value="7">7th</option>
                            <option value="8">8th</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-8">
                            <a href="Clubs.php"><button type="submit" class="btn btn-primary">Register</button></a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-3">
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html> -->