<?php
/**
 * @link      http://www.ecomstyle.de
 * @package   main
 * @copyright (C) ecomstyle.de 2013
 * @version 1.0
 */

	$aModule = array(
		'id'          => 'ecs-betterstart',
        'title'        => '<strong style="color:#04B431;">e</strong><strong>ComStyle.de</strong>:  <i>BetterStart</i>',
		'description' => 'Starthilfe f&uuml;r den OXID eShop!
                <br>
        <div style="background: #f2f2f2;padding: 10px;color:green;max-width:600px;">
        Wenn Sie mit diesem Gratismodul zufrieden sind, unterst&uuml;tzen Sie bitte die Weiterentwicklung und die Anpassung an zuk&uuml;nftige Shopversionen:<br><br>
        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
        <input type="hidden" name="cmd" value="_s-xclick">
        <input type="hidden" name="hosted_button_id" value="WUMDX4N78SCJS">
        <input type="image" src="https://www.paypalobjects.com/de_DE/DE/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="Danke">
        <img alt="" border="0" src="https://www.paypalobjects.com/de_DE/i/scr/pixel.gif" width="1" height="1">
        </form><br>
        Besuchen Sie auch unseren Internetshop: <a href="http://ecomstyle.de/" target="_blank"><strong style="font-size: 17px;color:#04B431;">e</strong><strong style="font-size: 16px;">ComStyle.de</strong></a><br>
        Folgende Leistungen bieten wir Ihnen an:
        <table style="width:100%">
        <td style="width:50%">
        <li>Shopthemes- und Templates</li>
        <li>Shopmodule</li>
        <li>Shopupdates</li>
        <li>Individuelle Templateanpasssungen</li>
        </td><td style="width:50%">
        <li>Theme- und Modulinstallationen</li>
        <li>Shopinstallationen</li>
        <li>Anbindung an Warenwirtschaftsysteme</li>
        <li>Beratung und Support</li>
        </td>
        </table>
        </div>',
   
		'thumbnail'   => 'ecomstyle.png',
		'version'     => '1.0',
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
        array('template' => 'widget/sidebar/partners.tpl', 'block'=>'partner_logos', 'file'=>'partner_logos_custom.tpl'),
     ),
    'settings' => array(
        array('group' => 'ecs_main', 'name' => 'ecs_bsstarttpl', 'type' => 'bool',  'value' => '1'),  
        array('group' => 'ecs_main', 'name' => 'ecs_bspartnerbox', 'type' => 'bool',  'value' => '1'),
        array('group' => 'ecs_main', 'name' => 'ecs_bspartnerts', 'type' => 'bool',  'value' => '1'),
        array('group' => 'ecs_main', 'name' => 'ecs_bsshoplupe', 'type' => 'bool',  'value' => '1'),  
    ),
);
?>