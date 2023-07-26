<?php 
if( function_exists('acf_add_local_field_group') ):

  acf_add_local_field_group(array(
    'key' => 'group_5f11feefe2d8f',
    'title' => 'Configurações de Menu',
    'fields' => array(
			array(
				'key' => 'field_5f1215987504f',
				'label' => 'Cor do Header',
				'name' => 'cor_do_header',
				'type' => 'color_picker',
				'instructions' => 'Selecione a cor do header',
				'required' => 0,
				'conditional_logic' => 0,
			),
			array(
				'key' => 'field_ff3415987504f',
				'label' => 'Cor do Menu',
				'name' => 'cor_do_menu',
				'type' => 'color_picker',
				'instructions' => 'Selecione a cor do menu',
				'required' => 0,
				'conditional_logic' => 0,
			),
			array(
				'key' => 'field_5f1667987504f',
				'label' => 'Link Instagram',
				'name' => 'link_instagram',
				'type' => 'url',
				'instructions' => 'Link do Instagram',
				'required' => 0,
				'conditional_logic' => 0,
			),
			array(
				'key' => 'field_5f12a3987504f',
				'label' => 'Link Facebook',
				'name' => 'link_facebook',
				'type' => 'url',
				'instructions' => 'Link do Facebook',
				'required' => 0,
				'conditional_logic' => 0,
			),
			array(
				'key' => 'field_5f1215946504f',
				'label' => 'Link Youtube',
				'name' => 'link_youtube',
				'type' => 'url',
				'instructions' => 'Link do Youtube',
				'required' => 0,
				'conditional_logic' => 0,
			),
			array(
				'key' => 'field_5f1218816504f',
				'label' => 'Logo',
				'name' => 'logo',
				'type' => 'image',
				'instructions' => 'Logo do site',
				'required' => 0,
				'conditional_logic' => 0,
			),
    ),
    'location' => array(
      array(
        array(
          'param' => 'options_page',
          'operator' => '==',
          'value' => 'options-header-o2',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
  ));
  
  endif;