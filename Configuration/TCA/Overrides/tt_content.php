<?php

$extKey = "if_whitevita";

$temporaryColumn = array(
    'subtitle' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tt_content.subtitle',
        'config' => Array (
            'type' => 'input',
			'size' => 50,
			'max' => 255,
        )
    ),
    'phone' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tt_content.phone',
        'config' => Array (
            'type' => 'input',
            'size' => 20,
            'max' => 30,
        )
    ),
    'hidemobile' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tt_content.hidemobile',
        'config' => Array (
            'type' => 'check',
            'items' => array(
                array(
                    'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tt_content.hidemobile.true','1'
                ),
            ),
        )
    ),
    'hidedesktop' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tt_content.hidedesktop',
        'config' => Array (
            'type' => 'check',
            'items' => array(
                array(
                    'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tt_content.hidedesktop.true','1'
                ),
            ),
        )
    ),
    'fullscreen' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tt_content.fullscreen',
        'config' => Array (
            'type' => 'check',
            'items' => array(
                array(
                    'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tt_content.fullscreen.true','1'
                ),
            ),
        )
    ),
    'roundimage' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tt_content.roundimage',
        'config' => Array (
            'type' => 'check',
            'items' => array(
                array(
                        'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tt_content.roundimage.true',
                        '1'
                ),
            ),
        )
    ),
    'url' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tt_content.url',
        'config' => Array (
            'type' => 'input',
            'size' => 50,
            'max' => 255,
        )
    ),
    'sourcetype' => array (
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tt_content.sourcetype',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tt_content.sourcetype.default' ,''),
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tt_content.sourcetype.vimeo' ,'vimeo'),
                array('LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tt_content.sourcetype.iframe' ,'iframe'),
            ),
        )
    ),
    'ratio' => array (
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tt_content.ratio',
        'config' => array (
            'type' => 'select',
            'items' => array (
                array('16:9' ,''),
                array('4:3' ,'regular')
            ),
        )
    ),
    'autoplay' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tt_content.autoplay',
        'displayCond' => 'FIELD:sourcetype:!=:iframe',
        'config' => Array (
            'type' => 'check',
            'items' => array(
                array(
                        'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tt_content.autoplay.true',
                        '1'
                ),
            ),
        )
    ),
    'showinfo' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tt_content.showinfo',
        'displayCond' => 'FIELD:sourcetype:!=:iframe',
        'config' => Array (
            'type' => 'check',
            'items' => array(
                array(
                        'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tt_content.showinfo.true',
                        '1'
                ),
            ),
        )
    ),
    'showrel' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tt_content.showrel',
        'displayCond' => array(
            'AND' => array(
                'FIELD:sourcetype:!=:vimeo',
                'FIELD:sourcetype:!=:iframe',
            )
        ),
        'config' => Array (
            'type' => 'check',
            'items' => array(
                array(
                        'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tt_content.showrel.true',
                        '1'
                ),
            ),
        )
    ),
    'videoloop' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tt_content.videoloop',
        'displayCond' => 'FIELD:sourcetype:!=:iframe',
        'config' => Array (
            'type' => 'check',
            'items' => array(
                array(
                        'LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tt_content.videoloop.true',
                        '1'
                ),
            ),
        )
    ),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns(
        'tt_content',
        $temporaryColumn,
        1
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
        'tt_content',
        'header',
        '--linebreak--,subtitle',
        'after:header'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
        'tt_content',
        'frames',
        '--linebreak--,fullscreen,hidemobile,hidedesktop',
        'after:section_frame'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
        'tt_content',
        'image_settings',
        'roundimage',
        'after:imageborder'
);

$newPalettes = array(
    $extKey."_videosettings" => array("showitem" => "imagewidth,imageheight,ratio,--linebreak--,autoplay,showinfo,videoloop,--linebreak--,showrel","canNotCollapse" => true),
);

foreach ($newPalettes as $key => $value) {
    $GLOBALS['TCA']['tt_content']['palettes'][$key] = $value;
}

$GLOBALS['TCA']['tt_content']['ctrl']['requestUpdate'] .= ',sourcetype';

/**
 * Video-Frame-Element
 */
$GLOBALS['TCA']['tt_content']['types']['videoframe']['showitem'] = '
--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.header;header,
--div--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tt_content.div.videoframe,
sourcetype,
url,
--palette--;LLL:EXT:'.$extKey.'/Resources/Private/Language/locallang_db.xlf:tt_content.palette.videosettings;'.$extKey.'_videosettings,
--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.extended,
---SNIP---
--div--;LLL:EXT:gridelements/Resources/Private/Language/locallang_db.xlf:gridElements,tx_gridelements_container,tx_gridelements_columns';

$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = array(
    $extKey.' Special',
    '--div--'
);

$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = array(
    'Video-Frame-Element',
    'videoframe',
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($extKey) . 'Resources/Public/Icons/video.svg'
);