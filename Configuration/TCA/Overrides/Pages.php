<?php

$extKey="if_whitevita";

$temporaryPageColumns = array (
    'iconconfig' => array (
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.iconconfig',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.iconconfig.no' ,''),
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.iconconfig.house' ,'fa fa-home'),
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.iconconfig.envelope' ,'fa fa-envelope'),
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.iconconfig.glass' ,'fa fa-search'),
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.iconconfig.twitter' ,'fa fa-twitter'),
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.iconconfig.facebook' ,'fa fa-facebook'),
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.iconconfig.googleplus' ,'fa fa-google-plus'),
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.iconconfig.xing' ,'fa fa-xing'),
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.iconconfig.linkedin' ,'fa fa-linkedin'),
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.iconconfig.slideshare' ,'fa fa-slideshare'),
            ),
        )
    ),
    'seotitle' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.seotitle',
        'config' => Array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
        )
    ),
    'robots' => array (
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.robots',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.robots.default' ,''),
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.robots.nofollow' ,'1'),
            ),
        )
    ),
    'canonical' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.canonical',
        'config' => Array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
        )
    ),
    'fblike' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.fblike',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.social.recursive' ,''),
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.social.enable' ,'enable'),
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.social.disable' ,'disable'),
            ),
        )
    ),
    'twitter' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.twitter',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.social.recursive' ,''),
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.social.enable' ,'enable'),
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.social.disable' ,'disable'),
            ),
        )
    ),
    'googleplus' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.googleplus',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.social.recursive' ,''),
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.social.enable' ,'enable'),
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.social.disable' ,'disable'),
            ),
        )
    ),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
    'pages',
    $temporaryPageColumns,
    1
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'pages',
    'visibility',
    'iconconfig',
    'after:title'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'pages',
    '--div--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.div.seo,seotitle,robots,canonical',
    1,
    'after:lastUpdated'
);

$GLOBALS['TCA']['pages']['palettes']['socialplugins'] = array(
    'showitem' => 'fblike,twitter,googleplus',
    'canNotCollapse' => TRUE
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'pages',
    '--palette--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:pages.palette.socialplugins;socialplugins;',
    '',
    'after:backend_layout_next_level'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'pages',
    'layout',
    'linkconfig',
    'after:newUntil'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'pages',
    'header',
    'seotitle',
    'after:subtitle'
);
