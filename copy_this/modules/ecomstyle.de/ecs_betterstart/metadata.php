<?php
/**
 * @link      http://www.ecomstyle.de
 * @copyright (C) ecomstyle.de 2013
 * @version 1.1
 */

	$aModule = array(
		'id'          => 'ecs-betterstart',
        'title'        => '<strong style="color:#04B431;">e</strong><strong>ComStyle.de</strong>:  <i>BetterStart</i>',
		'description' => 'Starthilfe f&uuml;r den OXID eShop!
                <br><iframe frameborder="no" width="600px" height="400px" src="http://tinyurl.com/m23ozfo"></iframe>',
   
		'thumbnail'   => 'ecomstyle.png',
		'version'     => '1.1',
		'author'      => '<strong style="font-size: 17px;color:#04B431;">e</strong><strong style="font-size: 16px;">ComStyle.de</strong>',
		'email'       => 'info@ecomstyle.de',
		'url'         => 'http://ecomstyle.de',
		'extend'      => array( 
			'start' => 'ecomstyle.de/ecs_betterstart/extend/start_custom',
		),
    'templates' => array(
        'start_custom.tpl' => 'ecomstyle.de/ecs_betterstart/out/azure/tpl/start_custom.tpl',
    ),
    'files' => array(
    ),
    'blocks' => array(
        array('template' => 'layout/sidebar.tpl', 'block'=>'sidebar_partners', 'file'=>'sidebar_partners_custom.tpl','position' => '1'),
        array('template' => 'layout/sidebar.tpl', 'block'=>'sidebar_shopluperatings', 'file'=>'sidebar_shopluperatings_custom.tpl'),
     ),
    'settings' => array(
        array('group' => 'ecs_main', 'name' => 'ecs_bsstarttpl', 'type' => 'bool',  'value' => '1'),  
        array('group' => 'ecs_main', 'name' => 'ecs_bspartnerbox', 'type' => 'bool',  'value' => '1'),
        array('group' => 'ecs_main', 'name' => 'ecs_bsshoplupe', 'type' => 'bool',  'value' => '1'),  
    ),
);
?>