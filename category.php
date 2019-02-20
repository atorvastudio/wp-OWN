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

  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="section-title">
            <h2>Наши работы:</h2>
          </div> 
        </div>          
      </div>
      <div class="row">
        <div class="col-xs-12">
          <div class="portfolio">
            <?php if(have_posts()): 
              while(have_posts()): the_post(); ?>
              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="portfolio-item">
                  <a href="<?php the_permalink() ?>"><img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="<?php the_title() ?>"><span class="bg-color"><p><?php the_title() ?></p></span></a>
                </div>              
              </div>
              <?php endwhile; ?>
            <?php else: ?>
              Записей нет!
            <?php endif; ?>
          </div>           
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <?php $posts_porfolio_video = own_show_porfolio_video(); ?>
    <div class="container">      
      <div class="row">
        <div class="col-xs-12">
          <div class="section-video clearfix">
            <?php foreach($posts_porfolio_video as $post): ?>
              <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <?php echo $post->post_content ?>
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