<?php
	echo @$_POST['username'];
	echo "<br/>";
	echo @$_POST['password'];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<form action="index.php" method="post">
        <table align="center" border="2" width="300" height="200">
            <tr>
                <td colspan="3" align="center">LOGIN</td>
            </tr>
            
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" id="tusername"/></td>
            </tr>
            
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password" id="tpassword"/></td>
            </tr> 
          
             <tr>
                <td colspan="3" align="center">
                <input type="submit" name="submit" value="LOGIN"/>
                &nbsp;&nbsp;&nbsp;
                <input type="reset" name="reset" value="RESET"/>
                </td>
            </tr>     
        </table>
	</form>
</body>
</html>
