<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
#apDiv2 {	position:absolute;
	left:91px;
	top:34px;
	width:1167px;
	height:650px;
	z-index:1;
	background-color: #DDD
}
#footer {	position:absolute;
	left: 142px;
	top: 591px;
	width: 947px;
	height: 53px;	
}
#form {	position:absolute;
	left: 259px;
	top: 113px;
	width: 741px;
	height: 384px;
}
#heading {
	position:absolute;
	left: 128px;
	top: 27px;
	width: 980px;
	height: 55px;
}
#heading {		text-shadow:#666;
		text-transform:capitalize;
		font-style:inherit;
		font-family:Tahoma, Geneva, sans-serif;
		font-stretch:extra-expanded;
		text-align:center;
}
</style>
</head>

<body>

<p>&nbsp;</p>
<div id="apDiv2">
  <div id="heading">FEEDBACK</div>
  <div id="form">
    <div align="center">
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <?php

$name = $_POST['fname'];
  $user = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $vpassword = $_POST['verifypassword'];



//reference:PHP and MySQL® Web Development, Fourth Edition Copyright © 2009 by Pearson Education, Inc.

	  if (!ereg('^[a-zA-Z]+$', $name))
	   {
		   echo "<p>Please enter valid last/first Name!!!!</p>";
			
	 	 }
		 
		 else  
	   if (!ereg('^[a-zA-Z0-9].+$', $user))
	  	 {
		   echo "<p>Please enter valid username!!!!</p>";
			
		 }
		 
		 else  
		 if (!ereg('^[a-zA-Z0-9_\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$', $email))
			{
				  echo "<p>Please enter valid email address!!!!</p>";
			}
		  
		  else
		  if(!ereg('^[a-zA-Z0-9].{8,32}', $password))
		  {
			 
			   echo "Please enter 9-32 charcter password (E.g L3r@to##)!!";  
			}
			else
		if($vpassword != $password )
			 {
			  echo "Password not matching!!!!";
		  }
 
else
{
echo "<p>All fieds are perfect!!!!!<br/ >" ."<p> Thanx for registering on my page!!!";

}
?>
    </div>
  </div>
  <div id="footer">
    <div align="center" >
      <marquee behavior="scroll" direction="left">
        &copy;copyright -L Bartman (210291920)
      </marquee>
    </div>
  </div>
</div>
<p>&nbsp;</p>
</body>
</html>