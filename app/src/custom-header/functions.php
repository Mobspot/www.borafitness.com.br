<?php

Class OptionsHeader {
	
	public function __construct(){
		add_action("init", array($this, 'init'));
	}
	
	public function init(){
		acf_add_options_page(array(
			'page_title' 	=> 'Opções Header',
			'menu_title'	=> 'Header Menu',
			'menu_slug' 	=> 'options-header-o2',
			'capability'	=> 'edit_posts',
			'parent_slug' => '',
			'position' 		=> false,
			'icon_url' 		=> 'dashicons-menu-alt3',
			'redirect'		=> false
		));
		
		include "acf.php";
	}
}