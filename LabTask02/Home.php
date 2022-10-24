<?php
  include("../Control/Control.php");
?>

<html>
    <head>
        <title>Home</title>
</head>
<body style="background-color:powderblue;">
    <h1 align="center">Admin Registration Form</h1>
    <br>
    <br>
    <br>

<form action="" method="post" >
    <table align="center">
        <tr>
    <td>First Name</td>
   <td> <input type="text" name="fname" placeholder="Enter your first name"></td>
   <td><?php echo $name_error;?></td>
</tr>

<tr>
    <td>Last Name</td>
    <td><input type="text" name="lname"placeholder="Enter your last name"></td>
    <td><?php echo $lname_error;?></td>
</tr>

<tr>
    <td>Father's Name</td>
    <td><input type="text" name="frname"></td>
</tr>
<tr>
    <td>Mother's Name</td>
    <td><input type="text" name="moname"></td>
</tr>
<tr>
    <td>Date of birth</td>
    <td><input type="date" name="dob"></td>
</tr>
<tr>
    <td>Gender</td>
    <td><input type="radio" name="gender">Male</td>
</tr>
    <tr><td>&nbsp</td>
    <td><input type="radio" name="gender">Female</td>
</tr>
    <tr>
    <td>Email ID</td>
    <td><input type="text" name="mail_id"></td>
    
</tr>
<tr>
    <td>Mobile No.</td>
    <td><input type="text" name="mobile_num"></td>
    <td><?php echo $mb_num_error;?></td>
</tr>
<tr>
    <td>Address</td>
    <td><textarea name="address" rows="5" cols="20"></textarea></td>

    <tr>
    <td>Nationality</td>
    <td><input type="text" name="nationality"></td>
</tr>

    <tr>
    <td>NID Number</td>
    <td><input type="text" name="nid_number"></td>
</tr>
<tr><td>Upload Image</td>
<td>
    <input type="file"></td>

    <tr>
        <td>Password</td>
       <td> <input type="password" name="password"> </td>
       <td><?php echo $pass_error;?></td>
    </tr>

    <tr>
        <td>Re-type Password</td>
       <td> <input type="password" name="rpassword"> </td>
    </tr>

</table>
<br>
<h4 align="center"><input type="submit" name="register" value="Register"></h4>
</form>
</body>
</html>