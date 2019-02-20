<?php
	/*
	Template Name: Страница "О нас"
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

    <?php get_sidebar(); ?>

    <section class="section">
    <?php $posts_type_mebel_about = own_show_type_mebel_about(); ?>
      <div class="section-about-bg">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="section-title">
                <h2>Мы изготавливаем:</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="about-make clearfix">
                <?php foreach($posts_type_mebel_about as $post): ?>
                  <div class="col-lg-4 col-md-6 col-xs-12">
                    <p><?php echo $post->post_title ?></p>
                  </div>
                <?php endforeach; ?>                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section">
    <?php $posts_manufacturer = own_show_manufacturer(); ?>
      <div class="container">
        <div class="row">
          <div class="section-title">
            <h2>Материалы от лучших производителей!</h2>
          </div>
        </div>
        <div class="row">          
          <div class="manufacturer-item">
            <?php foreach($posts_manufacturer as $post): ?>
              <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo $post->post_title ?>">
            <?php endforeach; ?>             
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