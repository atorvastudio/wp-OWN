<?php
	/*
	Template Name: Страница "Услуги"
	*/
?>


<?php get_header();?>

<section class="section">
    <div class="container">
      <div class="row">
        <div class="col-xs-10 col-sm-offset-1 col-xs-offset-0">
          <div class="breadcrumbs">
            <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
          </div>  
        </div>
      </div>
    </div>
  </section>

  <!-- Slider -->
  <section class="section">
    <?php $posts_slider = own_show_slider(); ?>
    <?php $posts_type_mebel_main = own_show_type_mebel_main(); ?>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title">
            <h2>Мы изготавливаем:</h2>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-8 col-xs-12">
          <div class="section-slider">
            <div class="swiper-container main-slider loading">
              <div class="swiper-wrapper">
                <?php foreach($posts_slider as $post): ?>
                  <div class="swiper-slide">
                    <figure class="slide-bgimg" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">
                      <img src="<?php the_post_thumbnail_url(); ?>" class="entity-img" />
                    </figure>
                    <div class="content content-lg">
                      <p class="title"><?php echo $post->post_title ?></p>
                      <span class="caption"></span>
                    </div>
                  </div>
                <?php endforeach; ?>                  
              </div>
              
              <div class="swiper-button-prev swiper-button-white"></div>
              <div class="swiper-button-next swiper-button-white"></div>
            </div>
            
            
            <div class="swiper-container nav-slider loading">
              <div class="swiper-wrapper">
                <?php foreach($posts_slider as $post): ?>
                  <div class="swiper-slide">
                    <figure class="slide-bgimg" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">
                      <img src="<?php the_post_thumbnail_url(); ?>" class="entity-img" />
                    </figure>
                    <div class="content">
                      <p class="title-nav"><?php echo $post->post_title ?></p>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-xs-12">
          <div class="section-make clearfix">
            <?php foreach($posts_type_mebel_main as $post): ?>
              <div class="make-item col-lg-12 col-sm-6 col-xs-12">
                <h4><?php echo $post->post_title ?></h4>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="section-form-bg">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <div class="section-form clearfix">
              <div class="col-lg-4 col-md-6 col-xs-12 col-xs-offset-0 col-lg-offset-1">
                <div class="form-text">
                  <p>Позвоните нам прямо сейчас!</p>
                  <a href="tel:<?php $val = get_option('phone'); echo trim($val); ?>"><?php $val = get_option('phone'); echo trim($val); ?></a>
                  <p>Или заполните форму и мы непременно свяжемся с Вами!</p>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-xs-12 col-xs-offset-0 col-lg-offset-3">
                <form action="post" class="form-submit">
                  <input type="text" name="name" placeholder="Ваше имя">
                  <input type="text" name="phone" placeholder="Ваш номер телефона">
                  <button type="submit" >Отправить</button>
                </form>
              </div>                
            </div>
          </div>            
        </div>
      </div>        
    </div>
  </section>

  <?php get_footer();?>