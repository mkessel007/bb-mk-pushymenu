<?php

/**
 * @class PushyMenuClass
 */
class PushyMenuClass extends FLBuilderModule {

	/**
	 * Constructor function for the module. You must pass the
	 * name, description, dir and url in an array to the parent class.
	 *
	 * @method __construct
	 */
	public function __construct() {
		parent::__construct(array(
				'name'            => __('Pushy Menu', 'fl-builder'),
				'description'     => __('Add an off canvas menu to your wordpress site with Beaver Builder', 'fl-builder'),
				'category'        => __('Custom Modules', 'fl-builder'),
				'partial_refresh' => true,
				'dir'             => PUSHY_MENU_DIR.'/',
				'url'             => PUSHY_MENU_URL.'/',
				'editor_export'   => true, // Defaults to true and can be omitted.
				'enabled'         => true, // Defaults to true and can be omitted.
			));

		// Already registered
		$this->add_css('font-awesome');

		/**
		 * Use these methods to enqueue css and js  */
		$this->add_js('pushy.min', $this->url.'js/pushy.min.js', array(), '', true);//loads pushy.min.js in the footer
		$this->add_css('pushy', $this->url.'css/pushy.css');//loads pushy.css in the header
	}
}

/**
 * Register the module and its form settings.
 */
FLBuilder::register_module('PushyMenuClass', array(//same class as above
		'content-tab' => array(// Tab
			'title'      => __('Content', 'fl-builder'), // Tab title
			'sections'   => array(
				'settings'  => array(
					'title'    => __('Settings', 'fl-builder'),
					'fields'   => array(
						//all our fields go here
						'menu' => pushy_get_menus(),

						'btn_text' => array(
							'type'    => 'text',
							'label'   => __('Button Text', 'fl-builder'),
							'default' => 'Menu',
						),

						'btn_icon'     => array(
							'type'        => 'icon',
							'label'       => __('Button Icon', 'fl-builder'),
							'default'     => 'fa fa-list',
							'show_remove' => true,
						),

						'menu_side' => array(
							'type'     => 'select',
							'label'    => __('Off Canvas Side', 'fl-builder'),
							'default'  => 'left',
							'options'  => array(
								'left'    => __('Left', 'fl-builder'),
								'right'   => __('Right', 'fl-builder'),
							),

						),
						'menu_item_align' => array(
							'type'           => 'select',
							'label'          => __('Menu Alignment', 'fl-builder'),
							'default'        => 'left',
							'options'        => array(
								'left'          => __('Left', 'fl-builder'),
								'center'        => __('Center', 'fl-builder'),
								'right'         => __('Right', 'fl-builder'),
							),
						),

					),
				),
			),
		), // end content-tab

		'style-tab' => array(// Tab
			'title'    => __('Style', 'fl-builder'),
			'sections' => array(
				'button'  => array(
					'title'  => __('Button', 'fl-builder'),
					'fields' => array(

						// all our fields go here

						'btn_background' => array(
							'type'          => 'color',
							'label'         => __('Button Background', 'fl-builder'),
							'default'       => '333333',
							'show_reset'    => true,
						),

						'btn_background_hover' => array(
							'type'                => 'color',
							'label'               => __('Button Background Hover', 'fl-builder'),
							'default'             => 'ccccc',
							'show_reset'          => true,
						),

						'btn_text_color' => array(
							'type'          => 'color',
							'label'         => __('Button Text Color', 'fl-builder'),
							'default'       => 'f6f6f6',
							'show_reset'    => true,
						),

						'btn_text_color_hover' => array(
							'type'                => 'color',
							'label'               => __('Button Text Hover Color', 'fl-builder'),
							'default'             => '333333',
							'show_reset'          => true,
						),
						'btn_padding_top' => array(
							'type'           => 'text',
							'label'          => __('Button padding Top/Bottom', 'fl-builder'),
							'default'        => '10',
							'maxlength'      => '3',
							'size'           => '4',
							'description'    => 'px',
						),
						'btn_padding_side' => array(
							'type'            => 'text',
							'label'           => __('Button padding Sides', 'fl-builder'),
							'default'         => '20',
							'maxlength'       => '2',
							'size'            => '3',
							'description'     => 'px',

						),
					),
				), // end button settings
				'menu'    => array(
					'title'  => __('Menu', 'fl-builder'),
					'fields' => array(

						// all our fields go here

						'menu_background' => array(
							'type'           => 'color',
							'label'          => __('Menu Background', 'fl-builder'),
							'default'        => '333333',
							'show_reset'     => true,
						),

						'menu_text_color' => array(
							'type'           => 'color',
							'label'          => __('Menu Text Color', 'fl-builder'),
							'default'        => 'f6f6f6',
							'show_reset'     => true,
						),

						'menu_text_color_hover' => array(
							'type'                 => 'color',
							'label'                => __('Menu Text Hover Color', 'fl-builder'),
							'default'              => '333333',
							'show_reset'           => true,
						),
						'menu_padding_top' => array(
							'type'            => 'text',
							'label'           => __('Menu padding Top/Bottom', 'fl-builder'),
							'default'         => '10',
							'maxlength'       => '3',
							'size'            => '4',
							'description'     => 'px',
						),
						'menu_padding_side' => array(
							'type'             => 'text',
							'label'            => __('Menu padding Sides', 'fl-builder'),
							'default'          => '20',
							'maxlength'        => '2',
							'size'             => '3',
							'description'      => 'px',

						),
						'menu_width'   => array(
							'type'        => 'text',
							'label'       => __('Menu Width', 'fl-builder'),
							'default'     => '200',
							'maxlength'   => '3',
							'size'        => '4',
							'description' => 'px',

						),
					),
				), // end menu settings

				'overlay' => array(
					'title'  => __('Overlay', 'fl-builder'),
					'fields' => array(

						// all our fields go here

						'overlay_background' => array(
							'type'              => 'color',
							'label'             => __('Overlay Background', 'fl-builder'),
							'default'           => '191918',
							'show_reset'        => true,
						),

						'overlay_opacity' => array(
							'type'           => 'text',
							'label'          => __('Overlay Opacity', 'fl-builder'),
							'default'        => '80',
							'maxlength'      => '3',
							'size'           => '4',
							'description'    => '%',
						),

					),
				), // end overlay settings
			),

		), //end style-tab
	));

function pushy_get_menus() {
	$get_menus = get_terms('nav_menu', array('hide_empty' => true));

	$fields = array(// Fields
		'type'  => 'select',
		'label' => __('Menu', 'fl-builder'),
		'help'  => __('Select a Wordpress menu that you created in the admin under Appearence > Menus.', 'fl-builder'),

	);
	if ($get_menus) {
		foreach ($get_menus as $key => $menu) {
			if ($key == 0) {
				$fields['default'] = $menu->name;
			}
			$menus[$menu->slug] = $menu->name;
		}
		$fields['options'] = $menus;
	} else {
		$fields['options'] = array('' => __('No Menus Found', 'fl-builder'));
	}
	return $fields;
}
