<!doctype html>
<html class="no-js" <?php language_attributes(); ?> ng-app="mySpeech">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ; ?>/css/app.css" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="off-canvas-wrap" data-offcanvas>
    <div class="inner-wrap">
        <nav class="tab-bar show-for-small-only">
            <section class="left-small">
                <a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
            </section>
            <section class="middle tab-bar-section">
                <h1 class="title"><?php bloginfo( 'name' ); ?></h1>
            </section>
        </nav>
        <div class="top-bar-container contain-to-grid show-for-medium-up" role="navigation">
            <nav class="top-bar" data-topbar="">
                <ul class="title-area">
                    <li class="name"></li>
                </ul>
                <section class="top-bar-section">
                    <ul id="menu-main-1" class="top-bar-menu left">
                        <li class="divider"></li>
                        <li class="active"><a href="http://members.myspeechparty.com/#/video-content">Video Content</a></li>
                        <li class="divider"></li>
                        <li><a href="http://members.myspeechparty.com/#/contact">Contact</a></li>
                        <li class="divider"></li>
                        <li><a href="http://members.myspeechparty.com/#/faq">FAQ</a></li>
                        <li class="divider"></li>
                        <li><a href="http://.myspeechparty.com/#/video-content">Free Resources</a></li>
                    </ul>
                </section>
            </nav>
        </div>
        <section class="container" role="document">
            <div class="row">
                <div class="small-12 large-8 columns" role="main">
                    <div id="wrapper">
                        <div ng-view=""></div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="row">
            <?php dynamic_sidebar("footer-widgets"); ?>
        </footer>
        <a class="exit-off-canvas"></a>
    </div>
</div>
<?php wp_footer(); ?>
</body>
</html>

