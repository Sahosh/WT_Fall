<?php
$name_error=$mb_num_error=$pass_error=$lname_error="";

if (isset($_REQUEST["register"]))

{
  if(strlen($_REQUEST["fname"])<4)
  {
    $name_error="Name cannot be less than 4 chars";
  }
  else
  {
    $name_error="Your first name is ".$_REQUEST["fname"];
  }
  
  if(str_word_count($_REQUEST["lname"])>1)
  {
    $lname_error="Last name can not have more than one word";
  }
  else
  {
    $lname_error="Your last name is ".$_REQUEST["lname"];
  }

  
  if(strlen($_REQUEST["mobile_num"]<11))
  {
    $mb_num_error="Your mobile number is ".$_REQUEST["mobile_num"];
  }
  else
  {
    $mb_num_error="Mobile number should be 11 digits";
  }

  if(htmlspecialchars($_REQUEST["password"]))
  {
    $pass_error="Password is not valid";
  }
  else
  {
    $pass_error="";
  }

  /*$mail_error=""
  if()
  {
    $mail_error="Email format is not correct";
  }

  else
  {
    $mail_error="Your email is ".$_REQUEST["mail_id"];
  }*/


}
  

?>
