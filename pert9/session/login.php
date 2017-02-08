<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
        <title>SESSION</title>
    </head>
    <body>
        <?php
        include 'menu.php';
        ?>
        <div align="">
            <h3 align="center">Ini Halaman LOGIN</h3>
            <form action="ceklogin.php" method="post">
                <table align="center" border="150" width="300" height="200">
                    <tr>
                        <td colspan="3" align="center">LOGIN</td>
                    </tr>

                    <tr>
                        <td>Username</td>
                        <td>:</td>
                        <td>
                            <input type="text" name="username" id="tusername" />
                        </td>
                    </tr>

                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td><input type="password" name="password" id="tpassword"/></td>
                    </tr> 

                    <?php
                    if (!empty(@$_GET)) {
                        ?>
                        <tr>
                            <td colspan="3" align="center">
                                <?php echo base64_decode(@$_GET['e']); ?>
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
        </div>
    </body>
</html>
