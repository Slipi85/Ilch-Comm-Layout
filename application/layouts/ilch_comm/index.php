<?php /** @var $this \Ilch\Layout\Frontend */ ?><!DOCTYPE html>
<html lang="de">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <?=$this->getHeader() ?>
        <link href="<?=$this->getVendorUrl('twbs/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
        <link href="<?=$this->getLayoutUrl('style.css') ?>" rel="stylesheet">
        <link href="<?=$this->getLayoutUrl('ilch_comm.css') ?>" rel="stylesheet">
        <?=$this->getCustomCSS() ?>
        <script src="<?=$this->getVendorUrl('twbs/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>
        <script src="<?=$this->getLayoutUrl('js/script.js') ?>"></script>
        <style>
          a {color:<?=$this->getLayoutSetting('color')?>;}
          a:hover {color:<?=$this->getLayoutSetting('hover')?>;}
        </style>
    </head>
    <body id="top">
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark navbar-gaming bg-dark d-sm-block d-md-none">
              <div class="container-fluid">
                <a class="navbar-brand" href="<?=$this->getUrl() ?>"><?=$this->getTrans('navigation') ?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bs-navbar-collapse-main" aria-controls="bs-navbar-collapse-main" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse mobile" id="bs-navbar-collapse-main">
                  <ul class="list-unstyled ilch_menu_ul social-icon panel-body">
                    <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                  </ul>
                    <?php
                    echo $this->getMenu(1,
                    '<div class="panel-body">%c</div>',
                    [
                        'menus' => [
                            'ul-class-root' => 'list-unstyled ilch_menu_u',
                            'ul-class-child' => '',
                            'allow-nesting' => false
                        ],
                        'boxes' => [
                            'render' => false
                        ],
                    ]);
                    ?>
                </div>
              </div>
            </nav>
              <div id="nav" class="d-none d-sm-block">
                <div class="container">
                  <div class="community community-nav row">
                    <div class="col-sm-3 logo">
                      <a href="/"><img src="<?=$this->getBaseUrl($this->getLayoutSetting('logo')) ?>" alt="logo"></a>
                    </div>
                    <div class="col-sm-9">
                      <div class="card-body">
                        <ul class="list-unstyled ilch_menu_u">
                            <?php
                            echo $this->getMenu(1,
                           '<li><a href="#" title="%s">%s</a>%c</li>',
                            [
                                'menus' => [
                                'ul-class-root' => 'list-unstyled ilch_menu_u',
                                'ul-class-child' => '',
                                'allow-nesting' => false
                                ],
                                'boxes' => [
                                    'render' => false
                                ],
                            ]);
                            ?>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php include ('header.php'); ?>
        </header>

        <div class="main-content">
            <div class="community">
                <div class="row">
                    <div class="col-12 col-md-9">
                        <?=$this->getHmenu() ?>
                        <div class="card card-default">
                            <div class="card-body">
                                <?=$this->getContent() ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <?php
                        echo $this->getMenu(1,
                        '<div class="card panel-community mb-3">
                             <div class="card-header">%s</div>
                                <div class="card-body">
                                    %c
                                </div>
                         </div>'
                        );
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <a id="totop" href="#top"></a>
        <div class="footer">
            <div class="main-content">
                <div class="community">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            &copy; Ilch 2 Free Layout | CMS by <a href="https://www.ilch.de/" target="_blank">Ilch</a>
                        </div>
                        <div class="col-12 col-md-6 nav">
                            <ul>
                                <li><a href="<?=$this->getUrl() ?>"><?=$this->getTrans('home') ?></a></li>
                                <li><a href="<?=$this->getUrl(['module' => 'contact', 'controller' => 'index', 'action' => 'index']) ?>"><?=$this->getTrans('contact') ?></a></li>
                                <li><a href="<?=$this->getUrl(['module' => 'imprint', 'controller' => 'index', 'action' => 'index']) ?>"><?=$this->getTrans('imprint') ?></a></li>
                                <li><a href="<?=$this->getUrl(['module' => 'privacy', 'controller' => 'index', 'action' => 'index']) ?>"><?=$this->getTrans('privacy') ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?=$this->getFooter() ?>
    </body>
</html>
