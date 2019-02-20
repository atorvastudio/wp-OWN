<footer class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-flex">
            <div class="footer-organization">
              <p><?php $val = get_option('organization'); echo trim($val); ?></p>
              <p><?php $val = get_option('vat'); echo trim($val); ?></p>
            </div>
            <div class="footer-address">
              <p>Адрес:</p>
              <a href="#"><?php $val = get_option('address'); echo trim($val); ?></a>
              <p>Время работы:</p>
              <a href="#"><?php $val = get_option('workingHours'); echo trim($val); ?></a>
            </div>
            <div class="footer-logo">
              <?php 
                wp_nav_menu([
                  'theme_location' => 'footer-logo',
                  'container' => null,
                  'items_wrap' => '<ul>%3$s</ul>'
                ]);
              ?>
            </div>
            <div class="footer-contact">
              <p>Телефон:</p>
              <a href="tel:<?php $val = get_option('phone'); echo trim($val); ?>"><?php $val = get_option('phone'); echo trim($val); ?></a>
              <p>E-mail:</p>
              <a href="mailto:<?php $val = get_option('email'); echo trim($val); ?>"><?php $val = get_option('email'); echo trim($val); ?></a>
            </div>
            <div class="footer-menu">
              <nav class="footer-nav-menu">
                <?php 
                  wp_nav_menu([
                    'theme_location' => 'footer',
                    'container' => null,
                    'items_wrap' => '<ul>%3$s</ul>'
                  ]);
                ?>
              </nav>
            </div>
          </div>
          
        </div>
      </div>
    </footer>



  </div>

 
  <?php wp_footer(); ?>

  <script>
    $(".submit-button").on("click", function (event) {
      event.preventDefault();
      var name = $(".form-name").val();
      var tel = $(".form-tel").val();
      $.ajax({
        url: "/wp-admin/admin-ajax.php",
        method: 'post',
        data: {
            action: 'ajax_order',
            name: name,
            tel: tel
        },
        success: function (response) {
            $('#submit-ajax').html(response);
        }
      });
    });
  
  
  </script>
</body>
</html>