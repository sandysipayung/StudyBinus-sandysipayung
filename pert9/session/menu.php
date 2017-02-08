<div align="right">
    <?php
    if (@isset($_SESSION['myWEB'])) {
        ?>
        Welcome! <?php echo @$_SESSION['myWEB']; ?>
        <?php
    }
    ?> 
</div>

<div align="center">
    <a href="index.php">HOME</a> |
    <a href="product.php">PRODUCT</a> |
    <?php
    if (!empty(@$_SESSION['myWEB'])) {
        ?>
        <a href="user.php">USER</a> |
        <a href="logout.php">LOGOUT</a>
        <?php
    } else {
        ?>
        <a href="login.php">LOGIN</a>
        <?php
    }
    ?>
</div>