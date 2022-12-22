<?php
include("../Model/db.php");
$fname_error=$mb_num_error=$pass_error=$lname_error=
$frname_error=$moname_error=$mail_error=$nid_error=
$dob_error=$address_error=$nationality_error=
$rpass_error=$url_error="";
$hasError=0;
$image="";

// if(isset($_REQUEST["gender"]))
// {
//     echo $_REQUEST["gender"];
// }
// else
// {
//     echo "no radio selected";
//     $hasError=1;
// }

if (isset($_REQUEST["register"]))

{
$frname_error=($_REQUEST["frname"]);
$moname_error=($_REQUEST["moname"]);
$dob_error=($_REQUEST["dob"]);
$mail_error=($_REQUEST["mail_id"]);
$nationality_error=($_REQUEST["nationality"]);
$nid_error=($_REQUEST["nid_number"]);


if(empty($_FILES["myfile"]["name"]))

    {

        echo"No file uploaded ";

    }

    else{

        echo"Your file name is ".$_FILES["myfile"]["name"];

        move_uploaded_file($_FILES["myfile"]["tmp_name"],"../Upload/".$_REQUEST["fname"].".jpg");
        $image= "../uploads/".$_REQUEST["fname"].".jpg";

    }


  if(strlen($_REQUEST["fname"])<4)
  {
    $name_error="Name cannot be less than 4 chars";
    $hasError=1;
  }
  else
  {
    // $fname_error="".$_REQUEST["fname"];
    $fname_error="";
  }




  if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$_REQUEST["url"]))
  {
    $url_error="Invalid URL";
    $hasError=1;
  }

  else
  {
    $url_error="";
  }

  if(str_word_count($_REQUEST["lname"])>1)
  {
    $lname_error="Last name can not have more than one word";
    $hasError=1;
  }
  else
  {
    $lname_error="";
  }

  
  if(strlen($_REQUEST["mobile_num"]<10))
  {
    $mb_num_error="Mobile number should be 11 digits";
    $hasError=1;
  }
  else
  {
    $mb_num_error="";
  }

  if(empty($_REQUEST["password"]))
  {
    $pass_error="Password is not valid";
    $hasError=1;
  }
  else
  {
    $pass_error="";
  }

  if(($_REQUEST["password"])==($_REQUEST["rpassword"]))
  {
    $rpass_error="";
  }
  else
  {
    $rpass_error="Password and Re-type password should be same";
    $hasError=1;
  }

  if(!filter_var($_REQUEST["mail_id"],FILTER_VALIDATE_EMAIL))
  {
    $mail_error="Email format is not correct";
    $hasError=1;
  }

  else
  {
    $mail_error="";
  }

  if($hasError==0)
   {
    $db=new mydb();
    $conobj=$db->openCon();
    $result=$db->insertUser($conobj,"admin",$_REQUEST["fname"],$_REQUEST["lname"],$_REQUEST["frname"],
    $_REQUEST["moname"],$_REQUEST["dob"],$_REQUEST["gender"],$_REQUEST["mail_id"],$_REQUEST["mobile_num"],
    $_REQUEST["address"],$_REQUEST["nationality"],$_REQUEST["nid_number"],$_REQUEST["url"],$_REQUEST["password"],
    $image);
  if($result==true)
{
  echo "<br>" ; 
  echo "Data inserted";
  header('lcoation: Profile.php');
}
else
{
    echo "error".$conobj->error;
}


}


//   // $existingData=file_get_contents("../Data/Data.json");
  //   // $existingDatainPHP=json_decode($existingData);

  //   // $myarr=array
  //   // ("First_Name"=>$_REQUEST["fname"],
  //   //  "Last_Name"=>$_REQUEST["lname"],
  //   //  "Father_Name"=>$_REQUEST["frname"],
  //   //  "Mother_Name"=>$_REQUEST["moname"],
  //   //  "Date_of_Birth"=>$_REQUEST["dob"],
  //   //  "Email_ID"=>$_REQUEST["mail_id"],
  //   //  "Mobile_Number"=>$_REQUEST["mobile_num"],
  //   //  "Address"=>$_REQUEST["address"],
  //   //  "Nationality"=>$_REQUEST["nationality"],
  //   //  "NID_Number"=>$_REQUEST["nid_number"],
  //   //  "Website"=>$_REQUEST["url"],
  //   //  "Password"=>$_REQUEST["password"],
  //   //  "Image"=>"../Upload/".$_REQUEST["fname"].".jpg"
  //   //  );

  //   //  $existingDatainPHP[]=$myarr;
  //   // $myJsonObj=json_encode($existingDatainPHP,JSON_PRETTY_PRINT);
  //   // file_put_contents("../Data/Data.json",$myJsonObj);

  //   // $mydata=file_get_contents("../Data/Data.json");
  //   // $myPHPdata=json_decode($mydata);
    
  //   /*echo"<br>Print From json: ".$myPHPdata[0]->First_Name;
  //   echo"<br>Print From json: ".$myPHPdata[0]->Last_Name;
  //   echo"<br>Print From json: ".$myPHPdata[0]->Father_Name;
  //   echo"<br>Print From json: ".$myPHPdata[0]->Mother_Name;
  //   echo"<br>Print From json: ".$myPHPdata[0]->Date_of_Birth;
  //   echo"<br>Print From json: ".$myPHPdata[0]->Email_ID;
  //   echo"<br>Print From json: ".$myPHPdata[0]->Mobile_Number;
  //   echo"<br>Print From json: ".$myPHPdata[0]->Address;
  //   echo"<br>Print From json: ".$myPHPdata[0]->Nationality;
  //   echo"<br>Print From json: ".$myPHPdata[0]->NID_Number;
  //   echo"<br>Print From json: ".$myPHPdata[0]->Image;*/

  
}
?>


  
   