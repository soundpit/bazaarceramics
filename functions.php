<?php

//enque the new styles
function theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

//set a new logo for the login screen
function my_login_logo()
{ ?>
	<style type="text/css">
		
		.login h1 a {
			background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png) !important;		
			width:300px !important;
			height:200px !important;
			background-size: 300px 200px !important;		
		}
		
		.login {
			background-color: #ffffff !important;
		}
		
		.login form {
			background-color: lightblue !important;
			border-radius: 5px !important;
		}
		
		/* the font sizes are too big */
		#user_login, #user_pass {
			font-size:16px;
			padding:4px 4px 4px 8px;
		}
		
	</style>

<?php }//end function

add_action( 'login_enqueue_scripts', 'my_login_logo' );


?>
