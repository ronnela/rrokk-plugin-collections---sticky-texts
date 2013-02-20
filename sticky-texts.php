<?php
/**
 * Duplicate this file as many times as you would like, just be sure to change the
 * Empty_Widget class name to a custom name of your choice. Have fun! redrokk.com
 * 
 * Plugin Name: Sticky Texts
 * Description: Single Widget Class handles all of the widget responsibility, all that you need to do is create the html. Just use Find/Replace on the Contact_RedRokk_Widget keyword to rebrand this class for your needs.
 * Author: RedRokk Interactive Media
 * Version: 1.0.0
 * Author URI: http://www.redrokk.com
 */

/**
 * Actions and Filters
 *
 * Register any and all actions here. Nothing should actually be called
 * directly, the entire system will be based on these actions and hooks.
 */
include("widget.class.php");
add_action( 'widgets_init', create_function( '', 'register_widget("Sticky_Texts");' ) );

/**
 * This is the class that you'll be working with. Duplicate this class as many times as you want. Make sure
 * to include an add_action call to each class, like the line above.
 *
 * @author byrd
 *
 */
class Sticky_Texts extends Empty_Widget_Abstract
{
	/**
	 * Widget settings
	 *
	 * Simply use the following field examples to create the WordPress Widget options that
	 * will display to administrators. These options can then be found in the $params
	 * variable within the widget method.
	 *
	 *
	 */
	protected $widget = array(
		// you can give it a name here, otherwise it will default
		// to the classes name. BTW, you should change the class
		// name each time you create a new widget. Just use find
		// and replace!
		'name' => false,

		// this description will display within the administrative widgets area
		// when a user is deciding which widget to use.
		'description' => 'Single Widget Class handles all of the widget responsibility, all that you need to do is create the html and change the description. RedRokk',

		// determines whether or not to use the sidebar _before and _after html
		'do_wrapper' => true,

		// determines whether or not to display the widgets title on the frontend
		'do_title'	=> false,

		// string : if you set a filename here, it will be loaded as the view
		// when using a file the following array will be given to the file :
		// array('widget'=>array(),'params'=>array(),'sidebar'=>array(),
		// alternatively, you can return an html string here that will be used
		'view' => false,
	
		// If you desire to change the size of the widget administrative options
		// area
		'width'	=> 350,
		'height' => 350,
	
		// Shortcode button row
		'buttonrow' => 4,
	
		// The image to use as a representation of your widget.
		// Whatever you place here will be used as the img src
		// so we have opted to use a basencoded image.
		'thumbnail' => 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAgAAAQABAAD//gAEKgD/2wBDAAUDBAQEAwUEBAQFBQUGBwwIBwcHBw8LCwkMEQ8SEhEPERETFhwXExQaFRERGCEYGh0dHx8fExciJCIeJBweHx7/2wBDAQUFBQcGBw4ICA4eFBEUHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh7/wgARCAAUABQDACIAAREBAhEB/8QAGQAAAgMBAAAAAAAAAAAAAAAAAQUDBAYH/8QAFwEBAQEBAAAAAAAAAAAAAAAAAgMAAf/EABcBAQEBAQAAAAAAAAAAAAAAAAIDAAH/2gAMAwAAARECEQAAAd1NnV5p0q2ldY0qLuHjnILl/8QAGhAAAgMBAQAAAAAAAAAAAAAAAwQBAgUAEv/aAAgBAAABBQLR0hiYH7sFM9GV3U7S6pkPCNj1iFWVhH6Eqknv/8QAGREBAAMBAQAAAAAAAAAAAAAAAQACERAh/9oACAECEQE/AVzwlqmyq5z/xAAYEQACAwAAAAAAAAAAAAAAAAAAARARMf/aAAgBAREBPwHSxx//xAAqEAACAQEFBQkAAAAAAAAAAAABAgMABBESFDEFITJBoRATNEJRYnGB4f/aAAgBAAAGPwLuDao7MBxO28/AFZix7RzCjUOVKn7GlJMmjdKlezrJng96EEYcB9b+WtSQWjwRcNKEbCG/BRZFwxu5ZB7eVAteHXhdTcRV0888yjyud3Ts/8QAHxAAAgIBBAMAAAAAAAAAAAAAAREAITFBUXGBkaGx/9oACAEAAAE/IT5Q1rM+kycOGaO+dyAIDSloFg6sEeYz27IWsc8FbS1EVOtm+wVF+JsJNo4D7gEf5hMxwbYr8gA+4AghQn//2gAMAwAAARECEQAAEKOMiP/EABwRAQABBAMAAAAAAAAAAAAAAAEAEBEhMUGh8P/aAAgBAhEBPxB2BixwN/dQDCCWdap//8QAGREBAQEAAwAAAAAAAAAAAAAAAREAECGx/9oACAEBEQE/EAir35hTAvH/xAAbEAEBAQEBAQEBAAAAAAAAAAABESEAQTFRYf/aAAgBAAABPxCJWQrsBIigoSQIrhnchRFVYhuqGUnUIQxKKomKBKYynCVjmiAqAKsLYfICkc2VqFCsBRICVCCxg02iPAgD85qI1G76DsfRo+nGcCQ4aTe/KP5xAAGAfDv/2Q==',
	
		/* The field options that you have available to you. Please
		 * contribute additional field options if you create any.
		 *
		 */
		'fields' => array(
			// You should always offer a widget title
			array(
				'name' => 'Title',
				'desc' => '',
				'id' => 'title',
				'type' => 'text',
				'default' => 'Widget Title'
			),
			array(
				'name' => 'Textarea',
				'desc' => 'Enter big text here',
				'id' => 'textarea_id',
				'type' => 'textarea',
				'default' => 'Default value 2'
			)
		)
	);

	/**
	 * Widget HTML
	 *
	 * If you want to have an all inclusive single widget file, you can do so by
	 * dumping your css styles with base_encoded images along with all of your
	 * html string, right into this method.
	 *
	 * @param array $widget
	 * @param array $params
	 * @param array $sidebar
	 */
	function html($widget = array(), $params = array(), $sidebar = array())
	{
		?>
		<style>
			.followme_widget{
				display:block;
				overflow:hidden;
			}
		</style>
		
		<script>
			var init_mtop = 0;
			jQuery(".followme_widget").ready(function(){
				var ini_top = jQuery(".followme_widget").offset();
				init_mtop = ini_top.top;
			});
			
			jQuery(document).ready(function(){
				jQuery(document).scroll(scrolling);
			});
			
			function scrolling(){
				var top_spacing = 50;//set this to 0 if you want it to stick to the topmost of the page without spacing.
				var curr_scrolltop = jQuery(this).scrollTop();
				if((init_mtop-curr_scrolltop)<=top_spacing){
					jQuery(".followme_widget").css("margin-top",(curr_scrolltop-init_mtop+top_spacing)+"px")
				}
			}
		</script>
		<!-- Do not remove or change the classname for this div unless you know what you are doing... -->
		<div class="followme_widget">			
			<!-- Your widget html goes here -->
			<?php echo $params["textarea_id"]?>
			
		</div>
		<?php 
	}
	
}