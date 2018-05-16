<?php

$EM_CONF[$_EXTKEY] = array(
	'title' => 'ifPage White Vita',
	'description' => 'IfPage Whitevita - Distribution package based upon the if_themeconfiguration extension with basic blog template and styles',
	'category' => 'distribution',
	'author' => 'Alexander Büchner, Christian Händel',
	'author_email' => 'info@interfrog.de',
	'author_company' => 'Interfrog Produktion GmbH',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '1.0.0',
	'constraints' => array(
		'depends' => array(
			'extbase' => '7.6.0-7.99.99',
			'fluid' => '7.6.0-7.99.99',
			'typo3' => '7.6.2-7.99.99',
			'css_styled_content' => '7.6.0-7.99.99',
			'news' => '5.2.0-5.99.99',
			'gridelements' => '7.0.0-7.99.99',
			'powermail' => '3.8.0-3.99.99',
			'realurl' => '2.2.0-2.99.99',
			'if_themeconfiguration' => '1.0.0-1.0.0',
		),
		'conflicts' => array(
			'fluid_styled_content' => ''
		),
		'suggests' => array(
		),
	),
	'autoload' => array(
		'classmap' => array('Classes')
	),
);
