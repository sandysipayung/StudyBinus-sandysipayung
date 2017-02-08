<div align="right">
    <?php
    if (!empty(@$_COOKIE['myWEB'])) {
        ?>
        Welcome, <?php echo @$_COOKIE['myWEB']; ?>
        <?php
    }
    ?> 
</div>

<div align="center">
    <a href="index.php">HOME</a> |
    <a href="product.php">PRODUCT</a> |
    <?php
    if (!empty(@$_COOKIE['myWEB'])) {
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