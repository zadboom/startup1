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
    
    <link rel="stylesheet" type="text/css" href="base.css" media="screen"/>

    <link rel="stylesheet" type="text/css" href="style.css" media="screen"/>


         
</head>
<body>

    <div class="tac" style="margin-top: 50px;">
       
       
        <form action="new-check.php" method="post">
         <input type="text" placeholder="<?=_title ?>" name="title" style="width: 300px;"><br><br>
         <textarea type="text" placeholder="<?=_description?>" name="description" style="width: 300px; height:200px ; resize: none;"></textarea><br><br>
         <button type="submit" class="btn-blue"><?=_btn_create?></button>
         </form>
         <br>
           
         
   </div>
   <br>

</div>
    <?
    

    ?>
    
</body>

</html>