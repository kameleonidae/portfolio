<?php
    include_once __DIR__.'/../controller/config.php'
?>


<header>
    <div class="divTitle">
        <a class="headerTitle" href=<?=$domain."/view/main.php"?>>PortFolio</a>
        <div class="lblHeader">Retour au menu</div>
    </div>
    <div class="menuPhone">
        <input type="checkbox" id="chkboxMenu">
        
        <label for="chkboxMenu" class="btnMenuPhone"><img class="imgChkboxMenu" src=<?=$domain."/view/style/img/closeCross.png" ?>></label>
        <div class="menuBgPhone"></div>
        <div class="divMenuList">
            <a class="linkedinImg" href="https://www.linkedin.com/in/david-hory-3990062a0/">
                <img src=<?=$domain."/view/style/img/linkedin.png" ?>>
            </a>
            <input type="checkbox" id="chkboxContact">
            <label for="chkboxContact" class="contact">
                <p class="nameContact">CONTACT</p>
                <div class="emailContainer">
                    <div class="emailContact">hory.david.2@gmail.com</div>
                </div>
            </label>
        </div>
    </div>
</header>