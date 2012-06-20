<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once(APPPATH.'libraries/smarty/libs/Smarty.class.php');
/**
 * Template
 * 
 * @package   
 * @author nerdmom
 * @copyright nerdmom
 * @version 2010
 * @access public
 * @description Makes it extremely easy to integrate code igniter and smarty as well as provide layout capabilites
 */
class CI_Smarty extends Smarty {

    /**
	* This is the layout that will load by default, unless you manually change it
     */
    var $layout_template = "/yonet/yonet_layout";
    
    /**
	* The default extension to use for our templates
     */    
    var $ext = ".tpl";

    /**
     * Template::__construct()
     * 
     * @return
     */
    function __construct()
    {
          // Define some Smarty paths
        $this->smarty = new Smarty();
        $this->smarty->template_dir = APPPATH . "views/templates";
        $this->smarty->compile_dir = APPPATH . "views/compiled";
        $this->smarty->config_dir = APPPATH . "libraries/smarty/configs";
        $this->smarty->cache_dir = APPPATH . "libraries/smarty/cache";
		$this->smarty->plugins_dir = APPPATH . "libraries/smarty/libs/plugins/";
		
		$this->assign( 'APPPATH', APPPATH );
		$this->assign( 'BASEPATH', BASEPATH );
		// $this->caching = Smarty::CACHING_LIFETIME_CURRENT; // Does something :)
		if ( method_exists( $this, 'assignByRef') )
		{
			$ci =& get_instance();
			$this->assignByRef("ci", $ci);
		}
		$this->force_compile = 1;	
		$this->caching = false;    // true->false yapildi.
		$this->cache_lifetime = 120;


		//log_message('debug', "Smarty Class Initialized");
    }

    /**
     * Template::assign()
     * Assigns values to be parsed by Smarty
     * If key is an array, we can loop through to assign multiple values at once
     * @param mixed $key - can be associative array
     * @param mixed $value - optional unless key is a string
     * @return object
     */
    function assign($key, $value = "")
    {
    		if( is_array($key) ) {
    								foreach($key as $var => $val) {
    								$this->smarty->assign($var, $val);    			
    							}    		    		    		    		
    		} else {
    						//if( empty($value) ) {
//    						throw new Exception("Value must be set when key is a string!");    			
//    					}
			    
			$this->smarty->assign($key,$value);    		    		    		    		
    		}
		    
		return $this;        
    }

    /**
     * Template::display()
     * Wrapper function for smarty->display().
     * Displays just one template
     * @param mixed $template
     * @return
     */
    function display($template)
    {
        $this->smarty->display($template);
    }

    /**
     * Template::fetch()
     * Wrapper function for smarty->fetch()
     * Grabs just one template
     * @param mixed $template
     * @return
     */
    function fetch($template)
    {
        $this->smarty->fetch($template);
    }

    /**
     * Template::layout()
     * Where the magic happens!
     * @param mixed $inner_template - The template to display within our layout
     * @param mixed $array - Any last-minute data to add to the template output
     * @return template
     */
    function layout($inner_template,$array = array())
    {
    		if( !empty($array) ) {
    			$this->assign($array);    		
    		}

          $this->assign("inner_template", $inner_template);

          $this->display($this->layout_template.$this->ext);
          
          // If we do not exit, CI will throw an error
          exit;
    }

}
