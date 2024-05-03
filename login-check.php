<?
require_once('main.php');
$email=$_POST['email'];
$password=$_POST['password'];


$db=Db::getInstance();

$records=$db->first("SELECT * FROM x_user WHERE email='$email'");

if($records==null){
    $message=_email_not_register; 
    require_once('msg-fail.php');
     exit;

//echo "fail";
}else{
  global $config;
  $hashedPassword=encodePassword($password);
   if($records['password']==$hashedPassword){
    $_SESSION['email']=$records['email'];
    $_SESSION['user_id']=$records['user_id'];
    $message=_login_wellcome;
    require_once('msg-success.php');
    exit;
   // echo"success"." ".$records['password']."=".$password;
   }else{
    $message=_invalid_password;
    require_once('msg-fail.php');
    exit;
  // echo"fail"." ".$records['password']."=!".$password;
 }
}


