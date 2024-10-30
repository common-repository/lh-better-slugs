<?php
/**
 * Plugin Name: LH Better Slugs
 * Plugin URI: https://lhero.org/portfolio/lh-better-slugs/
 * Description: Smartify your post and page slugs by removing too short or insignificant stopwords automatically.
 * Author: Peter Shaw
 * Version: 1.00
 * Author URI: https://shawfactor.com/
*/


if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if (!class_exists('LH_Better_slugs_plugin')) {
    
class LH_Better_slugs_plugin {

	
	private static $instance;
	
static function get_min_chars(){
    
    $min_chars = 3;
    
    return apply_filters('lh_better_slugs_min_chars', $min_chars);
    
    }
    
static function get_strlen(){

return (function_exists('mb_strlen')) ? 'mb_strlen' : 'strlen'; 


}
    
    
static function write_log($log) {
        if (true === WP_DEBUG) {
            if (is_array($log) || is_object($log)) {
                error_log(print_r($log, true));
            } else {
                error_log($log);
            }
        }
    }
    
    

public function better_slug($slug, $post_ID, $post_status, $post_type, $post_parent, $original_slug='' ) {
    
    	         $check = get_post_meta($post_ID, '_lh-better_slugs_postcheck', true);
	        
	        
	        if (empty($check) && ($post_type == 'post')){
    
   
    
    $min_chars = self::get_min_chars();
    $stopwords = apply_filters('lh_better_slugs_stopwords', array('and','the','at'));
    

    
		if ($slug === '') return '';

		$old_slug = $slug;
		// strip out too short parts and members of the stoplist array
		$slug = explode('-', $slug);
		$f = self::get_strlen();
		foreach ($slug as $t) {
			$t_ = urldecode($t);
			if (($f($t_) >= $min_chars) && !(in_array($t_, $stopwords)) || is_numeric($t_)) {
				$out[] = $t;
			}
		}
		// are we acting overzealous?
		if (empty($out)) {
			$slug = $old_slug;
		} else {
		    
			$slug = join('-', array_unique($out));
		}
		
		add_post_meta( $post_ID, '_lh-better_slugs_postcheck', '1', true);
		
		return $slug;
		
		
		
		
		
	        } else {
	            
	            add_post_meta( $post_ID, '_lh-better_slugs_postcheck', '1', true);
	            
	            return $slug;
	            
	            
		
	            
	        }
	}

public function plugin_init(){

			add_filter('wp_unique_post_slug', array($this, 'better_slug'), 100, 6);
    
    
}


	
	 /**
     * Gets an instance of our plugin.
     *
     * using the singleton pattern
     */
    public static function get_instance(){
        if (null === self::$instance) {
            self::$instance = new self();
        }
 
        return self::$instance;
    }
    
    
	
	
	
	public function __construct() {
	    
	    //run our hooks on plugins loaded to as we may need checks       
        add_action( 'plugins_loaded', array($this,'plugin_init'));



	}


}

$lh_better_slugs_instance = LH_Better_slugs_plugin::get_instance();

}

?>