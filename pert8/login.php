<?php
    if(isset($_POST['submit']))
    {
        if($_POST['username']=='')
        {
            $pesan='Username Harus Diisi';
        }
        else if(empty($_POST['password']))
        {
            $pesan='Password Harus Diisi';   
        }
        else if($_POST['username']=='admin' && $_POST['password']=='12345')
        {
            $pesan='login berhasil';
        }
        else
        {
            $pesan='username atau password salah bro';
        }
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>POST</title>
</head>

<body>
	<form action="#" method="post">
        <table align="center" border="9" width="300" height="200">
            <tr>
                <td colspan="3" align="center">LOGIN</td>
            </tr>
            
            <tr>
                <td>Username</td>
                <td>:</td>
                <td>
                    <input type="text" name="username" id="tusername" value=" <?php echo @$_POST['username']; ?>" />
                </td>
            </tr>
            
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password" id="tpassword"/></td>
            </tr> 

            <?php
                if(!empty($pesan))
                {
                    ?>
                    <tr>
                        <td colspan="3" align="center" fcolor="red">
                            <?php echo @$pesan ; ?>
                        </td>
                    </tr>
                    <?php    
                }
            ?>
            
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