<?php

$extKey = 'if_whitevita';
$llPath = 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:';
$themeconfigKey = 'if_themeconfiguration';

$temporaryThemeColumn = array(
    'maxwidth' => array(
        'label' => $llPath.'tx_ifthemeconfiguration_domain_model_themeconfiguration.maxwidth',
        'config' => array(
            'type' => 'input',
            'max' => 4,
            'lower' => 800,
            'upper' => 1920,
            'size' => 3,
            'default' => 1000
        )
    ),
    'pagebg' => array(
        'label' => $llPath.'tx_ifthemeconfiguration_domain_model_themeconfiguration.pagebg',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'pagetitle' => array(
        'label'=>$llPath.'tx_ifthemeconfiguration_domain_model_themeconfiguration.pagetitle',
        'config' => array(
            'type' => 'input',
            'max' => '255'
        )
    ),
    'pagetitlecolor' => array(
        'label' => $llPath.'tx_ifthemeconfiguration_domain_model_themeconfiguration.pagetitlecolor',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'pagetitlefont' => array(
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.font',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_font',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_font.name ASC',
        ),
    ),
    'pagetitlestyle' => array (
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle.normal' ,'normal'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle.italic' ,'italic'),
            ),
        )
    ),
    'pagetitleweight' => array (
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.200' ,'200'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.300' ,'300'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.400' ,'400'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.500' ,'500'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.600' ,'600'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.700' ,'700'),
            ),
        )
    ), 
    'pagetitle2' => array(
        'label' => $llPath.'tx_ifthemeconfiguration_domain_model_themeconfiguration.pagetitle2',
        'config' => array(
            'type' => 'input',
            'max' => '255'
        )
    ),
    'pagetitle2color' => array(
        'label' => $llPath.'tx_ifthemeconfiguration_domain_model_themeconfiguration.pagetitle2color',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'pagetitle2font' => array(
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.font',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_font',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_font.name ASC',
        ),
    ),
    'pagetitle2style' => array (
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle.normal' ,'normal'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle.italic' ,'italic'),
            ),
        )
    ),
    'pagetitle2weight' => array (
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.200' ,'200'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.300' ,'300'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.400' ,'400'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.500' ,'500'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.600' ,'600'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.700' ,'700'),
            ),
        )
    ), 
    'defaulttext' => array(
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.color',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ), 
    'fontsize' => array(
        'label' => $llPath.'tx_ifthemeconfiguration_domain_model_themeconfiguration.fontsize',
        'config' => array(
            'type' => 'input',
            'max' => 2,
            'lower' => 1,
            'upper' => 99,
            'size' => 3,
        )
    ),
    'generalfont' => array(
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.font',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_font',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_font.name ASC',
        ),
    ),
    'fontweight' => array (
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.200' ,'200'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.300' ,'300'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.400' ,'400'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.500' ,'500'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.600' ,'600'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.700' ,'700'),
            ),
        )
    ),
    'avatar' => array(
        'label' => $llPath.'tx_ifthemeconfiguration_domain_model_themeconfiguration.avatar',
        'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig('image', array(
            'appearance' => array(
                    'createNewRelationLinkTitle' => 'LLL:EXT:cms/locallang_ttc.xlf:images.addFileReference'
            ),
            'minitems' => 0,
            'maxitems' => 1,
            'foreign_match_fields' => array(
                'fieldname' => 'avatar'
            ),
            'filter' => array(
                '0' => array(
                    'parameters' => array(
                        'allowedFileExtensions' => 'jpg,jpeg,png,svg',
                    ),
                ),
            ),
        )),
    ),
    'avatarwidth' => array(
        'label' => $llPath.'tx_ifthemeconfiguration_domain_model_themeconfiguration.avatarwidth',
        'config' => array(
            'type' => 'input',
            'eval' => 'num,required',
            'size' => 1,
        ),
    ),
    'avatarheight' => array(
        'label' => $llPath.'tx_ifthemeconfiguration_domain_model_themeconfiguration.avatarheight',
        'config' => array(
            'type' => 'input',
            'eval' => 'num,required',
            'size' => 1,
        ),
    ),
    'roundedcorner' => array(
        'exclude' => 1,
        'label' => $llPath.'tx_ifthemeconfiguration_domain_model_themeconfiguration.roundedcorner',
        'config' => Array (
            'type' => 'check',
            'items' => array(
                array(
                    $llPath.'tx_ifthemeconfiguration_domain_model_themeconfiguration.roundedcorner.true','1'
                ),
            ),
        )
    ),
    'socialmenupid' => array(
        'label' => $llPath.'tx_ifthemeconfiguration_domain_model_themeconfiguration.socialmenupid',
        'config' => array(
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'maxitems' => 1,
            'minitems' => 0,
            'size' => 1
        )
    ),
    'socialmenutext' => array(
        'label' => $llPath.'tx_ifthemeconfiguration_domain_model_themeconfiguration.socialmenutext',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'socialmenubackground' => array(
        'label' => $llPath.'tx_ifthemeconfiguration_domain_model_themeconfiguration.socialmenubackground',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'socialmenuborder' => array(
        'label' => $llPath.'tx_ifthemeconfiguration_domain_model_themeconfiguration.socialmenuborder',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'socialmenuhinttext' => array(
        'label' => $llPath.'tx_ifthemeconfiguration_domain_model_themeconfiguration.socialmenuhinttext',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'socialmenuhintbackground' => array(
        'label' => $llPath.'tx_ifthemeconfiguration_domain_model_themeconfiguration.socialmenuhintbackground',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ), 
    'legalmenupid' => array(
        'label' => $llPath.'tx_ifthemeconfiguration_domain_model_themeconfiguration.legalmenupid',
        'config' => array(
            'type' => 'group',
            'internal_type' => 'db',
            'allowed' => 'pages',
            'maxitems' => 1,
            'minitems' => 0,
            'size' => 1
        )
    ),  
    'legalmenutext' => array(
        'label' => $llPath.'tx_ifthemeconfiguration_domain_model_themeconfiguration.legalmenutext',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'legalmenubackground' => array(
        'label' => $llPath.'tx_ifthemeconfiguration_domain_model_themeconfiguration.legalmenubackground',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'headerbackground' => array(
        'label' => $llPath.'tx_ifthemeconfiguration_domain_model_themeconfiguration.headerbackground',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'slidebarbackground' => array(
        'label' => $llPath.'tx_ifthemeconfiguration_domain_model_themeconfiguration.slidebarbackground',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'navtext' => array(
        'label' => $llPath.'tx_ifthemeconfiguration_domain_model_themeconfiguration.navtext',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'navbordercolor' => array(
        'label' => $llPath.'tx_ifthemeconfiguration_domain_model_themeconfiguration.navbordercolor',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'navtexthover' => array(
        'label' => $llPath.'tx_ifthemeconfiguration_domain_model_themeconfiguration.navtexthover',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'navtextactive' => array(
        'label' => $llPath.'tx_ifthemeconfiguration_domain_model_themeconfiguration.navtextactive',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'offcanvasopener' => array(
        'label' => $llPath.'tx_ifthemeconfiguration_domain_model_themeconfiguration.offcanvasopener',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'offcanvastext' => array(
        'label' => $llPath.'tx_ifthemeconfiguration_domain_model_themeconfiguration.offcanvastext',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'offcanvasbackground' => array(
        'label' => $llPath.'tx_ifthemeconfiguration_domain_model_themeconfiguration.offcanvasbackground',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'offcanvasactive' => array(
        'label' => $llPath.'tx_ifthemeconfiguration_domain_model_themeconfiguration.offcanvasactive',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'footertext' => array(
        'label' => $llPath.'tx_ifthemeconfiguration_domain_model_themeconfiguration.footertext',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'footerbackground' => array(
        'label' => $llPath.'tx_ifthemeconfiguration_domain_model_themeconfiguration.footerbackground',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'footeravatar' => array(
        'label' => $llPath.'tx_ifthemeconfiguration_domain_model_themeconfiguration.footeravatar',
        'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig('image', array(
            'appearance' => array(
                    'createNewRelationLinkTitle' => 'LLL:EXT:cms/locallang_ttc.xlf:images.addFileReference'
            ),
            'minitems' => 0,
            'maxitems' => 1,
            'foreign_match_fields' => array(
                'fieldname' => 'footeravatar'
            ),
            'filter' => array(
                '0' => array(
                    'parameters' => array(
                        'allowedFileExtensions' => 'jpg,jpeg,png,svg',
                    ),
                ),
            ),
        )),
    ),
    'h1' => array(
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.color',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'h1font' => array(
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.font',
        'config' => array(
            'items' => array(
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.emptyfont',0)
            ),
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_font',
            'minitems' => 0,
            'maxitems' => 1
        ),
    ),
    'h1style' => array (
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle.normal' ,'normal'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle.italic' ,'italic'),
            ),
        )
    ),
    'h1weight' => array (
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.200' ,'200'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.300' ,'300'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.400' ,'400'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.500' ,'500'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.600' ,'600'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.700' ,'700'),
            ),
        )
    ),
    'h2' => array(
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.color',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'h2font' => array(
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.font',
        'config' => array(
            'items' => array(
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.emptyfont',0)
            ),
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_font',
            'minitems' => 0,
            'maxitems' => 1
        ),
    ),
    'h2style' => array (
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle.normal' ,'normal'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle.italic' ,'italic'),
            ),
        )
    ),
    'h2weight' => array (
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.200' ,'200'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.300' ,'300'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.400' ,'400'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.500' ,'500'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.600' ,'600'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.700' ,'700'),
            ),
        )
    ),
    'h3' => array(
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.color',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'h3font' => array(
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.font',
        'config' => array(
            'items' => array(
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.emptyfont',0)
            ),
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_font',
            'minitems' => 0,
            'maxitems' => 1
        ),
    ),
    'h3style' => array (
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle.normal' ,'normal'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle.italic' ,'italic'),
            ),
        )
    ),
    'h3weight' => array (
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.200' ,'200'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.300' ,'300'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.400' ,'400'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.500' ,'500'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.600' ,'600'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.700' ,'700'),
            ),
        )
    ),
    'h4' => array(
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.color',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'h4font' => array(
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.font',
        'config' => array(
            'items' => array(
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.emptyfont',0)
            ),
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_font',
            'minitems' => 0,
            'maxitems' => 1
        ),
    ),
    'h4style' => array (
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle.normal' ,'normal'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle.italic' ,'italic'),
            ),
        )
    ),
    'h4weight' => array (
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.200' ,'200'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.300' ,'300'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.400' ,'400'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.500' ,'500'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.600' ,'600'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.700' ,'700'),
            ),
        )
    ),
    'h5' => array(
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.color',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'h5font' => array(
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.font',
        'config' => array(
            'items' => array(
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.emptyfont',0)
            ),
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_font',
            'minitems' => 0,
            'maxitems' => 1
        ),
    ),
    'h5style' => array (
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle.normal' ,'normal'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontstyle.italic' ,'italic'),
            ),
        )
    ),
    'h5weight' => array (
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.200' ,'200'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.300' ,'300'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.400' ,'400'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.500' ,'500'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.600' ,'600'),
                array('LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.fontweight.700' ,'700'),
            ),
        )
    ),
    'formfieldbackground' => array(
        'label' => $llPath.'tx_ifthemeconfiguration_domain_model_themeconfiguration.formfieldbackground',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'formborder' => array(
        'label' => $llPath.'tx_ifthemeconfiguration_domain_model_themeconfiguration.formborder',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'formborderfocus' => array(
        'label' => $llPath.'tx_ifthemeconfiguration_domain_model_themeconfiguration.formborderfocus',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'formbutton' => array(
        'label' => $llPath.'tx_ifthemeconfiguration_domain_model_themeconfiguration.formbutton',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'formbuttonhover' => array(
        'label' => $llPath.'tx_ifthemeconfiguration_domain_model_themeconfiguration.formbuttonhover',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'link' => array(
        'label' => $llPath.'tx_ifthemeconfiguration_domain_model_themeconfiguration.link',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'linkhover' => array(
        'label' => $llPath.'tx_ifthemeconfiguration_domain_model_themeconfiguration.linkhover',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'overlayboxtext' => array(
        'label' => $llPath.'tx_ifthemeconfiguration_domain_model_themeconfiguration.overlayboxtext',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'overlayboxbackground' => array(
        'label' => $llPath.'tx_ifthemeconfiguration_domain_model_themeconfiguration.overlayboxbackground',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'divider' => array(
        'label' => $llPath.'tx_ifthemeconfiguration_domain_model_themeconfiguration.divider',
        'config' => array(
            'type' => 'select',
            'foreign_table' => 'tx_ifthemeconfiguration_domain_model_color',
            'foreign_table_where' => 'ORDER BY tx_ifthemeconfiguration_domain_model_color.name ASC',
        ),
    ),
    'usetracking' => array(
        'exclude' => 1,
        'label' => $llPath.'tx_ifthemeconfiguration_domain_model_themeconfiguration.usetracking',
        'config' => Array (
            'type' => 'check',
            'items' => array(
                array(
                    $llPath.'tx_ifthemeconfiguration_domain_model_themeconfiguration.usetracking.true','1'
                ),
            ),
        )
    ),
    'gacode' => array(
        'label'=>$llPath.'tx_ifthemeconfiguration_domain_model_themeconfiguration.gacode',
        'config' => array(
            'type' => 'input',
            'max' => '255'
        )
    ),
    'anonymizeip' => array(
        'exclude' => 1,
        'label' => $llPath.'tx_ifthemeconfiguration_domain_model_themeconfiguration.anonymizeip',
        'config' => Array (
            'type' => 'check',
            'items' => array(
                array(
                    $llPath.'tx_ifthemeconfiguration_domain_model_themeconfiguration.anonymizeip.true','1'
                ),
            ),
        )
    ),
);

$typeConfig = array('showitem' => '
    --div--;LLL:EXT:if_themeconfiguration/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.label.general,name,theme,maxwidth,pagebg,themeconfig,
    --div--;Navigation,
    --palette--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.palette.mainmenu;if_whitevita_mainmenu;,
    --palette--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.palette.socialmenu;if_whitevita_socialmenu;,
    --palette--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.palette.legalmenu;if_whitevita_legalmenu;,
    --palette--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.palette.offcanvas;if_whitevita_offcanvas;,
    --div--;Header,
    --palette--;Avatar;if_whitevita_avatar;,
    --palette--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.palette.pagetitle;if_whitevita_pagetitle;,headerbackground,
    --div--;Text,--palette--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.palette.generaltext;if_whitevita_generaltext;,
    --palette--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.palette.heading1;if_whitevita_heading1;,
    --palette--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.palette.heading2;if_whitevita_heading2;,
    --palette--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.palette.heading3;if_whitevita_heading3;,
    --palette--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.palette.heading4;if_whitevita_heading4;,
    --palette--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.palette.heading5;if_whitevita_heading5;,
    --palette--;Links;links;,
    --div--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.label.form,formfieldbackground,
    --palette--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.palette.formborders;if_whitevita_formborders;,
    --palette--;Buttons;if_whitevita_formbuttons;,
    --div--;Footer,footertext,footerbackground,footeravatar,
    --div--;Special,--palette--;Overlay-Box;if_whitevita_overlaybox;,divider,
    --div--;Tracking,usetracking,--palette--;Google-Analytics;if_whitevita_googleanalytics;,
    --div--;LLL:EXT:'.$themeconfigKey.'/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.label.colorshemes,colorshemes,
    --div--;LLL:EXT:if_themeconfiguration/Resources/Private/Language/locallang_db.xlf:tx_ifthemeconfiguration_domain_model_themeconfiguration.label.generated,scssfile,cssfile'
);

$GLOBALS['TCA']['tx_ifthemeconfiguration_domain_model_themeconfiguration']['types'][$extKey] = $typeConfig;


$newPalettes = array(
    $extKey."_pagetitle" => array("showitem" => "pagetitle,pagetitlecolor,--linebreak--,pagetitlefont,pagetitlestyle,pagetitleweight,--linebreak--,pagetitle2,pagetitle2color,--linebreak--,pagetitle2font,pagetitle2style,pagetitle2weight","canNotCollapse" => true),
    $extKey."_avatar" => array("showitem" => "avatar,--linebreak--,avatarwidth,avatarheight,--linebreak--,roundedcorner","canNotCollapse" => true),
    $extKey."_mainmenu" => array("showitem" => "navtext,navbordercolor,--linebreak--,navtexthover,navtextactive,--linebreak--,slidebarbackground","canNotCollapse" => true),
    $extKey."_legalmenu" => array("showitem" => "legalmenupid,legalmenutext,legalmenubackground","canNotCollapse" => true),
    $extKey."_socialmenu" => array("showitem" => "socialmenupid,socialmenutext,socialmenubackground,--linebreak--,socialmenuborder,socialmenuhinttext,socialmenuhintbackground","canNotCollapse" => true),
    $extKey."_offcanvas" => array("showitem" => "offcanvasopener,offcanvasbackground,offcanvastext,offcanvasactive","canNotCollapse" => true),
    $extKey."_generaltext" => array("showitem" => "fontsize,defaulttext,generalfont,fontweight","canNotCollapse" => true),
    $extKey."_heading1" => array("showitem" => "h1,h1font,h1style,h1weight","canNotCollapse" => true),
    $extKey."_heading2" => array("showitem" => "h2,h2font,h2style,h2weight","canNotCollapse" => true),
    $extKey."_heading3" => array("showitem" => "h3,h3font,h3style,h3weight","canNotCollapse" => true),
    $extKey."_heading4" => array("showitem" => "h4,h4font,h4style,h4weight","canNotCollapse" => true),
    $extKey."_heading5" => array("showitem" => "h5,h5font,h5style,h5weight","canNotCollapse" => true),
    $extKey."_formborders" => array("showitem" => "formborder,formborderfocus","canNotCollapse" => true),
    $extKey."_formbuttons" => array("showitem" => "formbutton,formbuttonhover","canNotCollapse" => true),
    $extKey."_links" => array("showitem" => "link,linkhover","canNotCollapse" => true),
    $extKey."_overlaybox" => array("showitem" => "overlayboxtext,overlayboxbackground","canNotCollapse" => true),
    $extKey."_googleanalytics" => array("showitem" => "gacode,anonymizeip","canNotCollapse" => true),
);

foreach ($newPalettes as $key => $value) {
    $GLOBALS['TCA']['tx_ifthemeconfiguration_domain_model_themeconfiguration']['palettes'][$key] = $value;
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
    'tx_ifthemeconfiguration_domain_model_themeconfiguration',
    $temporaryThemeColumn,
    1
);