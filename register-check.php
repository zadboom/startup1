<?
require_once('main.php');
$email=$_POST['email'];
$password1=$_POST['password1'];
$password2=$_POST['password2'];
$name=$_POST['name'];
$nickname=$_POST['nickname'];
$time=getCurentDateTime();


$db=Db::getInstance();

$records=$db->first("SELECT * FROM x_user WHERE email='$email'");
if ($records!=null){
  $message=_already_registerd;
  require_once('msg-fail.php');
  exit;

}
if(strlen($password1)<6||strlen($password2)<6){
  $message=_password_weak;
  require_once('msg-fail.php');
  exit;
}
if($password1!=$password2){
 $message=_password_notmatch;
 require_once('msg-fail.php');
  exit;
}
$hashedPassword=encodePassword($password1);
$db->insert("INSERT INTO x_user (email,fullname,nickname,password,registerTime,lastVisitTime) VALUES
                                ('$email','$name','$nickname','$hashedPassword','$time','$time')");
$message=_successfuly_registerd;                                
require_once('msg-success.php');                              

