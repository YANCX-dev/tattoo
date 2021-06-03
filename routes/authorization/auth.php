<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/header.php";?>
<style>
    body{
        background: url("/resources/img/background.jpg") no-repeat;
        background-size: cover;
    }
</style>
<div class="authorization-form">
    <form action="index.php" method="post">
        <h1>Authorization</h1>
        <p>Input your login or e-mail!</p>
        <input type="text" name="login" required>
        <p>Input your password!</p>
        <input type="password" name="password" required>

        <input type="submit" value="Log in!" name="subAuth">

    </form>
    <?php if ($_SESSION["error"]["auth"]):?>
    <p class="error"><?=$_SESSION["error"]["auth"]?></p>
    <?php endif;?>
</div>


