<?
require_once('main.php');
if(isset($_SESSION['email'])){
    $message=_already_login.$_SESSION['email'];
    require_once('msg-success.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login page</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    
    <link rel="stylesheet" type="text/css" href="base.css" media="screen"/>

    <link rel="stylesheet" type="text/css" href="style.css" media="screen"/>


         
</head>
<body>

    <div class="tac">
        <br>
        <img src="images/notes1.png"><br><br>
        <form action="login-check.php" method="post">
         <input type="text" placeholder="<?=_ph_email ?>" name="email"><br><br>
         <input type="password" placeholder="<?=_ph_password?>" name="password"><br><br>
         <button type="submit" class="btn-blue"><?=_btn_login?></button>
         </form>
         <br>
            <a href="register.php" class="link-gray"><?=_btn_signup?></a>
         
   </div>
   <br>

</div>
    <?
    

    ?>
    
</body>

</html>