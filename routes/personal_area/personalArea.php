<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/templates/header.php" ?>
<body>
<div class="container-pa">
    <div class="user-info">
        <p>email:<?=$user->email?></p>
        <p>ID:<?=$user->id?></p>
        <p>Name:<?=$user->login?></p>
    </div>
    <nav id="bt-menu" class="bt-menu">
        <a href="#" class="bt-menu-trigger"><span>Menu</span></a>
        <ul>
            <li><a href="#">About us</a></li>
            <li><a href="#">Work</a></li>
            <li><a href="#">Clients</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="/">Main</a></li>
        </ul>

    </nav>
</div>



</body>
</html>