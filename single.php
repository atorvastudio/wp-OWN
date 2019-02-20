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
            <h2><?php the_title() ?> на заказ</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-11 col-xs-12 col-lg-offset-1 col-xs-offset-0">
          <div class="portfolio-text">
            <p>Представленные образцы не являются нашим пределом, еще больше фотографий и видео вы найдете в нашем Instagram</p>
          </div>
        </div>
        <div class="col-xs-12">
          <div class="portfolio-image">
          <?php the_content() ?>
          
            <a href="img/qwert.jpg"><img src="img/qwert.jpg" alt="office"></a>
            <a href="img/qwert2.jpg"><img src="img/qwert2.jpg" alt="office"></a>
            <a href="img/qwert3.jpg"><img src="img/qwert3.jpg" alt="office"></a>
            <a href="img/qwert.jpg"><img src="img/qwert.jpg" alt="office"></a>
            <a href="img/qwert2.jpg"><img src="img/qwert2.jpg" alt="office"></a>
            <a href="img/qwert.jpg"><img src="img/qwert.jpg" alt="office"></a>
            <a href="img/qwert.jpg"><img src="img/qwert.jpg" alt="office"></a>
            <a href="img/qwert3.jpg"><img src="img/qwert3.jpg" alt="office"></a>
            <a href="img/qwert.jpg"><img src="img/qwert.jpg" alt="office"></a>
            <a href="img/qwert.jpg"><img src="img/qwert.jpg" alt="office"></a>
            <a href="img/qwert3.jpg"><img src="img/qwert3.jpg" alt="office"></a>
            <a href="img/qwert.jpg"><img src="img/qwert.jpg" alt="office"></a>
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


<?php get_footer(); ?>