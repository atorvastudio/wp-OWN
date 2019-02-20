<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset')?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
 
  <?php wp_head(); ?>
  <title><?php bloginfo('name'); ?></title>
</head>
<body <?php body_class() ?>>
  
  <div class="wrapper">

    <header class="header">
      <div class="container-fluid">
        <div class="header-top">
          <div class="row">
            <div class="col-md-1 col-sm-12">
              <div class="header-top-hamburger">
                <div class="outer-menu">
                  <input class="checkbox-toggle" type="checkbox" id="checkbox" />
                  <div class="hamburger">
                    <div>
                      <div></div>
                      <div></div>
                    </div>
                  </div>
                  <div class="menu">
                    <div>
                      <div>
                        <?php 
                          wp_nav_menu([
                            'theme_location' => 'hamburger',
                            'container' => null,
                            'items_wrap' => '<ul class="hamb-media-menu-porfolio">%3$s</ul>'
                          ]);
                        ?>

                        <?php 
                          wp_nav_menu([
                            'theme_location' => 'top',
                            'container' => null,
                            'items_wrap' => '<ul class="hamb-media-menu-page">%3$s</ul>'
                          ]);
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>   
            </div>
                        
            <div class="col-md-8 col-md-offset-1 col-sm-12 col-xs-offset-0">
              <div class="header-top-contact">
                <a class="contact" href="#"><?php $val = get_option('address'); echo trim($val); ?></a>
                <a class="contact" href="#"><?php $val = get_option('workingHours'); echo trim($val); ?></a>
                <a class="contact" href="tel:<?php $val = get_option('phone1'); echo trim($val); ?>"><?php $val = get_option('phone1'); echo trim($val); ?></a>
                <a class="contact" href="tel:<?php $val = get_option('phone2'); echo trim($val); ?>"><?php $val = get_option('phone2'); echo trim($val); ?></a>
              </div>
            </div>
           
            <div class="col-sm-12 col-md-2 col-sm-offset-0 col-md-offset-0">
              <div class="header-top-social">
                <a class="social" href="<?php $val = get_option('social_youtube'); echo trim($val); ?>"></a>
                <a class="social" href="<?php $val = get_option('social_vk'); echo trim($val); ?>"></a>
                <a class="social" href="<?php $val = get_option('social_inst'); echo trim($val); ?>"></a>
              </div>
            </div>
            
          </div>
        </div>

        <div class="header-bottom">
          <div class="row">
            <div class="col-xs-12">
              <nav class="menu-bottom">
                <?php 
                  wp_nav_menu([
                    'theme_location' => 'top',
                    'container' => null,
                    'items_wrap' => '<ul>%3$s</ul>'
                  ]);
                ?>
              </nav>
            </div>            
          </div>
        </div>

      </div>
    </header>