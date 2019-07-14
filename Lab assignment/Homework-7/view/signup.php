<?php 
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Colors Infinity</title>
<style>
#logo{
	height:150px;
	width:20%;
	background-color:#666;
	left:0px;
	top:0px;
	position:absolute;
	border:#009 solid 2px;
	
}
#ban{
	height:150px;
	width:80%;
	background-color:#093;
	right:0px;
	top:0px;
	position:absolute;
	border: #933 solid 2px;

}
#menu{
	height:50px;
	width:100%;
	background-color: gainsboro;
	right:0px;
	top:150px;
	position:absolute;
	border: #0FF solid 2px;
}
#lsb{ 
    height:400px;
    width:20%; 
    left:0px; 
    top:200px;
    position:absolute;
    border:2px solid #099;
    background-color:#069;
    text-align:center; 
    color:red;
    }
#rsb{
    height:400px; 
    width:20%;
    right:0px; 
    top:200px;
    position:absolute; 
    border:2px solid #099;
    background-color:#069;
    }

#cont{
    height:400px;
    width:59.5%;
    left:20%; 
    right:20%;
    top:200px;
    position:absolute;
    border:2px solid # 0FF;
    background-color: #933;
    }

#contlt{
    height:200px;
    width:50%; 
    left:0px;
    top:0px; 
    position:absolute;
    border:2px solid #099;
    background-color:#069;
    }
#contrt{
    height:200px;
    width:50%; 
    right:0px;
    top:0px; 
    position:absolute;
    border:2px solid  #CCC;
    background-color:#069;
    }
#contld{
    height:200px;
    width:50%;
    left:0px;
    top:200px; 
    position:absolute;
    border:2px solid #063;
    background-color:# 93F;
    }
#contrd{ 
    height:200px;
    width:50%; 
    right:0px;
    top:200px; 
    position:absolute; 
    border:2px solid #063; 
    background-color:# 6C9;
    }
#cont img{
    height:200px; 
    width:100%;
    }
#footer{
	height:50px;
    width:100%;
    background-color: #C69;
	right:0px;
    top:600px;
    position:absolute;
	border: #0FF solid 2px;
}

    ul{ list-style:none; text-align:center;
}
ul li { display:inline; text-align:center; margin-left:50px;}
/* unvisited link */
a:link {
  color: red;
  text-decoration:none;
  transition: linear 0.3s;
  
}
/* visited link */
a:visited {
  color: green;
}
/* mouse over link */
a:hover {
  color: hotpink;
  background-color:#0C3;
  border-radius:50%;
}
/* selected link */
a:active {
  color: blue;
}
/* CSS Document */
    
</style>
</head>

<body>
<div id="logo">
<img src="../img/p1.jpg.jpg" alt="p1" height="150px" width="100%" />
</div>
<div id="ban">
<img src="../img/p2.jpg.png" alt="p2" height="150px" width="100%" />
</div>
<div id="menu">
   <ul>
<li><a href="index.html">Home</a></li>
<li><a href="contact.html">Contact</a></li>
<li><a href="signup.html">Signup</a></li>
<li><a href="login.html">Log in</a></li>
<li><a href="About.html">About</a></li>
</ul>
</div> 
    
<div id="lsb"> 
<a href="index.html"><p> Home </p></a>
<a href="contact.html"><p> Contact </p></a>
<a href="about.html"><p> About </p></a></div>
<div id="rsb"> </div>
<div id = "cont">
<center>
<form id="" name="" method="post" action="../controller/adduser.php">
<p> Customer Signup form</p>
User Name:<input id="uname" type="text" name="uname" /><br />
Password: <input type="password" id="pass" name="pass" /><br />
<input type="submit" value="Signup "/>
</form>
    </center>
</div>
<div id="footer"> 
    <div id="footercont"><p> Design By @Nahida </p>  </div>

</div>


</body>
</html>
