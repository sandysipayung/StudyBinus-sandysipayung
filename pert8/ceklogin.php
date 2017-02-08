<?php

if (!empty(@$_POST['submit'])) {
    //tombol submit diklik
    if (@$_POST['username'] == 'admin' && @$_POST['password'] == '12345') {
        header("location:../pert2/index.html");
    } else {
        @$pesan = base64_encode('Username Atau Password Salah');
        header("location:login2.php?e=" . @$pesan);
    }
} else {
    header("location:login2.php");
}
?>