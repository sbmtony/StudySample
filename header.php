<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
session_start();
setcookie('user','tony',time()+3600,'path','domain');
$before_views = file_get_contents ('views.txt');
$tol_views = $before_views + 1;
file_put_contents('views.txt',$tol_views);
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo isset ($_GET['method'])?$_GET['method']:"上传文件、编辑、保存";?> -- PHP TEST</title>
</head>

<body>
<hr />
