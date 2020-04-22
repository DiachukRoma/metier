<?php 
    include "./config.php"; 
    $data = $lang_home;
?>
<!DOCTYPE html>
<html lang="<?= $data['lang'] ?>">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $data['title'] ?></title>
    <link rel="shortcut icon" href="./img/favicon.png" type="image/png" />
    <link rel="stylesheet" href="./css/animate.css" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./font/stylesheet.css" />
</head>

<body id="cl-body" class="page page-home">
    <canvas id="canvas"></canvas>
    <header class="d-f jc-sb">
        <div class="logo">
            <a href="<?= url(); ?>/metier/">
                <img src="img/Logo.svg" alt="" />
            </a>
        </div>
        <a href="#" class="menu-btn d-f fd-c">
            <span></span>
        </a>
        <div class="menu d-f fd-c jc-sb ai-fs">
            <div class="switcher__lang d-f jc-c">
                <a href="<?= url(); ?>/metier/?lang=en" class="<?= $data['lang'] == 'en' ? 'current' : 'item'; ?>">ENG</a>
                <a href="<?= url(); ?>/metier/?lang=ua" class="<?= $data['lang'] == 'ua' ? 'current' : 'item'; ?>">UA</a>
            </div>
            <div class="nav d-f fd-c ai-fs">
                <a class="ankhor" href="#home"><?= $data['menu']['menu_1']; ?></a>
                <a class="navLink" href="<?= url(); ?>/metier/about.php"><?= $data['menu']['menu_2']; ?></a>
                <a class="ankhor" href="#project"><?= $data['menu']['menu_3']; ?></a>
                <a class="ankhor" href="#contact"><?= $data['menu']['menu_4']; ?></a>
            </div>
            <div class="social d-f jc-sb">
                <a href="#">FB</a><a href="#">INST</a><a href="#">vimeo</a>
            </div>
        </div>
    </header>
    <div id="home" class="content">
        <h2 class="what wow animated d-4"><?= $data['block_home']['section_1']; ?></h2>
        <div class="title_content">
            <span class="d-block wow animated d-6"><?= $data['block_home']['section_2']; ?></span>
            <div class="mobile d-f ai-fs">
                <span class="m-l wow animated d-8"><?= $data['block_home']['section_3']; ?></span>
                <div class="text_content d-f fd-c">
                    <p class="wow animated d-10"><?= $data['block_home']['section_4']; ?></p>
                    <a class="READ_more wow animated d-12" href="#"><?= $data['block_home']['btn']; ?></a>
                </div>
            </div>
        </div>
        <a class="scrol d-f fd-c ai-c jc-c"><img src="img/scrol.png" alt="" /><?= $data['scroll']; ?></a>
    </div>
    <div id="project" class="sec1 content">
        <h1 class="name_projeck wow animated">ENSO<br />POMO</h1>
        <div class="w85 d-f ai-fe jc-c">
            <div class="photo_sec1">
                <video id="oneVideo" autoplay loop muted>
                   <source src="video/Case.mp4" type='video/mp4'> 
                </video>
                <video id="twoVideo" autoplay loop muted style="display: none;">
                   <source src="video/Mob_Case.mp4" type='video/mp4'>
                </video>
            </div>
            <div class="texts_sec1">
                <div class="text_sec1">
                    <h2 class="wow animated"><?= $data['client']; ?></h2>
                    <p class="wow animated">ENSO</p>
                </div>
                <div class="text_sec1">
                    <h2 class="wow animated"><?= $data['request']; ?></h2>
                    <p class="wow animated"><?= $data['project_1']['text']; ?></p>
                </div>
                <div class="text_sec1">
                    <h2 class="wow animated"><?= $data['services']; ?></h2>
                    <ul class="d-f">
                        <li class="wow animated"><?= $data['project_1']['services']['list_1']; ?></li>
                        <li class="wow animated d-2"><?= $data['project_1']['services']['list_2']; ?></li>
                        <li class="wow animated d-4"><?= $data['project_1']['services']['list_3']; ?></li>
                    </ul>
                </div>
            </div>
        </div>
        <a class="scrol d-f fd-c ai-c jc-c wow animated"><img src="img/scrol.png" alt="" /><?= $data['next']; ?></a>
    </div>
    <div class="sec1 content">
        <h1 class="name_projeck wow animated">NAME<br />OF PROJECT</h1>
        <div class="w85 d-f ai-fe jc-c">
            <div class="photo_sec1">
                <video id="oneVideo" autoplay loop muted>
                   <source src="video/4X4.mp4" type='video/mp4'> 
                </video>
                <video id="twoVideo" autoplay loop muted style="display: none;">
                   <source src="video/intro.mp4" type='video/mp4'>
                </video>
            </div>
            <div class="texts_sec1">
                <div class="text_sec1">
                    <h2 class="wow animated"><?= $data['client']; ?></h2>
                    <p class="wow animated">AIMM GROUP</p>
                </div>
                <div class="text_sec1">
                    <h2 class="wow animated"><?= $data['request']; ?></h2>
                    <p class="wow animated"><?= $data['project_2']['text']; ?></p>
                </div>
                <div class="text_sec1">
                    <h2 class="wow animated"><?= $data['services']; ?></h2>
                    <ul class="d-f">
                        <li class="wow animated"><?= $data['project_2']['services']['list_1']; ?></li>
                        <li class="wow animated d-2"><?= $data['project_2']['services']['list_2']; ?></li>
                        <li class="wow animated d-4"><?= $data['project_2']['services']['list_3']; ?></li>
                        <li class="wow animated d-6"><?= $data['project_2']['services']['list_4']; ?></li>
                        <li class="wow animated d-8"><?= $data['project_2']['services']['list_5']; ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="contact" class="sec3 content">
        <div class="title_sec3 d-f fd-c">
            <span class="d-block wow animated"><?= $data['block_contacts']['section_1']; ?></span>
            <div class="d-f fw-w">
                <span class="m-l2 wow animated d-1"><?= $data['block_contacts']['section_2']; ?></span>
                <span class="wow animated d-2"><?= $data['block_contacts']['section_3']; ?></span>
            </div>
        </div>
        <div class="info d-f fw-w ai-c jc-sb">
            <div class="info_adress d-f fd-c">
                <div class="address">
                    <h2 class="wow animated"><?= $data['block_contacts']['placeholder_ua']['city']; ?></h2>
                    <p class="wow animated d-2"><?= $data['block_contacts']['placeholder_ua']['street']; ?></p>
                </div>
                <div class="address">
                    <h2 class="wow animated"><?= $data['block_contacts']['placeholder_en']['city']; ?></h2>
                    <p class="wow animated d-2"><?= $data['block_contacts']['placeholder_en']['street']; ?></p>
                </div>
            </div>
            <div class="contacts__call">
                <div class="email">
                    <img src="img/mail_hover.png" alt="" />
                    <a href="mailto:info@metier.com" class="wow animated d-2">info@metier.com</a>
                </div>
                <div class="tel email">
                    <img src="img/mail_hover.png" alt="" />
                    <a href="tel:+380677564900" class="wow animated d-4">+38 067 756 49 00</a>
                </div>
            </div>

        </div>
        <canvas id="canvas2"></canvas>
    </div>

    <div class="preloader">
        <img src="img/preloader.svg" alt="">
    </div>

    <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/script2.js"></script>

</body>

</html>