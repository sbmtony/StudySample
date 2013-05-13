<hr>
<a href="index.php">back</a>
<hr />
<?php

if ( isset($_SESSION['views'])){
	$_SESSION['views'] = $_SESSION['views'] +1; 
} else {
	$_SESSION['views'] = 1 ;
}
$_COOKIE['user'] = tony;
if (isset($_COOKIE['user'])){
$txt = "Hello ".$_COOKIE['user'].", welcome back !";

}
else {
$txt = "Hello Guest, welcome!";
}


echo "$txt <br /> you have view ". $_SESSION['views']." times<br />This page have been viewed for $tol_views times!";
?>
</body>
</html>
