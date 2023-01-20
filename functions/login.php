<?php session_start();
require $_SERVER['DOCUMENT_ROOT'].'/CITRUS/config/loginConfig.php'; 
	
	if(isset($_POST['Submit'])){
		
		$logins = array($storeduser => $storedpass, 'username1' => 'password1','username2' => 'password2');
		
		$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
		$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
		
		if (isset($logins[$Username]) && $logins[$Username] == $Password){
			$_SESSION['UserData']['Username']=$logins[$Username];
			header("location:editDB.php"); //change this path to where chocogreenberry is, if needed
			exit;
		} else {
			
			$msg="<span style='color:red'>Invalid Login Details</span>";
		}
	}
?>
<!doctype html>
<html>
<head>
</style>
<meta charset="utf-8">
<title>login</title>
<link href="./css/style.css" rel="stylesheet">
</head>
<body>
<div id="Frame0">
    <center>
  <h1>login page</h1>
    <center>
</div>
<br>
<form action="" method="post" name="Login_Form">
  <table width="300" height="100" border="1px solid " align="center" cellpadding="5" cellspacing="1" class="Table">
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } 
    ?>
    <tr>
    
      <td colspan="2" align="left" valign="top"><h3>Login</h3></td>
    </tr>
   
      
      <td align="right" valign="top">Username</td>
      <td><input name="Username" type="text" class="Input"></td>
    </tr>
    <tr>
      <td align="right">Password</td>
      <td><input name="Password" type="password" class="Input"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="Submit" type="submit" value="Login" class="Button3"></td>
      
    </tr>
  </table>
</form>
</body>
</html>

