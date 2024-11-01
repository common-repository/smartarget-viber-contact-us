<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://smartarget.online
 * @since      1.2
 *
 * @package    Smartarget
 * @subpackage Smartarget/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Smartarget
 * @subpackage Smartarget/public
 * @author     Erez <erezson@gmail.com >
 */
class SmartargetViber_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.2
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.2
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.2
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		$this->plugin_options = get_option($this->plugin_name);
	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.2
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in SmartargetViber_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The SmartargetViber_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/smartarget-viber-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.2
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in SmartargetViber_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The SmartargetViber_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

        $site = preg_replace("/www\.|https?:\/\/|\/$|\/?\?.+|\/.+|^\./", '', get_home_url());
        $hash = sha1(sha1("wordpress_viber_" . $site) . "_script");

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/smartarget-viber-public.js', array( 'jquery' ), $this->version, false );
		wp_localize_script( $this->plugin_name, 'smartarget_viber_params', ['hash' => $hash] );
	}
}
