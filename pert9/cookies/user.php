<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if (empty(@$_COOKIE['myWEB'])) {
    header("location:index.php");
}
require_once 'cookie.php';
?>
<html>
    <head>
        <title>COOKIE</title>
    </head>
    <body>
        <?php
        require_once 'menu.php';
        ?>
        <div>
            <h3 align="center">Ini Halaman USER</h3>
        </div>
    </body>
</html>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

