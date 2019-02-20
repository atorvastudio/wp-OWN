<?php if ( is_active_sidebar('about-left') ) : ?>

  <section class="section">
    <div class="container">
      <div class="row">
        <div class="about">
          <div class="col-lg-6 col-xs-12">
            <div class="about-left">
              <?php dynamic_sidebar('about-left'); ?>              
            </div>
          </div>
          <div class="col-lg-6 col-xs-12">
          <?php if ( is_active_sidebar('about-right') ) : ?>
            <div class="about-right">
              <?php dynamic_sidebar('about-right'); ?>  
            </div>
          <?php endif; ?>
          </div>
        </div>          
      </div>
    </div>
  </section>

<?php endif; ?>