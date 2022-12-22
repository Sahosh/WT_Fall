<?php
include("../Control/Control.php");
?>

<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="../CSS/home.css">

</head>
<body>
<div class="navbar">
        <nav>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="#footer">About us</a></li>
                <li><a href="Home.php">Registration</a></li>
                <li><a href="Login.php">Login</a></li>
            </ul>
        </nav>
    </div>
    <div class="smallContainer">
        <div class="backgroundImage">

        </div>
    <div class="header">

<div class="header2">
    <h2>Admin Registration Form </h2>
</div>

<form action="" method="post" enctype="multipart/form-data" onSubmit="return validateForm()">

    <table>

        <tr>
            <td> First Name</td>
            <td><input type="text" name="fname" id="fname" placeholder="Enter your first name"></td>
            <td> <?php
                if (isset($fname_error)) {
                    echo $fname_error;
                }
                ?> <p id="error"></p></td>
        </tr>

        <tr>
            <td>Last Name</td>
            <td><input type="text" name="lname" placeholder="Enter your last name"></td>
            <td> <?php
                if (isset($lname_error)) {
                    echo $lname_error;
                }
                ?></td>
        </tr>

        <tr>
            <td>Father's Name</td>
            <td><input type="text" name="frname"></td>
            <td></td>
        </tr>
        <tr>
            <td>Mother's Name</td>
            <td><input type="text" name="moname"></td>
            <td><?php echo $moname_error; ?></td>
        </tr>
        <tr>
            <td>Date of birth</td>
            <td><input type="date" name="dob"></td>
            <td></td>
        </tr>
        <tr>
            <td>Gender:
            <input type="radio" name="gender" id="Male" value="Male">Male
            <input type="radio" name="gender" id="Female" value="Female">Female</td>
            <td><span id="radio_error"></span></td>
        </tr>
        <tr>
            <td>Email ID</td>
            <td><input type="text" name="mail_id" id="mail_id"></td>
            <td><span id="mail_error"> <?php echo $mail_error; ?> </span></td>


        </tr>
        <tr>
            <td>Mobile No.</td>
            <td><input type="text" name="mobile_num"></td>
            <td><?php echo $mb_num_error; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><textarea name="address" rows="5" cols="20"></textarea></td>
            <td><?php echo $address_error; ?></td>

        <tr>
            <td>Nationality</td>
            <td><input type="text" name="nationality"></td>
            <td><?php echo $nationality_error; ?></td>
        </tr>

        <tr>
            <td>NID Number</td>
            <td><input type="text" name="nid_number"></td>
            <td><?php echo $nid_error; ?></td>
        </tr>

        <tr>
            <td>Website</td>
            <td><input type="text" name="url" id="url"></td>
            <td><?php echo $url_error; ?><p id="url_error"></td>
        </tr>


        <tr>
            <td>Password</td>
            <td><input type="password" name="password" id='password'></td>
            <td><?php echo $pass_error; ?><p id="password_error"></td>
        </tr>

        <tr>
            <td>Re-type Password</td>
            <td><input type="password" name="rpassword" id='rpassword'></td>
            <td><?php echo $rpass_error; ?><p id="error"></td>
        </tr>

        <tr>
            <td>Upload Image</td>
            <td><input type="file" name="myfile"></td>
        </tr>

    </table>
    <br>

    <h4><input type="submit" name="register" id="register" value="Register">
        <div class="submit"></div>
    </h4>


</form>

    </div>
    </div>



<center><a href="../View/Login.php">Go to Login Page </a></center>
<script src="../JS/Script.js"></script>
</body>
</html>