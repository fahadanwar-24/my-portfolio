<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access directly.
/**
 *
 * Bizkorp Admin Pages
 *
 */
if ( ! class_exists( 'Bizkorp_Admin' ) ) {

	class Bizkorp_Admin{
		private static $instance = null;

		public static function init() {
			if( is_null( self::$instance ) ) {
				self::$instance = new self();
			}
			return self::$instance;
		}

		public function __construct() {

			add_action( 'init', array( $this, 'bizkorp_create_tgmpa_page' ), 1 );
			add_action( 'admin_menu', array( $this, 'bizkorp_create_admin_page' ), 1 );
			add_action( 'admin_enqueue_scripts', array( $this, 'bizkorp_admin_page_enqueue_scripts' ) );

			add_filter( 'ocdi/plugin_page_setup', array( $this, 'bizkorp_pt_ocdi_page_setup' ) );

		}

		public function bizkorp_create_admin_page() {
			add_menu_page( esc_html__( 'Bizkorp', 'bizkorp' ), esc_html__( 'Bizkorp', 'bizkorp' ), 'manage_options', 'bizkorp', array( $this, 'bizkorp_admin_page_dashboard' ), 'dashicons-screenoptions', 2 );
			add_submenu_page( 'bizkorp', esc_html__( 'Welcome', 'bizkorp' ), esc_html__( 'Welcome & Support', 'bizkorp' ), 'manage_options', 'bizkorp', array( $this, 'bizkorp_admin_page_dashboard' ) );
		}

		public function bizkorp_admin_page_dashboard() {
			require_once BIZKORP_INC_DIR .'admin/page-dashboard.php';
		}

		public function bizkorp_create_tgmpa_page() {
			require_once BIZKORP_INC_DIR .'admin/class-tgm-plugin-activation.php';
			require_once BIZKORP_INC_DIR .'admin/page-tgmpa.php';
		}

		public function bizkorp_admin_page_enqueue_scripts() {
			wp_enqueue_style( 'bizkorp-admin', get_theme_file_uri( 'inc/admin/assets/css/admin.css' ), array(), BIZKORP_VERSION, 'all' );
		}

		public function bizkorp_pt_ocdi_page_setup( $args ) {

			$args['parent_slug'] = 'bizkorp';
			$args['menu_slug']   = 'bizkorp-import-demo';
			$args['menu_title']  = esc_html__( 'Import Demo', 'bizkorp' );
			$args['capability']  = 'manage_options';

			return $args;

		}

	}

	Bizkorp_Admin::init();
}