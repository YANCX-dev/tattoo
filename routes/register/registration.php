<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/header.php"; ?>
<style>
    body{
        background: url("/resources/img/background.jpg") no-repeat;
        background-size: cover;
    }
</style>
<div class="registration-form">
    <form action="index.php" method="post">
        <h1>Registration</h1>
        <p>Input your e-mail address!</p>
        <input type="email" name="email" required>
        <p>Input your login!</p>
        <input type="text" name="login" required>
        <p>Input your password!</p>
        <input type="password" name="password" required>
        <p>Repeat your password!</p>
        <input type="password" name="repeatPassword" required><br/>
        <input type="submit" value="Register!" name="subReg">
        <a href="/routes/authorization/index.php">Already have an account?</a>
    </form>
    <?php if ($_SESSION["error"]["reg"]):?>
    <p class="error"><?=$_SESSION["error"]["reg"]?></p>
    <?php endif;?>
</div>


















</body>
</html>
