<?php
// remove admin panel
add_filter('show_admin_bar', '__return_false');


// setup
add_action('after_setup_theme', 'own_after_setup');
function own_after_setup(){
  register_nav_menu('top', 'Для шапки');
  register_nav_menu('footer', 'Для подвала');
  register_nav_menu('footer-logo', 'Для логотипа в подвале');
  register_nav_menu('hamburger', 'Для гамбургера');
  
  add_theme_support('post-thumbnails');
  add_theme_support('title-tag');
}


// scripts output in footer
remove_action( 'wp_head',   'wp_print_head_scripts', 9 );

// add script and style
add_action('wp_enqueue_scripts', 'own_file');
function own_file(){
  wp_enqueue_style('own-swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css');
  wp_enqueue_style('own-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
  wp_enqueue_style('own-magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css');
  wp_enqueue_style('own-style', get_stylesheet_uri());

  wp_enqueue_script('own-script-jquery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js');
  wp_enqueue_script('own-script-swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.min.js');  
  wp_enqueue_script('own-script-magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js');
  wp_enqueue_script('own-script-TweenMax', get_template_directory_uri() . '/js/TweenMax.min.js');
  wp_enqueue_script('own-script-ScrollMagic', get_template_directory_uri() . '/js/ScrollMagic.js');
  wp_enqueue_script('own-script-debug.addIndicators', get_template_directory_uri() . '/js/debug.addIndicators.js');
  wp_enqueue_script('own-script-animation.gsap', get_template_directory_uri() . '/js/animation.gsap.js');
  wp_enqueue_script('own-script-gsap', get_template_directory_uri() . '/js/gsap.js');
  wp_enqueue_script('own-script-slider', get_template_directory_uri() . '/js/slider.js');

  wp_enqueue_script('own-script-main', get_template_directory_uri() . '/js/main.js');
}


// add fields
add_action('admin_menu', 'add_option_field_to_general_admin_page');
function add_option_field_to_general_admin_page(){
  $phone_1 = 'phone1';
  $phone_2 = 'phone2';
	$address = 'address';
  $working_hours = 'workingHours';
  $email = 'email';
  $organization = 'organization';
  $vat = 'vat';
	$social_youtube = 'social_youtube';    
	$social_vk = 'social_vk';    
	$social_inst = 'social_inst';         
  
  
	// registration option
  register_setting( 'general', $phone_1 );
  register_setting( 'general', $phone_2 );
	register_setting( 'general', $address );
  register_setting( 'general', $working_hours );
  register_setting( 'general', $email );
	register_setting( 'general', $organization );
  register_setting( 'general', $vat );
	register_setting( 'general', $social_youtube );  
	register_setting( 'general', $social_vk );  
	register_setting( 'general', $social_inst );     
  
  
  // add field address
	add_settings_field( 
		'own-address', 
		'Адрес', 
		'myprefix_setting_callback_function', 
		'general', 
		'default', 
		array( 
			'id' => 'own-address', 
			'option_name' => $address 
		)
  );
  
  // add field working_hours
	add_settings_field( 
		'own-working_hours', 
		'Время работы', 
		'myprefix_setting_callback_function', 
		'general', 
		'default', 
		array( 
			'id' => 'own-working_hours', 
			'option_name' => $working_hours 
		)
  );

	// add field phone1
	add_settings_field( 
		'own-phone-1', 
		'Номер телефона-1', 
		'myprefix_setting_callback_function', 
		'general', 
		'default', 
		array( 
			'id' => 'own-phone-1', 
			'option_name' => $phone_1 
		)
  );

  // add field phone2
  add_settings_field( 
		'own-phone-2', 
		'Номер телефона-2', 
		'myprefix_setting_callback_function', 
		'general', 
		'default', 
		array( 
			'id' => 'own-phone-2', 
			'option_name' => $phone_2 
		)
  );
  
  // add field email
	add_settings_field( 
		'own-email', 
		'email', 
		'myprefix_setting_callback_function', 
		'general', 
		'default', 
		array( 
			'id' => 'own-email', 
			'option_name' => $email 
		)
  );

  // add field organization
	add_settings_field( 
		'own-organization', 
		'организация', 
		'myprefix_setting_callback_function', 
		'general', 
		'default', 
		array( 
			'id' => 'own-organization', 
			'option_name' => $organization 
		)
  );

  // add field vat
	add_settings_field( 
		'own-vat', 
		'УНП', 
		'myprefix_setting_callback_function', 
		'general', 
		'default', 
		array( 
			'id' => 'own-vat', 
			'option_name' => $vat 
		)
  );

  // add field social_youtube
	add_settings_field( 
		'own-youtube', 
		'Адрес соцсеть youtube', 
		'myprefix_setting_callback_function', 
		'general', 
		'default', 
		array( 
			'id' => 'own-youtube', 
      'option_name' => $social_youtube,
      'comment' => 'введите полный адрес соц сети (https://www.адрес.ru)'
		)
  );

  // add field social_vk
	add_settings_field( 
		'own-vk', 
		'Адрес соцсеть vk', 
		'myprefix_setting_callback_function', 
		'general', 
		'default', 
		array( 
			'id' => 'own-vk', 
      'option_name' => $social_vk,
      'comment' => 'введите полный адрес соц сети (https://www.адрес.ru)'
		)
  );

  // add field social_inst
	add_settings_field( 
		'own-inst', 
		'Адрес соцсеть inst', 
		'myprefix_setting_callback_function', 
		'general', 
		'default', 
		array( 
			'id' => 'own-inst', 
      'option_name' => $social_inst,
      'comment' => 'введите полный адрес соц сети (https://www.адрес.ru)'
		)
  );
}
// function for fields
function myprefix_setting_callback_function( $val ){
	$id = $val['id'];
  $option_name = $val['option_name'];
  $comment = $val['comment'];
	?>
	<input 
		type="text" 
		name="<? echo $option_name ?>" 
		id="<? echo $id ?>" 
		value="<? echo esc_attr( get_option($option_name) ) ?>" 
	/> 
  <em>&#032;&#032;&#032;&#032;&#032; <?php echo $comment?></em>
	<?
}



// register post
add_action('init', 'own_post_types');
function own_post_types() {
  // register advantages
  register_post_type('advantages', [
    'labels' => [
      'name'               => 'преимущества', // основное название для типа записи
      'singular_name'      => 'преимущество', // название для одной записи этого типа
      'add_new'            => 'Добавить новый', // для добавления новой записи
      'add_new_item'       => 'Добавление преимущества', // заголовка у вновь создаваемой записи в админ-панели.
      'edit_item'          => 'Редактирование преимущества', // для редактирования типа записи
      'new_item'           => 'Новое преимущество', // текст новой записи
      'view_item'          => 'Смотреть преимущество', // для просмотра записи этого типа.
      'search_items'       => 'Искать преимущества', // для поиска по этим типам записи
      'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
      'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
      'parent_item_colon'  => '', // для родителей (у древовидных типов)
      'menu_name'          => 'Преимущества', // название меню
    ],
    'public'              => true,
    'menu_position'       => 25,
    'menu_icon'           => 'dashicons-format-quote', 
    'hierarchical'        => false,
    'supports'            => array('title', 'editor', 'thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
  ]);
  
  // register step
  register_post_type('step', [
    'labels' => [
      'name'               => 'шаги', // основное название для типа записи
      'singular_name'      => 'шаг', // название для одной записи этого типа
      'add_new'            => 'Добавить новый', // для добавления новой записи
      'add_new_item'       => 'Добавление шага', // заголовка у вновь создаваемой записи в админ-панели.
      'edit_item'          => 'Редактирование шага', // для редактирования типа записи
      'new_item'           => 'Новый шаг', // текст новой записи
      'view_item'          => 'Смотреть шаг', // для просмотра записи этого типа.
      'search_items'       => 'Искать шаг', // для поиска по этим типам записи
      'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
      'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
      'parent_item_colon'  => '', // для родителей (у древовидных типов)
      'menu_name'          => 'Шаги', // название меню
    ],
    'public'              => true,
    'menu_position'       => 25,
    'menu_icon'           => 'dashicons-redo', 
    'hierarchical'        => false,
    'supports'            => array('title', 'editor', 'thumbnail',), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
  ]);

  // register slider
  register_post_type('slider', [
    'labels' => [
      'name'               => 'Слайдер', // основное название для типа записи
      'singular_name'      => 'слайд', // название для одной записи этого типа
      'add_new'            => 'Добавить новый', // для добавления новой записи
      'add_new_item'       => 'Добавление слайда', // заголовка у вновь создаваемой записи в админ-панели.
      'edit_item'          => 'Редактирование слайда', // для редактирования типа записи
      'new_item'           => 'Новый слайд', // текст новой записи
      'view_item'          => 'Смотреть слайд', // для просмотра записи этого типа.
      'search_items'       => 'Искать слайд', // для поиска по этим типам записи
      'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
      'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
      'parent_item_colon'  => '', // для родителей (у древовидных типов)
      'menu_name'          => 'Слайдер', // название меню
    ],
    'public'              => true,
    'menu_position'       => 25,
    'menu_icon'           => 'dashicons-camera', 
    'hierarchical'        => false,
    'supports'            => array('title', 'thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
  ]);

  // register type_mebel_main
  register_post_type('type_mebel_main', [
    'labels' => [
      'name'               => 'Тип мебели главная', // основное название для типа записи
      'singular_name'      => 'Тип мебели', // название для одной записи этого типа
      'add_new'            => 'Добавить новый', // для добавления новой записи
      'add_new_item'       => 'Добавление Тип мебели', // заголовка у вновь создаваемой записи в админ-панели.
      'edit_item'          => 'Редактирование Тип мебели', // для редактирования типа записи
      'new_item'           => 'Новый Тип мебели', // текст новой записи
      'view_item'          => 'Смотреть Тип мебели', // для просмотра записи этого типа.
      'search_items'       => 'Искать Тип мебели', // для поиска по этим типам записи
      'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
      'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
      'parent_item_colon'  => '', // для родителей (у древовидных типов)
      'menu_name'          => 'Тип мебели главная', // название меню
    ],
    'public'              => true,
    'menu_position'       => 25,
    'menu_icon'           => 'dashicons-hammer', 
    'hierarchical'        => false,
    'supports'            => array('title'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
  ]);

  // register type_mebel_about
  register_post_type('type_mebel_about', [
    'labels' => [
      'name'               => 'Тип мебели "О нас"', // основное название для типа записи
      'singular_name'      => 'Тип мебели', // название для одной записи этого типа
      'add_new'            => 'Добавить новый', // для добавления новой записи
      'add_new_item'       => 'Добавление Тип мебели', // заголовка у вновь создаваемой записи в админ-панели.
      'edit_item'          => 'Редактирование Тип мебели', // для редактирования типа записи
      'new_item'           => 'Новый Тип мебели', // текст новой записи
      'view_item'          => 'Смотреть Тип мебели', // для просмотра записи этого типа.
      'search_items'       => 'Искать Тип мебели', // для поиска по этим типам записи
      'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
      'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
      'parent_item_colon'  => '', // для родителей (у древовидных типов)
      'menu_name'          => 'Тип мебели "О нас"', // название меню
    ],
    'public'              => true,
    'menu_position'       => 25,
    'menu_icon'           => 'dashicons-hammer', 
    'hierarchical'        => false,
    'supports'            => array('title'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
  ]);

  // register manufacturer
  register_post_type('manufacturer', [
    'labels' => [
      'name'               => 'Производители', // основное название для типа записи
      'singular_name'      => 'Производитель', // название для одной записи этого типа
      'add_new'            => 'Добавить новый', // для добавления новой записи
      'add_new_item'       => 'Добавление Производителя', // заголовка у вновь создаваемой записи в админ-панели.
      'edit_item'          => 'Редактирование Производителя', // для редактирования типа записи
      'new_item'           => 'Новый Производитель', // текст новой записи
      'view_item'          => 'Смотреть Производителя', // для просмотра записи этого типа.
      'search_items'       => 'Искать Производителя', // для поиска по этим типам записи
      'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
      'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
      'parent_item_colon'  => '', // для родителей (у древовидных типов)
      'menu_name'          => 'Производители', // название меню
    ],
    'public'              => true,
    'menu_position'       => 25,
    'menu_icon'           => 'dashicons-groups', 
    'hierarchical'        => false,
    'supports'            => array('title', 'thumbnail'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
  ]);

  // register porfolio_video
  register_post_type('porfolio_video', [
    'labels' => [
      'name'               => 'Портфолио Видео', // основное название для типа записи
      'singular_name'      => 'Видео', // название для одной записи этого типа
      'add_new'            => 'Добавить новое', // для добавления новой записи
      'add_new_item'       => 'Добавление Видео', // заголовка у вновь создаваемой записи в админ-панели.
      'edit_item'          => 'Редактирование Видео', // для редактирования типа записи
      'new_item'           => 'Новое Видео', // текст новой записи
      'view_item'          => 'Смотреть Видео', // для просмотра записи этого типа.
      'search_items'       => 'Искать Видео', // для поиска по этим типам записи
      'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
      'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
      'parent_item_colon'  => '', // для родителей (у древовидных типов)
      'menu_name'          => 'Портфолио Видео', // название меню
    ],
    'public'              => true,
    'menu_position'       => 4,
    'menu_icon'           => 'dashicons-video-alt3', 
    'hierarchical'        => false,
    'supports'            => array('title', 'editor'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
  ]);
  
}

// functions show post
function own_show_advantages(){
  $args = array(
    'orderby'     => 'date',
    'order'       => 'ASC',
    'post_type'   => 'advantages'
  );

  return get_posts($args);
}
function own_show_step(){
  $args = array(
    'orderby'     => 'date',
    'order'       => 'ASC',
    'post_type'   => 'step'
  );

  return get_posts($args);
}
function own_show_slider(){
  $args = array(
    'orderby'     => 'date',
    'order'       => 'ASC',
    'post_type'   => 'slider'
  );

  return get_posts($args);
}
function own_show_type_mebel_main(){
  $args = array(
    'orderby'     => 'date',
    'order'       => 'ASC',
    'post_type'   => 'type_mebel_main'
  );

  return get_posts($args);
}
function own_show_type_mebel_about(){
  $args = array(
    'orderby'     => 'date',
    'order'       => 'ASC',
    'post_type'   => 'type_mebel_about'
  );

  return get_posts($args);
}
function own_show_manufacturer(){
  $args = array(
    'orderby'     => 'date',
    'order'       => 'ASC',
    'post_type'   => 'manufacturer'
  );

  return get_posts($args);
}
function own_show_porfolio_video(){
  $args = array(
    'orderby'     => 'date',
    'order'       => 'ASC',
    'post_type'   => 'porfolio_video'
  );

  return get_posts($args);
}


// add widget
add_action('widgets_init', 'own_widgets');
function own_widgets() {
  register_sidebar([
    'name' => 'Яндекс карта',
    'id' => 'map',
    'description' => 'Карта с адресом компании',
    'before_widget' => '<div class="widget %2$s">',
    'after_widget'  => "</div>\n"
  ]);

  register_sidebar([
    'name' => 'О нас текст',
    'id' => 'about-left',
    'description' => 'Описание компании на странице "О нас" ТЕКСТ',
    'before_widget' => '<div class="widget %2$s">',
    'after_widget'  => "</div>\n"
  ]);

  register_sidebar([
    'name' => 'О нас видео',
    'id' => 'about-right',
    'description' => 'Описание компании на странице "О нас" ВИДЕО',
    'before_widget' => '<div class="widget %2$s">',
    'after_widget'  => "</div>\n"
  ]);

  register_sidebar([
    'name' => 'Логотип в подвале',
    'id' => 'footer-logo',
    'description' => 'Логотип-ссылка на главную страницу',
    'before_widget' => '<div class="widget %2$s">',
    'after_widget'  => "</div>\n"
  ]);
}




// breadcrumbs
function dimox_breadcrumbs() {

  /* === ОПЦИИ === */
  $text['home'] = 'Главная'; // текст ссылки "Главная"
  $text['category'] = '%s'; // текст для страницы рубрики
  $text['search'] = 'Результаты поиска по запросу "%s"'; // текст для страницы с результатами поиска
  $text['tag'] = 'Записи с тегом "%s"'; // текст для страницы тега
  $text['author'] = 'Статьи автора %s'; // текст для страницы автора
  $text['404'] = 'Ошибка 404'; // текст для страницы 404
  $text['page'] = 'Страница %s'; // текст 'Страница N'
  $text['cpage'] = 'Страница комментариев %s'; // текст 'Страница комментариев N'

  $wrap_before = '<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">'; // открывающий тег обертки
  $wrap_after = '</div><!-- .breadcrumbs -->'; // закрывающий тег обертки
  $sep = '<span class="breadcrumbs__separator"> › </span>'; // разделитель между "крошками"
  $before = '<span class="breadcrumbs__current">'; // тег перед текущей "крошкой"
  $after = '</span>'; // тег после текущей "крошки"

  $show_on_home = 0; // 1 - показывать "хлебные крошки" на главной странице, 0 - не показывать
  $show_home_link = 1; // 1 - показывать ссылку "Главная", 0 - не показывать
  $show_current = 1; // 1 - показывать название текущей страницы, 0 - не показывать
  $show_last_sep = 1; // 1 - показывать последний разделитель, когда название текущей страницы не отображается, 0 - не показывать
  /* === КОНЕЦ ОПЦИЙ === */

  global $post;
  $home_url = home_url('/');
  $link = '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
  $link .= '<a class="breadcrumbs__link" href="%1$s" itemprop="item"><span itemprop="name">%2$s</span></a>';
  $link .= '<meta itemprop="position" content="%3$s" />';
  $link .= '</span>';
  $parent_id = ( $post ) ? $post->post_parent : '';
  $home_link = sprintf( $link, $home_url, $text['home'], 1 );

  if ( is_home() || is_front_page() ) {

    if ( $show_on_home ) echo $wrap_before . $home_link . $wrap_after;

  } else {

    $position = 0;

    echo $wrap_before;

    if ( $show_home_link ) {
      $position += 1;
      echo $home_link;
    }

    if ( is_category() ) {
      $parents = get_ancestors( get_query_var('cat'), 'category' );
      foreach ( array_reverse( $parents ) as $cat ) {
        $position += 1;
        if ( $position > 1 ) echo $sep;
        echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
      }
      if ( get_query_var( 'paged' ) ) {
        $position += 1;
        $cat = get_query_var('cat');
        echo $sep . sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
        echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
      } else {
        if ( $show_current ) {
          if ( $position >= 1 ) echo $sep;
          echo $before . sprintf( $text['category'], single_cat_title( '', false ) ) . $after;
        } elseif ( $show_last_sep ) echo $sep;
      }

    } elseif ( is_search() ) {
      if ( $show_home_link && $show_current || ! $show_current && $show_last_sep ) echo $sep;
      if ( $show_current ) echo $before . sprintf( $text['search'], get_search_query() ) . $after;

    } elseif ( is_year() ) {
      if ( $show_home_link && $show_current ) echo $sep;
      if ( $show_current ) echo $before . get_the_time('Y') . $after;
      elseif ( $show_home_link && $show_last_sep ) echo $sep;

    } elseif ( is_month() ) {
      if ( $show_home_link ) echo $sep;
      $position += 1;
      echo sprintf( $link, get_year_link( get_the_time('Y') ), get_the_time('Y'), $position );
      if ( $show_current ) echo $sep . $before . get_the_time('F') . $after;
      elseif ( $show_last_sep ) echo $sep;

    } elseif ( is_day() ) {
      if ( $show_home_link ) echo $sep;
      $position += 1;
      echo sprintf( $link, get_year_link( get_the_time('Y') ), get_the_time('Y'), $position ) . $sep;
      $position += 1;
      echo sprintf( $link, get_month_link( get_the_time('Y'), get_the_time('m') ), get_the_time('F'), $position );
      if ( $show_current ) echo $sep . $before . get_the_time('d') . $after;
      elseif ( $show_last_sep ) echo $sep;

    } elseif ( is_single() && ! is_attachment() ) {
      if ( get_post_type() != 'post' ) {
        $position += 1;
        $post_type = get_post_type_object( get_post_type() );
        if ( $position > 1 ) echo $sep;
        echo sprintf( $link, get_post_type_archive_link( $post_type->name ), $post_type->labels->name, $position );
        if ( $show_current ) echo $sep . $before . get_the_title() . $after;
        elseif ( $show_last_sep ) echo $sep;
      } else {
        $cat = get_the_category(); $catID = $cat[0]->cat_ID;
        $parents = get_ancestors( $catID, 'category' );
        $parents = array_reverse( $parents );
        $parents[] = $catID;
        foreach ( $parents as $cat ) {
          $position += 1;
          if ( $position > 1 ) echo $sep;
          echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
        }
        if ( get_query_var( 'cpage' ) ) {
          $position += 1;
          echo $sep . sprintf( $link, get_permalink(), get_the_title(), $position );
          echo $sep . $before . sprintf( $text['cpage'], get_query_var( 'cpage' ) ) . $after;
        } else {
          if ( $show_current ) echo $sep . $before . get_the_title() . $after;
          elseif ( $show_last_sep ) echo $sep;
        }
      }

    } elseif ( is_post_type_archive() ) {
      $post_type = get_post_type_object( get_post_type() );
      if ( get_query_var( 'paged' ) ) {
        $position += 1;
        if ( $position > 1 ) echo $sep;
        echo sprintf( $link, get_post_type_archive_link( $post_type->name ), $post_type->label, $position );
        echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
      } else {
        if ( $show_home_link && $show_current ) echo $sep;
        if ( $show_current ) echo $before . $post_type->label . $after;
        elseif ( $show_home_link && $show_last_sep ) echo $sep;
      }

    } elseif ( is_attachment() ) {
      $parent = get_post( $parent_id );
      $cat = get_the_category( $parent->ID ); $catID = $cat[0]->cat_ID;
      $parents = get_ancestors( $catID, 'category' );
      $parents = array_reverse( $parents );
      $parents[] = $catID;
      foreach ( $parents as $cat ) {
        $position += 1;
        if ( $position > 1 ) echo $sep;
        echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
      }
      $position += 1;
      echo $sep . sprintf( $link, get_permalink( $parent ), $parent->post_title, $position );
      if ( $show_current ) echo $sep . $before . get_the_title() . $after;
      elseif ( $show_last_sep ) echo $sep;

    } elseif ( is_page() && ! $parent_id ) {
      if ( $show_home_link && $show_current ) echo $sep;
      if ( $show_current ) echo $before . get_the_title() . $after;
      elseif ( $show_home_link && $show_last_sep ) echo $sep;

    } elseif ( is_page() && $parent_id ) {
      $parents = get_post_ancestors( get_the_ID() );
      foreach ( array_reverse( $parents ) as $pageID ) {
        $position += 1;
        if ( $position > 1 ) echo $sep;
        echo sprintf( $link, get_page_link( $pageID ), get_the_title( $pageID ), $position );
      }
      if ( $show_current ) echo $sep . $before . get_the_title() . $after;
      elseif ( $show_last_sep ) echo $sep;

    } elseif ( is_tag() ) {
      if ( get_query_var( 'paged' ) ) {
        $position += 1;
        $tagID = get_query_var( 'tag_id' );
        echo $sep . sprintf( $link, get_tag_link( $tagID ), single_tag_title( '', false ), $position );
        echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
      } else {
        if ( $show_home_link && $show_current ) echo $sep;
        if ( $show_current ) echo $before . sprintf( $text['tag'], single_tag_title( '', false ) ) . $after;
        elseif ( $show_home_link && $show_last_sep ) echo $sep;
      }

    } elseif ( is_author() ) {
      $author = get_userdata( get_query_var( 'author' ) );
      if ( get_query_var( 'paged' ) ) {
        $position += 1;
        echo $sep . sprintf( $link, get_author_posts_url( $author->ID ), sprintf( $text['author'], $author->display_name ), $position );
        echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
      } else {
        if ( $show_home_link && $show_current ) echo $sep;
        if ( $show_current ) echo $before . sprintf( $text['author'], $author->display_name ) . $after;
        elseif ( $show_home_link && $show_last_sep ) echo $sep;
      }

    } elseif ( is_404() ) {
      if ( $show_home_link && $show_current ) echo $sep;
      if ( $show_current ) echo $before . $text['404'] . $after;
      elseif ( $show_last_sep ) echo $sep;

    } elseif ( has_post_format() && ! is_singular() ) {
      if ( $show_home_link && $show_current ) echo $sep;
      echo get_post_format_string( get_post_format() );
    }

    echo $wrap_after;

  }
}

// delete post comment
add_action('admin_menu', 'remove_menus_ssh');
function remove_menus_ssh(){
  global $menu;
  $restricted = array(
    __('Comments')
  );
  end ($menu);
  while (prev($menu)){
    $value = explode(' ', $menu[key($menu)][0]);
    if( in_array( ($value[0] != NULL ? $value[0] : "") , $restricted ) ){
      unset($menu[key($menu)]);
    }
  }
}


function ajax_form(){
  $name = $_REQUEST['name'];
  $tel = $_REQUEST['tel'];
  $response = '';
  $thm  = 'Заказ звонка';
  $thm  = "=?utf-8?b?". base64_encode($thm) ."?=";
  $msg = "Имя: ".$name."<br/>
      Телефон: ".$tel ."<br/>";
  $mail_to = 'evgeniyatorva@mail.ru';
  $headers = "Content-Type: text/html; charset=utf-8\n";
  $headers .= 'From: OWN mebel' . "\r\n";

// Отправляем почтовое сообщение

  if(mail($mail_to, $thm, $msg, $headers)){
      $response = 'Сообщение отправлено';
  }else
      $response = 'Ошибка при отправке';

// Сообщение о результате отправки почты

  if ( defined( 'DOING_AJAX' ) && DOING_AJAX ){
      echo $response;
      wp_die();
  }
}

add_action('wp_ajax_nopriv_ajax_order', 'ajax_form' );
add_action('wp_ajax_ajax_order', 'ajax_form' );



?>