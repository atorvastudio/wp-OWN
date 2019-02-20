<?php get_header();?>

    <section class="section">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-header-title">
              <div class="section-header-title-bg">
                <h1><?php echo html_entity_decode(get_bloginfo('description')); ?></h1>
                <a href="#" class="btn">Заказать</a>
              </div>            
            </div>
          </div>
          
        </div>
      </div>
    </section>

    <section class="section" id="tweenMaxWhy">
      <?php $posts_advantages = own_show_advantages(); ?>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title" >
              <h2>Почему стоит выбрать OWN mebel?</h2>
            </div>
          </div>          
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="section-why">

              <?php foreach($posts_advantages as $post): ?>
                <div class="why-item">
                  <img src="<?php the_post_thumbnail_url(); ?>" alt="img">
                  <div class="why-item-text">
                    <h5><?php echo $post->post_title ?></h5>
                    <p><?php echo $post->post_content ?></p>
                  </div>                
                </div>
              <?php endforeach; ?>

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


    <section class="section" id="tweenMaxHow">
    <?php $posts_step = own_show_step(); ?>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title">
              <h2>Как это происходит:</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">    
            <div class="section-how">

            <?php foreach($posts_step as $post): ?>
              <div class="how-item">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo $post->post_title ?>">
                <p><?php echo $post->post_content ?></p>
              </div>
            <?php endforeach; ?>
              
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="section-contact-bg">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="section-title">
                <h2 class="section-title-white">Контакты</h2>
              </div> 
            </div>            
          </div>
          <div class="row">
            <div class="col-md-4 col-xs-12">
              <div class="section-contact">
                <p>Телефон:</p>
                <a href="tel:<?php $val = get_option('phone'); echo trim($val); ?>"><?php $val = get_option('phone'); echo trim($val); ?></a>
                <p>Адрес:</p>
                <a href="#"><?php $val = get_option('address'); echo trim($val); ?></a>
                <p>Время работы:</p>
                <a href="#"><?php $val = get_option('workingHours'); echo trim($val); ?></a>
              </div>
            </div>
            <div class="col-md-8 col-xs-12">
              <?php if(is_active_sidebar('map')): ?>
                <div class="contact-right">
                  <div class="map">
                      <?php dynamic_sidebar('map')?>
                  </div>
                </div>
              <? endif; ?>
            </div>           
          </div>
        </div>
      </div>
    </section>

   <?php get_footer();?>