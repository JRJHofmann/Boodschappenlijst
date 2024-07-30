
<?php
    $titlePag = "Navigatie";
    include "views/header.php";
    include "functions.php"; ?>
    <nav>
        <ul>
            <li><a href="create.view.php" class="<?php echo urlIs('/create.php') ? 'active' : ''; ?>">Invoerpagina</a></li>
            <li><a href="index.view.php" class="<?php echo urlIs('/index.php') ? 'active' : ''; ?>">Overzichtspagina</a></li>
        </ul>
    </nav>
<?php 
include "views/footer.php"
?>