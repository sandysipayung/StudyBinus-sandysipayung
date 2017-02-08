<?php

if (!empty(@$_POST['submit'])) {
    //tombol submit diklik
    if (@$_POST['username'] == 'admin' && @$_POST['password'] == '12345') {
        setcookie("myWEB",$_POST['username'],time()+5);
        header("location:index.php");
    } else {
        @$pesan = base64_encode('Username Atau Password Salah');
        header("location:login.php?e=" . @$pesan);
    }
} else {
    header("location:login.php");
}
?>