<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
if(empty(@$_SESSION['myWEB']))
{
    header("location:index.php");
}
?>
<html>
    <head>
        <title>SESSION</title>
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

