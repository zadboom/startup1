<?
require_once('main.php');
$isguest=!isset($_SESSION['email']);
if(!$isguest){
    $user_id=$_SESSION['user_id'];
    $db=DB::getInstance();
    $records=$db->query("SELECT * FROM x_note WHERE user_id=$user_id");

}else{
    $records=null;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>HomePage</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    
    <link rel='stylesheet' type='text/css' media='screen' href='css/base.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
    
</head>
<body>
    <div id="header-wrapper">
       <div id=#header-top-left> 
        <?if($isguest){?>
        <img class="profile-image" src="images/profile-22.png">
        <span style="margin-left: 5px;"><?=_header_guest?><?=_header_wellcome?></span>
        <a   style="margin-left: 5px; text-decoration:none ;" class="btn-blue" href="login.php"><?=_btn_login?></a>
        <?}else{?>
        <img class="profile-image" src="images/profile-22.png">
        <span style="margin-left: 5px;"><?=$_SESSION['email']?><?=_header_wellcome?></span>
        <a id="#link" style="margin-left: 5px;text-decoration:none;" class="btn-blue" href="logout.php"><?=_btn_logout?></a>
        <?}?>
        </div>
    </div>

    <div id="content">
        <?if($isguest){?>
           <div style="margin-top: 60px; text-align: center; color: #f40; font-size: 20px;">
           <span>You need to Login in the system to fully use the system!</span>
           </div>
          
       <?}else{?>
        <ul class="todo-entry">
            <li>Title</li>
            <li>Description</li>
            <li>Time</li>

        </ul>
           <?foreach ($records as $record) {?>
        <ul class="todo-entry">
            <li><?=$record['title']?></li>
            <li><?=$record['description']?></li>
            <li><?=$record['eventTime']?></li>

        </ul>

            <?}?>
        <? }?> 

    </div>
</body>
</html>