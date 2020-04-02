<?php /** @var $this \Ilch\Layout\Frontend */ ?><!DOCTYPE html>
<html lang="de">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <?=$this->getHeader() ?>
        <link href="<?=$this->getVendorUrl('twbs/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
        <link href="<?=$this->getLayoutUrl('style.css') ?>" rel="stylesheet">
        <link href="<?=$this->getLayoutUrl('ilch_comm.css') ?>" rel="stylesheet">
        <script src="<?=$this->getLayoutUrl('js/script.js') ?>"></script>
        <?=$this->getCustomCSS() ?>
        <script src="<?=$this->getVendorUrl('twbs/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
        <link href="<?=$this->getLayoutUrl('lightbox/css/lightbox.min.css') ?>" rel="stylesheet">
        <script src="<?=$this->getLayoutUrl('lightbox/js/lightbox.min.js') ?>"></script>
        <style>
          a {color:<?=$this->getLayoutSetting('color')?>;}
          a:hover {color:<?=$this->getLayoutSetting('hover')?>;}
        </style>
    </head>
    <body id="top">
        <header>
            <nav class="navbar navbar-gaming navbar-fixed-top hidden-sm hidden-md hidden-lg">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-main" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/">Navigation</a>
                    </div>

                    <div class="collapse navbar-collapse mobile" id="bs-navbar-collapse-main">
                      <ul class="list-unstyled ilch_menu_ul social-icon panel-body">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                      </ul>
                        <?php
                        echo $this->getMenu
                        (
                              1, '<div class="panel-body">%c</div>',
                              [
                        		    'menus' => [
                        			  'ul-class-root' => 'list-unstyled ilch_menu_u',
                        			  'ul-class-child' => '',
                        			  'allow-nesting' => false
                          			],
                          			'boxes' => [
                          			  'render' => false
                          			],
                        		  ]
                        );
                        ?>
                    </div>
                </div>
            </nav>
              <div id="nav" class="hidden-xs">
                <div class="container">
                  <div class="community community-nav">
                    <div class="col-lg-3 logo">
                      <a href="/"><img src="<?=$this->getBaseUrl($this->getLayoutSetting('logo')) ?>" alt="logo"></a>
                    </div>
                    <div class="col-lg-9">
                      <div class="panel-body">
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
                    <div class="col-xs-12 col-lg-9">
                        <?=$this->getHmenu() ?>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <?=$this->getContent() ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-lg-3">
                        <?php
                        echo $this->getMenu
                        (
                            1,
                            '<div class="panel panel-community">
                                 <div class="panel-heading">%s</div>
                                    <div class="panel-body">
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
                        <div class="col-xs-12 col-sm-6">
                            &copy; Ilch 2 Free Layout | CMS by <a href="http://www.ilch.de/" target="_blank">Ilch</a>
                        </div>
                        <div class="col-xs-12 col-sm-6 nav">
                          <ul>
                            <li><a href="/"><?=$this->getTrans('home') ?></a></li>
                            <li><a href="<?=$this->getUrl() ?>index.php/contact/index/index"><?=$this->getTrans('contact') ?></a></li>
                            <li><a href="<?=$this->getUrl() ?>index.php/imprint/index/index"><?=$this->getTrans('imprint') ?></a></li>
                            <li><a href="<?=$this->getUrl() ?>index.php/privacy/index/index"><?=$this->getTrans('privacy') ?></a></li>
                          </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?=$this->getFooter() ?>
    </body>
</html>
