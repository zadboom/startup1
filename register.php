<?
require_once('main.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login page</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    
    <link rel="stylesheet" type="text/css" href="css/base.css" media="screen"/>

    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen"/>


         
</head>
<body>

    <div class="tac">
        <br>
        <img src="images/notes1.png"><br><br>
        <form action="register-check.php" method="post">
         <input type="text" placeholder="<?=_ph_email?>" name="email"><br><br>
         <input type="password" placeholder="<?=_ph_password?>" name="password1"><br><br>
         <input type="password" placeholder="<?=_ph_confirm_Password?>" name="password2"><br><br>
         <input type="text" placeholder="<?=_ph_name?>" name="name"><br><br>
         <input type="text" placeholder="<?=_ph_nickname?>" name="nickname"><br><br>
         <button type="submit" class="btn-blue"><?=_btn_register?></button>
         </form>
         <br>
         <br><br>
        
   </div>
   <br>

</div>

    
    
</body>

</html>