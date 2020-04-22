<?php 
    include "./config.php"; 
    $data = $lang_about;
?>
<!DOCTYPE html>
<html lang="<?= $data['lang'] ?>">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $data['title'] ?></title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="./css/animate.css" />
    <link rel="stylesheet" href="./font/stylesheet.css" />
</head>

<body id="cl-body" class="page page-about">
    <header class="d-f jc-sb">
        <div class="logo wow animated">
            <a href="<?= url(); ?>/metier/">
                <img src="img/Logo.svg" alt="" />
            </a>
        </div>
        <a href="#" class="menu-btn d-f fd-c">
            <span></span>
        </a>
        <div class="menu d-f fd-c jc-sb ai-fs">
            <div class="switcher__lang d-f jc-c">
                <a href="<?= url(); ?>/metier/about.php?lang=en" class="<?= $data['lang'] == 'en' ? 'current' : 'item'; ?>">ENG</a>
                <a href="<?= url(); ?>/metier/about.php?lang=ua" class="<?= $data['lang'] == 'ua' ? 'current' : 'item'; ?>">UA</a>
            </div>
            <div class="nav d-f fd-c ai-fs">
                <a href="<?= url(); ?>/metier/#home"><?= $data['menu']['menu_1']; ?></a>
                <a href="<?= url(); ?>/metier/about.php"><?= $data['menu']['menu_2']; ?></a>
                <a href="<?= url(); ?>/metier/#project"><?= $data['menu']['menu_3']; ?></a>
                <a href="<?= url(); ?>/metier/#contact"><?= $data['menu']['menu_4']; ?></a>
            </div>
            <div class="social d-f jc-sb">
                <a href="#">FB</a><a href="#">INST</a><a href="#">vimeo</a>
            </div>
        </div>
    </header>
    <div class="content_about">
        <div class="text_about">
            <span class="d-block wow animated"><?= $data['block_about']['section_1']; ?></span>
            <span class="d-block wow animated d-2"><?= $data['block_about']['section_2']; ?></span>
            <span class="d-block wow animated d-4"><?= $data['block_about']['section_3']; ?></span>
            <span class="d-block wow animated d-6"><?= $data['block_about']['section_4']; ?></span>
        </div>
        <div class="faces d-f fw-w jc-sa">
            <div class="face">
                <p class="face-name"><?= $data['faces']['face_1']; ?></p>
                <?php include_once('./img/faces/face_1.php'); ?>
            </div>
            <div class="face">
                <p class="face-name"><?= $data['faces']['face_2']; ?></p>
                <?php include_once('./img/faces/face_2.php'); ?>
            </div>
            <div class="face">
                <p class="face-name"><?= $data['faces']['face_3']; ?></p>
                <?php include_once('./img/faces/face_3.php'); ?>
            </div>
        </div>
        <div class="title_about">
            <div class="visions">
                <h2 class="wow animated"><?= $data['visions']['vision_1']['title']; ?></h2>
                <p class="wow animated d-2"><?= $data['visions']['vision_1']['description']; ?></p>
            </div>
            <div class="treatments">
                <h2 class="wow animated"><?= $data['visions']['vision_2']['title']; ?></h2>
                <div class="d-f fw-w">
                    <div class="treatment d-f fd-c">
                        <h3 class="wow animated"><?= $data['visions']['vision_2']['description']['items_1']['title']; ?></h3>
                        <ul>
                            <li class="wow animated d-1"><?= $data['visions']['vision_2']['description']['items_1']['item_1']; ?></li>
                            <li class="wow animated d-2"><?= $data['visions']['vision_2']['description']['items_1']['item_2']; ?></li>
                            <li class="wow animated d-3"><?= $data['visions']['vision_2']['description']['items_1']['item_3']; ?></li>
                        </ul>
                    </div>
                    <div class="treatment d-f fd-c">
                        <h3 class="wow animated"><?= $data['visions']['vision_2']['description']['items_2']['title']; ?></h3>
                        <ul>
                            <li class="wow animated d-1"><?= $data['visions']['vision_2']['description']['items_2']['item_1']; ?></li>
                            <li class="wow animated d-2"><?= $data['visions']['vision_2']['description']['items_2']['item_2']; ?></li>
                            <li class="wow animated d-3"><?= $data['visions']['vision_2']['description']['items_2']['item_3']; ?></li>
                            <li class="wow animated d-4"><?= $data['visions']['vision_2']['description']['items_2']['item_4']; ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="work_text d-f jc-c">
            <div class="work_title">
                <h2 class="wow animated"><?= $data['block_we_do']['title']['item_1']; ?></h2>
                <h2 class="wow animated d-2"><?= $data['block_we_do']['title']['item_2']; ?></h2>
            </div>
            <div class="works d-f fd-c">
                <div class="work d-f">
                    <div>
                        <h2 class="wow animated d-2"><?= $data['block_we_do']['section_1']['title']; ?></h2>
                        <ul>
                            <li class="wow animated d-4"><?= $data['block_we_do']['section_1']['item_1']; ?></li>
                            <li class="wow animated d-5"><?= $data['block_we_do']['section_1']['item_2']; ?></li>
                            <li class="wow animated d-6"><?= $data['block_we_do']['section_1']['item_3']; ?></li>
                            <li class="wow animated d-7"><?= $data['block_we_do']['section_1']['item_4']; ?></li>
                            <li class="wow animated d-8"><?= $data['block_we_do']['section_1']['item_5']; ?></li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="wow animated d-7"><?= $data['block_we_do']['section_2']['title']; ?></h2>
                        <ul>
                            <li class="wow animated d-7"><?= $data['block_we_do']['section_2']['item_1']; ?></li>
                            <li class="wow animated d-8"><?= $data['block_we_do']['section_2']['item_2']; ?></li>
                            <li class="wow animated d-9"><?= $data['block_we_do']['section_2']['item_3']; ?></li>
                            <li class="wow animated d-10"><?= $data['block_we_do']['section_2']['item_4']; ?></li>
                            <li class="wow animated d-12"><?= $data['block_we_do']['section_2']['item_5']; ?></li>
                            <li class="wow animated d-11"><?= $data['block_we_do']['section_2']['item_6']; ?></li>
                        </ul>
                    </div>
                </div>
                <div class="work d-f">
                    <div>
                        <h2 class="wow animated"><?= $data['block_we_do']['section_3']['title']; ?></h2>
                        <ul>
                            <li class="wow animated d-2"><?= $data['block_we_do']['section_3']['item_1']; ?></li>
                            <li class="wow animated d-3"><?= $data['block_we_do']['section_3']['item_2']; ?></li>
                            <li class="wow animated d-4"><?= $data['block_we_do']['section_3']['item_3']; ?></li>
                            <li class="wow animated d-5"><?= $data['block_we_do']['section_3']['item_4']; ?></li>
                            <li class="wow animated d-6"><?= $data['block_we_do']['section_3']['item_5']; ?></li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="wow animated d-5"><?= $data['block_we_do']['section_4']['title']; ?></h2>
                        <ul>
                            <li class="wow animated d-6"><?= $data['block_we_do']['section_4']['item_1']; ?></li>
                            <li class="wow animated d-7"><?= $data['block_we_do']['section_4']['item_2']; ?></li>
                            <li class="wow animated d-8"><?= $data['block_we_do']['section_4']['item_3']; ?></li>
                        </ul>
                    </div>
                </div>
                <div class="work d-f">
                    <div>
                        <h2 class="wow animated"><?= $data['block_we_do']['section_5']['title']; ?></h2>
                        <ul>
                            <li class="wow animated d-2"><?= $data['block_we_do']['section_5']['item_1']; ?></li>
                            <li class="wow animated d-3"><?= $data['block_we_do']['section_5']['item_2']; ?></li>
                            <li class="wow animated d-4"><?= $data['block_we_do']['section_5']['item_3']; ?></li>
                            <li class="wow animated d-5"><?= $data['block_we_do']['section_5']['item_4']; ?></li>
                            <li class="wow animated d-6"><?= $data['block_we_do']['section_5']['item_5']; ?></li>
                            <li class="wow animated d-7"><?= $data['block_we_do']['section_5']['item_6']; ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="email_about d-f ai-c jc-c">
            <img src="img/mail_hover.png" />
            <a href="mailto:info@metier.com" class="wow animated">info@metier.com</a>
        </div>
    </div>
    <script src="./js/wow.min.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>