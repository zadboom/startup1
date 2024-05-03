<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Data base</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php
require_once('common.php');
require_once('config.php');
require_once('db.php');


$db=Db :: getInstance();
$records=$db->query("SELECT * FROM x_note LEFT OUTER JOIN x_user ON x_note.user_id=x_user.user_id");

dump($records);
hr();
$records=$db->first("SELECT * FROM x_user");
dump($records);
hr();
Db::getInstance();
hr();
Db::getInstance();
hr();
Db::getInstance();
Db::getInstance();

$db->close();


   ?>
    
</body>
</html>
