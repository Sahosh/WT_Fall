<?php
class mydb{

    function openCon(){
$conn=new mysqli("localhost","root","","webtech");
return $conn;
    }

    function insertUser($conn,$tablename, $fname, $lname, $frname,$moname,
    $dob,$gender,$mail_id,$mobile_num,
    $address,$nationality,$nid_number,$url,$password,$image)
    {
$sqlstr="INSERT INTO $tablename (First_name,Last_name,Father_name,Mother_name,
Date_of_birth,Gender,Email,Mobile,Address,
Nationality,NID,Website,Password,Image) VALUES
 ('$fname', '$lname','$frname','$moname','$dob','$gender','$mail_id','$mobile_num',
 '$address','$nationality','$nid_number','$url', '$password','$image')";
  return $conn->query($sqlstr);
    }

    function checkLogin($conn,$tablename,$mail_id,$password)
{
    $sql="SELECT * FROM $tablename WHERE Email='$mail_id' AND Password='$password'";
   return $conn->query($sql);
}

function showUser($conn,$tablename,$mail_id)
{
    $sql="SELECT * FROM $tablename WHERE Email='$mail_id'";
    return $conn->query($sql);
}

function showAll($conn,$tablename)
{
    $sql="SELECT * FROM $tablename";
    return $conn->query($sql);
}

function updateAdmin($conn,$tablename, $fname, $lname, $frname,$moname,
$dob,$gender,$mail_id,$mobile_num,
$address,$nationality,$nid_number,$url,$password,$image)
{
    $id = $_SESSION['id'];
    $sql="UPDATE $tablename SET First_name='$fname', Last_name='$lname',Father_name='$frname', 
    mother_name='$moname',Date_of_birth='$dob',Gender='$gender',Email='$mail_id',
    Mobile='$mobile_num',Address='$address',Nationality='$nationality',NID='$nid_number',
    Website='$url',Password='$password',
    image='$image' WHERE id='$id'";
     return $conn->query($sql);
}




    function closeCon($conn)
    {
$conn->close();
    }

}
?>