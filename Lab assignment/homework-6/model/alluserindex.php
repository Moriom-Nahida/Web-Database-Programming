<?php
?>

<!DOCTYPE html>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>fish site</title>
<link rel="stylesheet" href="../css/style.css" />
<style>
#cont{ height:400px; width:79.5%;left:20%; right:20%; top:200px; position:absolute; border:2px solid # 0FF; background-color: #666;}
</style>
</head>

<body>
<div id="logo">
<img src="../img/fish1.jpg" alt="kola" height="150px" width="100%" />
</div>
<div id="ban">
<img src="../img/fish2.jpg" alt="kola" height="150px" width="100%" />
</div>
<div id="menu"> <marquee> <p> This is menu</p></marquee></div>
<div id="lsb"> 
<a href=""><p> Home </p></a>
<p> contact </p>
<p> aboutus </p>
<p> <a href="model/stdform.php">Signup</a> </p>

</div>

<div id="cont">
<?php
include("../view/alluser.php");
?>
</div>
<div id="footer"> 
<div id="footercont"><p> designe by Nahida </p>  </div>
<div id="icon">
<a href="index.html"><img src="img/fish5.jpg" /></a>
<img src="img/fish4.jpg" />
<img src="img/fish3.jpg" />
</div>

</div>


</body>
</html>
