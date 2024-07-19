<?php
// Регистрируем новый тип записей 
add_action('init', 'my_custom_init',0);
function my_custom_init(){
	register_post_type('news', array(
		'labels'             => array(
			'name'               => __('Новости'), // Основное название типа записи
			'singular_name'      => __('Новости'), // отдельное название записи типа Book
			'add_new'            => __('Добавить Новости'),
			'add_new_item'       => __('Добавить новые Новости'),
			'edit_item'          => __('Редактировать Новости'),
			'new_item'           => __('Новые Новости'),
			'view_item'          => __('Посмотреть Новости'),
			'search_items'       => __('Найти Новости'),
			'not_found'          => __('Новости не найдено'),
			'not_found_in_trash' => __('Новости не найдено'),
			'parent_item_colon'  => __(''),
			'menu_name'          => __('Новости')

		  ),
		'public'             => true,
        'has_archive'        => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'capability_type'    => 'post',
		
		'menu_icon'			 => 'dashicons-businessman',
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array('title','editor','thumbnail','excerpt'),
        'rewrite'            => [
            'with_front'     => false,
        ]
	) );


	register_post_type('vacancies', array(
		'labels'             => array(
			'name'               => __('Вакансии'), // Основное название типа записи
			'singular_name'      => __('Вакансии'), // отдельное название записи типа Book
			'add_new'            => __('Добавить Вакансии'),
			'add_new_item'       => __('Добавить новые Вакансии'),
			'edit_item'          => __('Редактировать Вакансии'),
			'new_item'           => __('Новые Вакансии'),
			'view_item'          => __('Посмотреть Вакансии'),
			'search_items'       => __('Найти Вакансии'),
			'not_found'          => __('Вакансии не найдено'),
			'not_found_in_trash' => __('Вакансии не найдено'),
			'parent_item_colon'  => __(''),
			'menu_name'          => __('Вакансии')

		  ),
		'public'             => true,
        'has_archive'        => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'capability_type'    => 'post',
		
		'menu_icon'			 => 'dashicons-businessman',
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array('title','editor','thumbnail','excerpt'),
        'rewrite'            => [
            'with_front'     => false,
        ]
	) );


	register_post_type('work', array(
		'labels'             => array(
			'name'               => __('Наши работы'), // Основное название типа записи
			'singular_name'      => __('Наши работы'), // отдельное название записи типа Book
			'add_new'            => __('Добавить Наши работы'),
			'add_new_item'       => __('Добавить новые Наши работы'),
			'edit_item'          => __('Редактировать Наши работы'),
			'new_item'           => __('Новые Наши работы'),
			'view_item'          => __('Посмотреть Наши работы'),
			'search_items'       => __('Найти Наши работы'),
			'not_found'          => __('Наши работы не найдено'),
			'not_found_in_trash' => __('Наши работы не найдено'),
			'parent_item_colon'  => __(''),
			'menu_name'          => __('Наши работы')

		  ),
		'public'             => true,
        'has_archive'        => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'capability_type'    => 'post',
		
		'menu_icon'			 => 'dashicons-businessman',
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array('title','editor','thumbnail','excerpt'),
        'rewrite'            => [
            'with_front'     => false,
        ]
	) );


}




// Удаление названия типа записи (префикса) из URL
add_action( 'init', 'pw24_post_type_rewrite' );
add_action( 'pre_get_posts', 'pw24_add_post_type_to_get_posts_request' );

function pw24_post_type_rewrite() {
	global $wp_rewrite;

	// в данном случае тип записи - pool_services
	$wp_rewrite->add_rewrite_tag( "%news%", '([^/]+)', "news=" );
	$wp_rewrite->add_permastruct( 'news', '%news%' );
}

function pw24_add_post_type_to_get_posts_request( $query ){

	if( is_admin() || ! $query->is_main_query() )
		return; // не основной запрос

	// не запрос с name параметром (как у постоянной страницы)
	if( ! isset($query->query['page']) || empty($query->query['name']) || count($query->query) != 2 )
		return;

	// добавляем 'pool_services'
	$query->set( 'post_type', [ 'post', 'page', 'news' ] );
}




add_action( 'init', 'pw24_post_type_rewrite1' );
add_action( 'pre_get_posts', 'pw24_add_post_type_to_get_posts_request1' );

function pw24_post_type_rewrite1() {
	global $wp_rewrite;

	// в данном случае тип записи - pool_services
	$wp_rewrite->add_rewrite_tag( "%vacancies%", '([^/]+)', "vacancies=" );
	$wp_rewrite->add_permastruct( 'vacancies', '%vacancies%' );
}

function pw24_add_post_type_to_get_posts_request1( $query ){

	if( is_admin() || ! $query->is_main_query() )
		return; // не основной запрос

	// не запрос с name параметром (как у постоянной страницы)
	if( ! isset($query->query['page']) || empty($query->query['name']) || count($query->query) != 2 )
		return;

	// добавляем 'pool_services'
	$query->set( 'post_type', [ 'post', 'page', 'vacancies' ] );
}



add_action( 'init', 'pw24_post_type_rewrite2' );
add_action( 'pre_get_posts', 'pw24_add_post_type_to_get_posts_request2' );

function pw24_post_type_rewrite2() {
	global $wp_rewrite;

	// в данном случае тип записи - pool_services
	$wp_rewrite->add_rewrite_tag( "%work%", '([^/]+)', "work=" );
	$wp_rewrite->add_permastruct( 'work', '%work%' );
}

function pw24_add_post_type_to_get_posts_request2( $query ){

	if( is_admin() || ! $query->is_main_query() )
		return; // не основной запрос

	// не запрос с name параметром (как у постоянной страницы)
	if( ! isset($query->query['page']) || empty($query->query['name']) || count($query->query) != 2 )
		return;

	// добавляем 'pool_services'
	$query->set( 'post_type', [ 'post', 'page', 'work' ] );
}





