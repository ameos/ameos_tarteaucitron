<?php

use Ameos\AmeosDailymotion\Rendering\DailymotionRenderer;
use Ameos\AmeosForm\Elements\ReCaptcha;
use Ameos\AmeosTarteaucitron\Xclasses\Ameos\AmeosDailymotion\Rendering\DailymotionRenderer as XDailymotionRenderer;
use Ameos\AmeosTarteaucitron\Xclasses\Ameos\AmeosForm\Elements\ReCaptcha as XReCaptcha;
use Ameos\AmeosTarteaucitron\Xclasses\TYPO3\CMS\Core\Resource\Rendering\OldVimeoRenderer;
use Ameos\AmeosTarteaucitron\Xclasses\TYPO3\CMS\Core\Resource\Rendering\OldYouTubeRenderer;
use Ameos\AmeosTarteaucitron\Xclasses\TYPO3\CMS\Core\Resource\Rendering\VimeoRenderer as XVimeoRenderer;
use Ameos\AmeosTarteaucitron\Xclasses\TYPO3\CMS\Core\Resource\Rendering\YouTubeRenderer as XYouTubeRenderer;
use TYPO3\CMS\Core\Configuration\ExtensionConfiguration;
use TYPO3\CMS\Core\Information\Typo3Version;
use TYPO3\CMS\Core\Resource\Rendering\VimeoRenderer;
use TYPO3\CMS\Core\Resource\Rendering\YouTubeRenderer;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\VersionNumberUtility;

defined('TYPO3') or defined('TYPO3_MODE') or die('Access denied.');

if (!defined('TYPO3_version')) {
    $typo3VersionClass = GeneralUtility::makeInstance(Typo3Version::class);
    $typo3Version = VersionNumberUtility::convertVersionNumberToInteger($typo3VersionClass->getVersion());
} else {
    $typo3Version = VersionNumberUtility::convertVersionNumberToInteger(TYPO3_version);
}

if ($typo3Version >= 11000000) {
    $configuration = GeneralUtility::makeInstance(ExtensionConfiguration::class)->get('ameos_tarteaucitron');
} elseif ($typo3Version >= 9002000) {
    $configuration = $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['ameos_tarteaucitron'];
} else {
    $configuration = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['ameos_tarteaucitron']);
}

if ($configuration['xclass_youtube'] == '1') {
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][YouTubeRenderer::class] = [
        'className' => ($typo3Version >= 11000000 ? XYouTubeRenderer::class : OldYouTubeRenderer::class)
    ];
}

if ($configuration['xclass_vimeo'] == '1') {
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][VimeoRenderer::class] = [
        'className' => ($typo3Version >= 11000000 ? XVimeoRenderer::class : OldVimeoRenderer::class)
    ];
}

if (ExtensionManagementUtility::isLoaded('ameos_form')) {
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][ReCaptcha::class] = ['className' => XReCaptcha::class];
}

if (ExtensionManagementUtility::isLoaded('ameos_dailymotion')) {
    if ($configuration['xclass_dailymotion'] == '1') {
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][DailymotionRenderer::class] = [
            'className' => XDailymotionRenderer::class
        ];
    }
}
