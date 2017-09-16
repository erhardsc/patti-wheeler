<?php
/*
Plugin Name: Slider Div
Plugin URI:
Description: Dynamic slider div that shows widget content after a link click
Version: .1
Author: Grayson Erhard
Author URI: https://graysonerhard.com
License: GPLv2 or later
Text Domain: slider-div
*/
// require_once 'checkout-address-suggestion-and-autocomplete-for-woocommerce/index.php';

// define('PLUGIN_NAME', 'slider-div');

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

add_action('wp_enqueue_scripts', 'slider_scripts');
function slider_scripts() {

  wp_enqueue_style('slider-div-style', plugin_dir_url(__FILE__) .'assets/css/slider-div-style.css');
  wp_enqueue_style('sexy-woo-checkout', plugin_dir_url(__FILE__) .'assets/css/sexy-woo-checkout.css');
  wp_enqueue_style('sexy-contact-form', plugin_dir_url(__FILE__) .'assets/css/sexy-contact-form.css');


	wp_register_script('google-api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyAmGuJawMPI3_uKkJ992SKGIjyG8cK_1y8&libraries=places', false, false, true);
  wp_register_script('slider-div', plugin_dir_url(__FILE__) .'assets/js/slider-div.js', array('jquery'), false, true);
	wp_register_script('sexy-woo-checkout', plugin_dir_url(__FILE__) .'assets/js/sexy-woo-checkout.js', array('jquery'), false, true);
	wp_register_script('autosize', plugin_dir_url(__FILE__) .'assets/js/autosize.min.js', array('jquery'), false, true);
// 	wp_register_script('sexy-form-labels', plugin_dir_path() .'/assets/js/jquery.placeholder.label.js', array('jquery'), false, true);


	wp_enqueue_script('google-api');
	wp_enqueue_script('slider-div');
	wp_enqueue_script('autosize');
// 	wp_enqueue_script('sexy-form-label');

  $data = array(
      'apply_coupon_nonce' => wp_create_nonce('apply-coupon'),
      'remove_coupon_nonce' => wp_create_nonce('remove-coupon'),
      'update_order_nonce' => wp_create_nonce('update-order-review'),
      'remove_order_item' => wp_create_nonce('order-item'),
      'update_total_price_nonce'	=> wp_create_nonce('update_total_price'),
      'update_shipping_method_nonce'	=> wp_create_nonce('update-shipping-method'),
      'update_order_review'	=> wp_create_nonce('update-order-review'),
      'process_checkout' => wp_create_nonce('woocommerce-process_checkout')
  );

  wp_localize_script('sexy-woo-checkout', 'localized_config', $data);

  wp_enqueue_script('sexy-woo-checkout');
  wp_enqueue_script('sexy-contact-form');

}

add_action( 'widgets_init', 'slider_widget_admin_area' );
function slider_widget_admin_area() {
  register_sidebar( array(
      'name' => __( 'Slider Div', 'prettycreative' ),
      'id' => 'slider',
      'description' => __( '', 'prettycreative' ),
      'before_widget' => '<section id="%1$s" class="widget %2$s">',
      'after_widget'  => '</section>',
      'before_title'  => '<h4 class="widgettitle">',
      'after_title'   => '</h4>',
  ) );
}


add_action('get_footer', 'display_slider_widget');
function display_slider_widget() {
  ?>
  <div id="slider" class="slider">
	  <section id="close_slider" class="widget widget_text">
		  <div class="textwidget">
			  <a href="#/" class="close" data-wpel-link="internal"><i class="fa fa-times-circle fa-2x"></i></a>
			</div>
		</section>
		
		<section id="sexy-woo-messages" class="widget widget_text">
		  <div class="textwidget"></div>
		</section>
		
  	<?php dynamic_sidebar('slider'); ?>
  	<section id="sexy-woo-cart">
	  	<h4>CART</h4>
	  	<div id="sexy-woo-cart-container">
  			<?php echo do_shortcode('[woocommerce_cart]'); ?>
	  	</div>
        <a href="#" class="cart_plus plus_btn"><span>+</span></a>
  	</section>
  	<section id="sexy-woo-checkout">
	  	<h4>CHECKOUT</h4>
  		<?php echo do_shortcode('[woocommerce_checkout]'); ?>
  		<a href="#" class="checkout_plus plus_btn"><span>+</span></a>
  	</section>
  	
  </div>
  <?php
}






// AJAX REFRESH MINI CART
function sexy_ajax_refresh_cart() {
 	echo do_shortcode('[woocommerce_cart]');
  exit;
}
add_filter( 'wp_ajax_nopriv_sexy_ajax_refresh_cart', 'sexy_ajax_refresh_cart' );
add_filter( 'wp_ajax_sexy_ajax_refresh_cart', 'sexy_ajax_refresh_cart' );


function sexy_ajax_refresh_checkout() {
	echo do_shortcode('[woocommerce_checkout]');
  exit;
}
add_filter( 'wp_ajax_nopriv_sexy_ajax_refresh_checkout', 'sexy_ajax_refresh_checkout' );
add_filter( 'wp_ajax_sexy_ajax_refresh_checkout', 'sexy_ajax_refresh_checkout' );




add_action( 'wp_ajax_sexy_product_remove', 'sexy_product_remove' );
add_action( 'wp_ajax_nopriv_sexy_product_remove', 'sexy_product_remove' );
function sexy_product_remove() {
    $cart = WC()->instance()->cart;
    $id = $_POST['product_id'];
    $cart_id = $cart->generate_cart_id($id);
    $cart_item_id = $cart->find_product_in_cart($cart_id);

    if($cart_item_id){
       $cart->set_quantity($cart_item_id,0);
    }
    exit;
}


////////////////////////////////////////// WOOCOMMERCE OPTIONS 


add_filter( 'woocommerce_ship_to_different_address_checked', '__return_false' );


add_filter( 'woocommerce_billing_fields', 'wc_npr_filter_phone', 10, 1 );

function wc_npr_filter_phone( $address_fields ) {
$address_fields['billing_phone']['required'] = false;
return $address_fields;
}



/**
 * WooCommerce Extra Feature
 * --------------------------
 *
 * Change number of related products on product page
 * Set your own value for 'posts_per_page'
 *
 */ 
function woo_related_products_limit() {
  global $product;
	
	$args['posts_per_page'] = 2;
	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args' );
function jk_related_products_args( $args ) {
	$args['posts_per_page'] = 2; // 4 related products
	$args['columns'] = 2; // arranged in 2 columns
	return $args;
}


add_filter('woocommerce_cross_sells_total', 'cartCrossSellTotal');
function cartCrossSellTotal($total) {
	$total = '1';
	return $total;
}

add_filter( 'wp_ajax_nopriv_sexy_update_total_price', 'sexy_update_total_price' );
add_filter( 'wp_ajax_sexy_update_total_price', 'sexy_update_total_price' );
function sexy_update_total_price() {

    // Skip product if no updated quantity was posted or no hash on WC_Cart
    if( !isset( $_POST['hash'] ) || !isset( $_POST['quantity'] ) ){
        exit;
    }

    $cart_item_key = $_POST['hash'];

    if( !isset( WC()->cart->get_cart()[ $cart_item_key ] ) ){
        exit;
    }

    $values = WC()->cart->get_cart()[ $cart_item_key ];

    $_product = $values['data'];

    // Sanitize
    $quantity = apply_filters( 'woocommerce_stock_amount_cart_item', apply_filters( 'woocommerce_stock_amount', preg_replace( "/[^0-9\.]/", '', filter_var($_POST['quantity'], FILTER_SANITIZE_NUMBER_INT)) ), $cart_item_key );

    if ( '' === $quantity || $quantity == $values['quantity'] )
        exit;

    // Update cart validation
    $passed_validation  = apply_filters( 'woocommerce_update_cart_validation', true, $cart_item_key, $values, $quantity );

    // is_sold_individually
    if ( $_product->is_sold_individually() && $quantity > 1 ) {
        wc_add_notice( sprintf( __( 'You can only have 1 %s in your cart.', 'woocommerce' ), $_product->get_title() ), 'error' );
        $passed_validation = false;
    }

    if ( $passed_validation ) {
        WC()->cart->set_quantity( $cart_item_key, $quantity, false );
    }

    // Recalc our totals
    WC()->cart->calculate_totals();
    woocommerce_cart_totals();
    exit;
}





//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// CUSTOM PHONE FIELD & CHANGE PLACEHOLDERS
add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

// Our hooked in function - $fields is passed via the filter!
function custom_override_checkout_fields( $fields ) {
     
     unset($fields['billing']);
     unset($fields['shipping']['shipping_country']);
     
     $fields['billing']['billing_first_name'] = array(
 	    'placeholder'   => _x('First Name', 'placeholder', 'woocommerce'),
 	    'label'					=> __('First Name', 'woocommerce'),
	    'priority'		=> 10
     );
     $fields['billing']['billing_last_name'] = array(
	    'placeholder'   => _x('Last Name', 'placeholder', 'woocommerce'),
 	    'label'					=> __('Last Name', 'woocommerce'),
	    'priority'		=> 20
     );
     $fields['billing']['billing_email'] = array(
	    'placeholder'   => _x('Email', 'placeholder', 'woocommerce'),
	    'label'					=> __('Email', 'woocommerce'),
	    'priority'		=> 30
     );
     $fields['billing']['billing_address_1'] = array(
	    'placeholder'   => _x('Address 1', 'placeholder', 'woocommerce'),
	    'label'					=> __('Address 1', 'woocommerce'),
	    'priority'		=> 40
     );
     $fields['billing']['billing_address_2'] = array(
	    'placeholder'   => _x('Address 2', 'placeholder', 'woocommerce'),
	    'label'					=> __('Address 2', 'woocommerce'),
	    'priority'		=> 50
     );
     $fields['billing']['billing_city'] = array(
	    'type'			=> 'text',
	    'placeholder'   => _x('City', 'placeholder', 'woocommerce'),
	    'label'					=> __('City', 'woocommerce'),
	    'priority'		=> 60
     );
     $fields['billing']['billing_state'] = array(
	    'placeholder'   => _x('State', 'placeholder', 'woocommerce'),
	    'label'					=> __('State', 'woocommerce'),
	    'type'   => 'state',
	    'priority'		=> 70
     );
     $fields['billing']['billing_postcode'] = array(
	    'type'			=> 'text',
	    'placeholder'   => _x('Zip', 'placeholder', 'woocommerce'),
	    'label'					=> __('Zip', 'woocommerce'),
	    'priority'		=> 80
     );
     $fields['billing']['billing_country'] = array(
	    'type'			=> 'country',
	    'placeholder'   => _x('Country', 'placeholder', 'woocommerce'),
	    'label'					=> __('Country', 'woocommerce'),
	    'priority'		=> 90
     );
     $fields['billing']['billing_phone'] = array(
	    'placeholder'   => _x('Phone', 'placeholder', 'woocommerce'),
	    'label'					=> __('Phone', 'woocommerce'),
	    'required'  => false,
	    'class'     => array('form-row-wide'),
	    'clear'     => true,
	    'priority'	=> 95
     );
/*
     $fields['billing']['billing_address_google_api'] = array(
	    'placeholder'   => _x('Billing Address', 'placeholder', 'woocommerce'),
	    'label'					=> __('Billing Address', 'woocommerce'),
	    'required'  => false,
	    'class'     => array('form-row-wide'),
	    'clear'     => true,
	    'priority'	=> 90
     );
*/



     $fields['shipping']['shipping_first_name'] = array(
	    'placeholder'   => _x('First Name', 'placeholder', 'woocommerce'),
	    'label'					=> __('First Name', 'woocommerce'),
	    'priority' 		=> 10
     );
     $fields['shipping']['shipping_last_name'] = array(
	    'placeholder'   => _x('Last Name', 'placeholder', 'woocommerce'),
 	    'label'					=> __('Last Name', 'woocommerce'),
	    'priority' 		=> 20
     );
     $fields['shipping']['shipping_address_1'] = array(
	    'placeholder'   => _x('Address 1', 'placeholder', 'woocommerce'),
	    'label'					=> __('Address 1', 'woocommerce'),
	    'priority' 		=> 30
     );
     $fields['shipping']['shipping_address_2'] = array(
	    'placeholder'   => _x('Address 2', 'placeholder', 'woocommerce'),
	    'label'					=> __('Address 2', 'woocommerce'),
	    'priority' 		=> 40
     );
     $fields['shipping']['shipping_postcode'] = array(
	    'type'			=> 'text',
	    'placeholder'   => _x('Zip', 'placeholder', 'woocommerce'),
	    'label'					=> __('Zip', 'woocommerce'),
     );
     $fields['shipping']['shipping_city'] = array(
	    'type'			=> 'text',
	    'placeholder'   => _x('City', 'placeholder', 'woocommerce'),
	    'label'					=> __('City', 'woocommerce'),
     );
     $fields['shipping']['shipping_state'] = array(
	    'type'			=> 'state',
	    'placeholder'   => _x('State', 'placeholder', 'woocommerce'),
     );
     $fields['shipping']['shipping_country'] = array(
	     'type'			=> 'country',
	    'placeholder'   => _x('Country', 'placeholder', 'woocommerce'),
	    'label'					=> __('Country', 'woocommerce'),
	    'priority' 		=> 60
     );
     $fields['shipping']['shipping_phone'] = array(
	    'placeholder'   => _x('Phone', 'placeholder', 'woocommerce'),
	    'label'					=> __('Phone', 'woocommerce'),
	    'required'  => false,
	    'class'     => array('form-row-wide'),
	    'clear'     => true,
	    'priority'	=> 90
     );
/*
     $fields['shipping']['shipping_address_google_api'] = array(
	    'placeholder'   => _x('Shipping Address', 'placeholder', 'woocommerce'),
	    'label'					=> __('Shipping Address', 'woocommerce'),
	    'required'  => false,
	    'class'     => array('form-row-wide'),
	    'clear'     => true,
	    'priority'	=> 90
     );
*/




     unset($fields['order']['order_comments']); 

     return $fields;
}

// WooCommerce Checkout Fields Hook
add_filter('woocommerce_checkout_fields','custom_wc_checkout_fields_no_label');

// Our hooked in function - $fields is passed via the filter!
// Action: remove label from $fields
function custom_wc_checkout_fields_no_label($fields) {
    // loop by category
    foreach ($fields as $category => $value) {
        // loop by fields
        foreach ($fields[$category] as $field => $property) {
            // remove label property
            unset($fields[$category][$field]['label']);
        }
    }
     return $fields;
}